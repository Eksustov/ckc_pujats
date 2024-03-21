<?php
$config = require("config.php");
require "Database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $query = "INSERT INTO kolektivi (name, description)
    VALUES (:name, :description);";
    $params = [
        ":name" => $_POST["name"], 
        "description" => $_POST["description"]
    ];
    $db = new Database($config);
    $db->execute($query, $params);
    
    header("Location: /kolektivi");
    die();
}
    
$title = "Augstākā būtne";
require "views/kolektivi-create.view.php";