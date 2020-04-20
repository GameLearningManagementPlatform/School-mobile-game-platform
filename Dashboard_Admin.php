<?php
$title = 'User Login';

require_once 'includes/header.php';
require_once 'database/conn.php';
require_once 'includes/auth_check.php';


//check the role for authentication
if ($_SESSION['role'] != 'Platform Admin'){
    echo '<h1>You are not an authorised user</h1>';
    //maybe redirect to login page
    die();
}

include_once 'includes/footer.php' ?>