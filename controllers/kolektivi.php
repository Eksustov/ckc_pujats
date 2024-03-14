<?php
$config = require("config.php");

require "Database.php";

$query = "SELECT * FROM kolektivi";
$params = [];

$db = new Database($config);
$groups = $db
        ->execute($query, $params)
        ->FetchAll();

    $title = "KOLEKTIVI";
    require "views/kolektivi.view.php";
?>