<?php
$config = require("config.php");
require "Database.php";
require "Validator.php";
$validator = new Validator();

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    if (trim($_POST["date"]) == "") {
        $errors["date"] = "Date cannot be empty";
    }

    if (!Validator::string($_POST["event"], min: 1, max:80)) {
        $errors["event"] = "Event cannot be empty or too long";
    }

    if (!Validator::string($_POST["location"], min: 1, max:255)) {
        $errors["location"] = "Location cannot be empty or too long";
    }

    if (empty($errors)) {
    $query = "INSERT INTO events (date, event, location)
    VALUES (:date, :event, :location);";
    $params = [
        ":date" => $_POST["date"], 
        ":event" => $_POST["event"],
        ":location" => $_POST["location"]
    ];
    $db = new Database($config);
    $db->execute($query, $params);
    
    header("Location: /");
    die();
}
}
    
$title = "Augstākā būtne";
require "views/events/create.view.php";