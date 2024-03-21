<?php
$config = require("config.php");
require "Database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
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
    
$title = "Augstākā būtne";
require "views/events-create.view.php";