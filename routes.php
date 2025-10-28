<?php

use Core\Router;

$router = new Router();
$router->get('/', 'controllers/index.php');
$router->get('/login', 'controllers/users/session/show.php');
$router->get('/register', 'controllers/users/registration/show.php');
$router->post('/register', 'controllers/users/registration/create.php');
$router->post('/login', 'controllers/users/session/create.php');
$router->get('/logout', 'controllers/users/session/destroy.php');

