<?php

function base_path($path)
{
    return BASE_PATH . "/{$path}";
}

function view($path, $params = [])
{
    extract($params);
    $path = BASE_PATH . "/views/{$path}";
    return require($path);
}

function partial($path, $params = [])
{
    extract($params);
    $path  =  BASE_PATH . "/views/partials/{$path}";
    return require($path);
}

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function dump($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

function redirect($value)
{
    header("location: $value");
    die();
}

function login($user)
{
    $_SESSION['user'] = $user;
    return redirect('/');
}

function logout()
{
    $_SESSION = [];
    session_destroy();
    redirect('/');
    die();
}

function loadDashboardByRole($role)
{
    switch ($role) {
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
}
