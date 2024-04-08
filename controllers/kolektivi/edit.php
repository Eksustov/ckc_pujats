<?php
require "Database.php";
require "Validator.php";
$config = require("config.php");
$db = new Database($config);

$query = "SELECT * FROM kolektivi where id = :id";
$params = [ ":id" => $_GET["id"]];
$group = $db
        ->execute($query, $params)
        ->fetch();

$validator = new Validator();
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $errors = [];
        
            if (!Validator::string($_POST["name"], min: 1, max:80)) {
                $errors["name"] = "Name cannot be empty or too long";
            }
        
            if (!Validator::string($_POST["description"], min: 1, max:80)) {
                $errors["description"] = "Description cannot be empty or too long";
            }
        
            if (empty($errors)) {
                $query = "UPDATE kolektivi
                SET name = :name, description = :description
                WHERE id = :id;";
                $params = [
                ":name" => $_POST["name"], 
                ":description" => $_POST["description"],
                ":id" => $_GET["id"]
                ];
                $db = new Database($config);
                $db->execute($query, $params);
            
                header("Location: /");
                die();
            }
        }
$title = "EDIT";
include "views/kolektivi/edit.view.php";
?>