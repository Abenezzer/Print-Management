<?php

use Core\Container;
use Core\Session;
use Core\Validator;


$username = $_POST['username'];
$password = $_POST['password'];

$errors = [];

if (!Validator::string($username)) {
    $errors['username'] = "username must be at least 3 characters long";
}
if (!Validator::password($password)) {
    $errors['password'] = "password must be at least 6 characters long";
}

if (!empty($errors)) {
    Session::putFlashed("errors", $errors);
    redirect('/');
}


// $dbConfig = $config['database'] ?? null;

$db = Container::resolve("database");

$user = $db->query("SELECT * FROM users where username=:username", ["username" => $username])->find();


if (empty($user)) {
    $errors['notfound'] = "User not found plase contact the IT team to create one";
    Session::putFlashed("errors", $errors);
    redirect('/');
}

if ($user['password'] !== $password) {
    $errors['password'] = "Invalid password (if you forgot your password please contact the IT team)";
    Session::putFlashed("errors", $errors);
    redirect('/');
}

// create session and redirect 

login([
    "full_name" => $user['full_name'],
    "role" => $user['role']
]);

