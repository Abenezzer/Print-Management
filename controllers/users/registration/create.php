<?php

use Core\Container;
use Core\Validator;


$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];
$comfPassword = $_POST['comfPassword'];
$role = $_POST['role'];

$errors = [];
if (!Validator::string($fullname)) {
    $errors['fullname'] = "Invalid Fullname";
}
if (!Validator::string($username)) {
    $errors['username'] = "Invalid username";
}
if (!Validator::password($password)) {
    $errors['password'] = "Password must be at least 6 characters long.";
}
if (!Validator::comfirmPassword($password, $comfPassword)) {
    $errors['comfPassword'] = "Passwords do not match.";
}

if (!Validator::role($role)) {
    $errors['role'] = "Invalid role selected. Allowed roles are: Teacher, Approver, or Admin.";
}

if (!empty($errors)) {
    $_SESSION['_flashed']['errors'] = $errors;
    redirect('/register');
}

$db = Container::resolve("database");

$user = $db->query("select * from users where username=:username", ["username" => $username])->find();

if ($user) {
    $errors['username'] = "Username Already Exits";
    $_SESSION['_flashed']['errors'] = $errors;
    redirect('/register');
}

$user = $db->query(
    "INSERT INTO users(full_name, username,role, password) VALUES(:full_name, :username, :role, :password)",
    [
        "full_name" => $fullname,
        "username" => $username,
        "role" => $role,
        "password" => password_hash($password, PASSWORD_DEFAULT)
    ]
)->lastCreatedItem('users');

$user['password'] = $password;
view('users/display.view.php', ["user" => $user]);






// if correct register a new user.