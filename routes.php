<?php

use Core\Router;

$router = new Router();
$router->get('/', 'controllers/index.php');
$router->get('/login', 'controllers/users/session/show.php');
$router->get('/register', 'controllers/users/registration/show.php')->only(['admin']);
$router->post('/register', 'controllers/users/registration/create.php')->only(['admin']);
$router->post('/login', 'controllers/users/session/create.php');
$router->get('/logout', 'controllers/users/session/destroy.php');
$router->get('/users', 'controllers/users/index.php')->only(['admin']);
$router->get('/show-user', "controllers/users/show.php")->only(['admin']);
$router->patch('/update-user', 'controllers/users/update.php')->only(['admin']);