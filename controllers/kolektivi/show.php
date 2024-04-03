<?php
require "Database.php";
$config = require("config.php");
$db = new Database($config);

$query = "SELECT * FROM kolektivi where id = :id";
$params = [ ":id" => $_GET["id"]];
$group = $db
        ->execute($query, $params)
        ->fetch();

$title = "EDIT";
include "views/kolektivi/show.view.php";
?>