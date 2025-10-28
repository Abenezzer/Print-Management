<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "../vendor/autoload.php";

session_start();

define("BASE_PATH", dirname(__DIR__, 1));

require "../functions.php";
require base_path('routes.php');
require base_path("bootstrap.php");

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_POST['__method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
$_SESSION['_flashed'] = [];
