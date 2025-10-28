<?php

use Core\Container;
use Core\Database;

Container::bind("database", function () {
    $config = require base_path('/config.php');
    $db = new Database($config['database']);
    return $db;
});
