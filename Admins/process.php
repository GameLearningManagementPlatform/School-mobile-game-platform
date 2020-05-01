<?php
session_start();
$game_name = '';
$company_id = '';
$Company = '';
$domain = '';
$domain_id = '';
$description = '';
$image = '';
$school_level = '';

// Create connection
//this is a local connection
/*$mysql = new mysqli(
    "localhost",
    "root",
    "",
    "game_learning_management_platform"
) or die(mysqli_error($mysql));*/

//this is a remote connection
$mysql = new mysqli(
    " remotemysql.com",
    "v4SLRMJ8jK",
    "vm7tuoFU88",
    "v4SLRMJ8jK"
) or die(mysqli_error($mysql));

//save data into database
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['game_name'])) {
        $game_name = $_POST['game_name'];
    } else {
        $game_name = 'A game without a name';
    }
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    } else {
        $id = 'A game without a id';
    }

    if (isset($_POST['company_name'])) {
        $Company = $_POST['company_name'];
    } else {
        $Company = 'A game without a Company';
    }
    if (isset($_POST['domain_name'])) {
        $domain = $_POST['domain_name'];
    } else {
        $domain = 'A game without a domain_name';
    }
    if (isset($_POST['student_level'])) {
        $school_level = $_POST['student_level'];
    } else {
        $school_level = 'A game without a school level';
    }
    if (isset($_POST['description'])) {
        $description = $_POST['description'];
    } else {
        $description = 'A game without a  description';
    }
    if (isset($_POST['company_id'])) {
        $company_id = $_POST['company_id'];
    } else {
        $company_id = 'A game without a  company_id';
    }
    if (isset($_POST['domain_id'])) {
        $domain_id = $_POST['domain_id'];
    } else {
        $domain_id = 'A game without a  domain_id';
    }
    if (isset($_POST['image'])) {
        $image = $_POST['image'];
    } else {
        $image = 'A game without a  image';
    }
    if (isset($_POST['save'])){
        $_SESSION['message'] = 'Record has been saved ';
        $_SESSION['msg_type'] = 'success';

    }


    $Sqlresult = $mysql->query("INSERT INTO game (id,game_name, company_id, domain_id,company_name,student_level,domain_name,description,image)
VALUES ('$id','$game_name', '$company_id','$domain_id','$Company','$school_level','$domain','$description','$image' )");

    header('Location:/Admins/index.php');
    die;
}


if (isset($_GET['delete'])){
    $id = $_GET['delete'];

    $mysql->query("DELETE FROM game WHERE id=$id") or die(mysqli_error($mysql));
    $_SESSION['message'] = 'Record has been deleted ';
    $_SESSION['msg_type'] = 'danger';
    header('Location: /Admins/index.php');
    die;

}
if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $result = $mysql->query("SELECT * FROM game WHERE id=$id") or die(mysqli_error($mysql));
    //ensuring that the record chose is available in the database
    if (count($result)  == 1){
        $row = $result->fetch_array();

        $id= $row['id'];
        $game_name = $row['game_name'];
        $company_id =  $row['company_id'];
        $domain_id =  $row['domain_id'];
        $Company = $row['company_name'];
        $school_level =  $row['student_level'];
        $domain =  $row['domain_name'];
        $description = $row['description'];
        $image = $row['image'];

    }
    //in the form create.php, we need to echo the record according to the id choosen to be able to edit the values then save them
}

function show_tables(){
    $sql = "SELECT * FROM game";
}