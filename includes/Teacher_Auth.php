<?php
//check the role for Teacher authentication
if (($_SESSION['role'] != 'Platform Admin') && ($_SESSION['role'] != 'School Manager') && ($_SESSION['role'] != 'School Admin') && ($_SESSION['role'] != 'Teacher')){
    echo '<h1>YOU ARE NOT AUTHORIZED TO VIEW THIS PAGE</h1>';
    //maybe redirect to login page
    //header('Location: game_DisplayAllGames.php');
    die();
}