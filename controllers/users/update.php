<?php

use Core\Container;
use Core\Session;
use Core\Validator;
use FFI\CData;

$id = $_POST['id'];
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
    Session::putFlashed("errors", $errors);
    redirect('/show-user');
}

$db = Container::resolve('database');

$user = $db->query("select * from users where  username = :username", ["username" => $username])->find();

if($user) {
    $errors['username'] = "Username Already Exist";
    Session::putFlashed("errors", $errors);
    redirect('/show-user');

}





$db->query("UPDATE users set full_name = :fullname, username = :username, password = :password, role =:role WHERE id = :id", [
    "id" => $id,
    "fullname" => $fullname,
    "username" => $username,
    "password" => password_hash($password,PASSWORD_DEFAULT),
    "role" => $role
])->lastCreatedItem('users');

$user = $db->query("SELECT * from users WHERE id = :id", ["id" => $id])->find();
 
$user['password'] = $password;
view('users/display.view.php', ["user" => $user]);
