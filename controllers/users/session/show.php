<?php 
view('users/login.view.php',[
    "errors" => $_SESSION['_flashed']['errors'] ?? []
] );
