<?php
$host = '127.0.0.1';
$db = 'game_learning_management_platform';
$username = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try{
    $pdo = new PDO($dsn, $username, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e) {
    throw new PDOException($e->getMessage());
}
require  'managercrud.php';
$crud = new crud($pdo);

?>




