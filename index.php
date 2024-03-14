<?php

require "function.php";

$url = $_SERVER["REQUEST_URI"];

if ($url == "/"){
    require "controllers/index.php";
} elseif ($url == "/kolektivi"){
    require "controllers/kolektivi.php";
} else {
    http_response_code(404);
    require "controllers/404.php";
}