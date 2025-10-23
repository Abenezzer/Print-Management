<?php

function base_path($path)
{
    return require BASE_PATH . "/{$path}";
}

function view($path)
{
    $path = BASE_PATH . "/views/{$path}";
    return require($path);
}

function partial($path) {
    $path  =  BASE_PATH . "/views/partials/{$path}";
    return require($path);
}

function dd($value)
{
    var_dump($value);
    die();
}
