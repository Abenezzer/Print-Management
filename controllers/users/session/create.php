<?php

use Core\Container;
use Core\Validator;


$username = $_POST['username'];
$password = $_POST['password'];

$errros = [];

if (!Validator::string($username)) {
    $errros['username'] = "username must be at least 3 characters long";
}
if (!Validator::password($password)) {
    $errros['password'] = "password must be at least 6 characters long";
}

if (!empty($errros)) {
    $_SESSION['_flashed']['errors'] = $errros;
    redirect('/');
}


// $dbConfig = $config['database'] ?? null;

$db = Container::resolve("database");

$user = $db->query("SELECT * FROM users where username=:username", ["username" => $username])->find();


if (empty($user)) {
    $errros['notfound'] = "User not found plase contact the IT team to create one";
    $_SESSION['_flashed']['errors'] = $errros;
    redirect('/');
}

if ($user['password'] !== $password) {
    $errros['password'] = "Invalid password (if you forgot your password please contact the IT team)";
    $_SESSION['_flashed']['errors'] = $errros;
    redirect('/');
}

// create session and redirect 

login([
    "full_name" => $user['full_name'],
    "role" => $user['role']
]);

