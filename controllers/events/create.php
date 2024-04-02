<?php
$config = require("config.php");
require "Database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    if (trim($_POST["date"]) == "") {
        $errors["date"] = "Date cannot be empty";
    }

    if (trim($_POST["event"]) == "") {
        $errors["event"] = "Event cannot be empty";
    }

    if (strlen($_POST["event"]) > 80) {
        $errors["event"] = "Name is too long";
    }

    if (trim($_POST["location"]) == "") {
        $errors["location"] = "Location cannot be empty";
    }

    if (strlen($_POST["location"]) > 80) {
        $errors["location"] = "Location is too long";
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