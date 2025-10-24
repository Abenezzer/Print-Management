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

function partial($path, $params = []) {
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

function redirect($value) {
    header("location: $value");
    die();
}

function logout() {
    $_SESSION = [];
    session_destroy();
    redirect('/');
    die();
}