<?php
require_once  'includes/admin_auth.php';


require_once 'database/conn.php';
if (!$_GET['id']){
    echo 'error';
}else{
    $id = $_GET['id'];
    $results = $gamesCrud->deleteGame($id);

    if ($results){
        header('Location: game_viewGames.php');
    }else{
        echo 'error';
    }
}