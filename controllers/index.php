<?php

if (!isset($_SESSION['user'])) {
    redirect('/login');
}

$role = $_SESSION['user']['role'];

switch($role) {
    case 'admin': 
        view("admin/index.view.php");
        break;
    case "teacher":
        view("teacher/index.view.php");
        break;
    case "approver":
        view("admin/index.view.php");
        break;
    case "printer":
        view("printer/index.view.php");
        break;
    default: 
        dd("404");
}
