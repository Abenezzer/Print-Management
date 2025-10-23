<?php

use Core\Router;

$router = new Router();
$router->get('/', 'controllers/users/session/show.php');

