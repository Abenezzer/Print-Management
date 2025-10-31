<?php

// fetch user

use Core\Container;

$db = Container::resolve('database');


$fullName = $_GET['fullName'] ?? null;
if($fullName) {

    $fullName = "%$fullName%";

    $users = $db->query("SELECT * FROM users where full_name LIKE :fullName", ["fullName" => $fullName])->findAll();
    view('users/show.view.php', ["users" => $users]);
    exit;

} 
$limit = 8;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$totalPage = $db->totalRecord("SELECT COUNT(*) FROM users");

$offset = ($page - 1) * $limit;


$users = $db->query
("SELECT * FROM users ORDER BY id LIMIT $limit OFFSET $offset")->findAll();








view('users/show.view.php', ["users" => $users, "page" =>$page, "totalPage" => ceil($totalPage / $limit) ]);
