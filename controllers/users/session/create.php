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
$dbusername = $dbConfig['username'];
$dbpassword = $dbConfig['password'];




 $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbusername, $dbpassword);

$statment = $db->prepare("SELECT * FROM users where username =:username");
$statment->execute(["username"=> $username]);
$user = $statment->fetch(PDO::FETCH_ASSOC);

if(empty($user)) {
    $errros['notfound'] = "User not found plase contact the IT team to create one";
    $_SESSION['_flashed']['errors'] = $errros;
    header('location: /');
    die();

}

if($user['password'] !== $password) {
    $errros['password'] = "Invalid password (if you forgot your password please contact the IT team)";
    $_SESSION['_flashed']['errors'] = $errros;
    header('location: /');
    die();
   
}

dd("you are logged in");