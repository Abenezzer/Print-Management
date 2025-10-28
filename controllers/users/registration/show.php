<?php

use Core\Session;
view('users/register.view.php',  ["errors" => Session::getFlashed('errors')]);