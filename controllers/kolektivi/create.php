<?php
$config = require("config.php");
require "Database.php";
require "Validator.php";
$validator = new Validator();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $errors = [];

    if (!Validator::string($_POST["name"], min: 1, max:80)) {
        $errors["name"] = "Name cannot be empty or too long";
    }

    if (!Validator::string($_POST["description"], min: 1, max:80)) {
        $errors["description"] = "Description cannot be empty or too long";
    }

    if (empty($errors)){
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
}
    
$title = "Augstākā būtne";
require "views/kolektivi/create.view.php";