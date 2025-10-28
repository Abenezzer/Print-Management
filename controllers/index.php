<?php

if (!isset($_SESSION['user'])) {
    redirect('/login');
}

$role = $_SESSION['user']['role'];


loadDashboardByRole($role);