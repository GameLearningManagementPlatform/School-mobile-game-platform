<?php

$title = 'Edit Games registration';
require 'includes/header.php';
require_once 'database/conn.php';

//save data into database
if (isset($_POST['submit'])) {
    //this ID posted from Platform_EditUser will help us update user on its ID reference $id = $_POST['user_id'];
    $id = $_POST['id'];
    $company_name = $_POST['company_name'];
    $game_name = $_POST['game_name'];
    $domain_name = $_POST['domain_name'];
    $student_level = $_POST['student_level'];
    $description = $_POST['description'];
    $gameurl = $_POST['gameurl'];
    $image = $_POST['image'];


    $result = $gamesCrud->updateGame ($id, $company_name, $game_name, $domain_name, $student_level, $description, $gameurl, $image);

    if($result){
        header("Location: game_viewGame.php");
    }
    else{
        echo '<h1>Error</h1>';
    }
}
else{
    echo  '<h1>Error</h1>';

}



?>

<?php require 'includes/footer.php' ?>
