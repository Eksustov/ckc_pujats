<?php
require "Database.php";
$config = require("config.php");

$db = new Database($config);

$_GET["id"] = $_POST["id"];

$query = "SELECT * FROM events where id = :id";
$params = [ ":id" => $_POST["id"]];
$event = $db->execute($query, $params);

$title = "EDIT";
include "views/events/show.view.php";
?>