<?php
require "Database.php";
require "Validator.php";
$config = require("config.php");
$db = new Database($config);

$query = "SELECT * FROM events where id = :id";
$params = [ ":id" => $_GET["id"]];
$event = $db
        ->execute($query, $params)
        ->fetch();

        $validator = new Validator();
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $errors = [];

    if (trim($_POST["date"]) == "") {
        $errors["date"] = "Date cannot be empty";
    }

    if (!Validator::string($_POST["event"], min: 1, max:80)) {
        $errors["event"] = "Event cannot be empty or too long";
    }

    if (!Validator::string($_POST["location"], min: 1, max:80)) {
        $errors["location"] = "Location cannot be empty or too long";
    }

    if (empty($errors)) {
        $query = "UPDATE events
        SET date = :date, event = :event, location = :location
        WHERE id = :id;";
        $params = [
        ":date" => $_POST["date"], 
        ":event" => $_POST["event"], 
        ":location" => $_POST["location"],
        ":id" => $_GET["id"]
        ];
        $db = new Database($config);
        $db->execute($query, $params);
    
        header("Location: /");
        die();
    }
}

$title = "EDIT";
include "views/events/edit.view.php";
?>