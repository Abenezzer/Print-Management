<?php

use Core\Router;

$router = new Router();
$router->get('/', 'controllers/users/session/show.php');
$router->post('/login', 'controllers/users/session/create.php');

