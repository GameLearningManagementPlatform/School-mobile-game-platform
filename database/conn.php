<?php
//the local  machine  environment database connections
/* $host = '127.0.0.1';
 $db = 'gmlp';
 $username = 'root';
 $pass = '';
 $charset = 'utf8mb4';
*/

//the remote server environment database connections
$host = 'ol5tz0yvwp930510.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$db = 'tyegkr1szm5vwd8a';
$username = 'l104kv1o1q6abaz1';
$pass = 'f938oeksqmcobz70';
$charset = 'utf8mb4';

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




