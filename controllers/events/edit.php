<?php
require "Database.php";
$config = require("config.php");
$db = new Database($config);

$query = "SELECT * FROM events where id = :id";
$params = [ ":id" => $_GET["id"]];
$event = $db
        ->execute($query, $params)
        ->fetch();

$title = "EDIT";
include "views/events/edit.view.php";
?>