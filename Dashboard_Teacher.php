<?php
$title = 'User Login';

require_once 'includes/header.php';
require_once 'database/conn.php';
require_once 'includes/auth_check.php';


//check the role for authentication
if (($_SESSION['role'] != ' Teacher') or ($_SESSION['role'] != 'Platform Admin') or ($_SESSION['role'] != 'School Manager') or ($_SESSION['role'] != 'School Admin') ){
    echo '<h1>YOU ARE NOT AUTHORIZED TO VIEW THIS PAGE</h1>';
    //maybe redirect to login page
    header('Location: game_DisplayAllGames.php');
    die();
}
include_once 'includes/footer.php' ?>