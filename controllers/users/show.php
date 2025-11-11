<?php

use Core\Container;
use Core\Session;

$db = Container::resolve('database');

$id = $_GET['id'] ?? null;

$user = $db->query("select * from users where id = :id", ["id" => $id])->find();

if($user) {
    
view('users/show.view.php', ["user" => $user]);
exit();
}

view('users/show.view.php', ["user" => [], "errors" => Session::getFlashed('errors')]);