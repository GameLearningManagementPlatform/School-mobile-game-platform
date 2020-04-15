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




