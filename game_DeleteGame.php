<?php
require_once 'includes/auth_check.php';

require_once 'database/conn.php';
if (!$_GET['id']){
    echo 'error';
}else{
    $id = $_GET['id'];
    $results = $gamesCrud->deleteGame($id);

    if ($results){
        header('Location: schoolTeacherViewUsers.php');
    }else{
        echo 'error';
    }
}