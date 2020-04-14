<?php
//the local  machine  environment database connections
/*$host = '127.0.0.1';
$db = 'gmlp';
$username = 'root';
$pass = '';
$charset = 'utf8mb4';*/

//the remote server environment database connections
$host = 'remotemysql.com';
$db = '9IJXQTlBFn';
$username = '9IJXQTlBFn';
$pass = ' 54iN63fEsi';
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




