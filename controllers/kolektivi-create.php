<?php
$config = require("config.php");
require "Database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $errors = [];

    if (trim($_POST["name"]) == "") {
        $errors["name"] = "Name cannot be empty";
    }

    if (strlen($_POST["name"]) > 80) {
        $errors["name"] = "Name is too long";
    }

    if (trim($_POST["description"]) == "") {
        $errors["description"] = "Description cannot be empty";
    }

    if (strlen($_POST["description"]) > 80) {
        $errors["description"] = "Description is too long";
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
require "views/kolektivi-create.view.php";