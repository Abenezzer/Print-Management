<?php

use Core\Validator;

$username = $_POST['username'];
$password = $_POST['password'];

$errros = [];

if(!Validator::string($username)) {
    $errros['username'] = "username must be at least 3 characters long";
    
}
if(!Validator::password($password)) {
    $errros['password'] = "password must be at least 6 characters long";
}

if(!empty($errros)) {
    $_SESSION['_flashed']['errors'] = $errros;
    header('location: /');
    die();

}

$config = require base_path('/config.php');

$dbConfig = $config['database'] ?? null;

$dns = http_build_query($dbConfig, ':');

$host = $dbConfig['host'];
$dbname = $dbConfig['dbname'];
$username = $dbConfig['username'];
$password = $dbConfig['password'];




 $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

 dd($db);