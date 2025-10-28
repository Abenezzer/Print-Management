<?php
 $errors  = $_SESSION['_flashed']['errors'] ?? "";
view('users/register.view.php', ["errors" => $errors]);