<?php
$config = require("config.php");

require "Database.php";

$query = "SELECT * FROM events";
$params = [];

$db = new Database($config);
$events = $db
        ->execute($query, $params)
        ->fetchAll();

    $title = "PASAKUMI";
    include "views/events/index.view.php";
?>