<?php
//the local  machine  environment database connections
$host = '127.0.0.1';
$db = 'gmlp';
$username = 'root';
$pass = '';
$charset = 'utf8mb4';

//the remote server environment database connections
/*$host = 'us-cdbr-iron-east-01.cleardb.net';
$db = 'heroku_ef9afaef23699ff';
$username = 'bc337d31c2f817';
$pass = ' 2947a474';
$charset = 'utf8mb4';*/

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try {
    $pdo = new PDO($dsn, $username, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    throw new PDOException($e->getMessage());
}
require 'SchoolManagerAdmin_Crud.php';
require_once 'user_authentication.php';
$crud = new crud($pdo);
$user_authentication = new user_authentication($pdo);

//te first users to be loaded
$user_authentication->insertUser("admin", "password", "Platform Admin");
//$user_authentication->getRole($role);

require 'gamesCrud.php';
$gamesCrud = new gamesCrud($pdo);

//initiate Student_Crud
require 'Student_Crud.php';
$Student_Crud = new Student_Crud($pdo);

//initiate SchoolTeacher_Crud
require 'SchoolTeacher_Crud.php';
$SchoolTeacher_Crud = new SchoolTeacher_Crud($pdo);
?>




