<?php
//we will call our function get_connection inside our functions to query easily
function get_connection()
{
    $config = require 'libraries/configurations.php';

    $pdo = new PDO(
        $config['database_dsn'],
        $config['database_user'],
        $config['database_pass']
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;
}
function get_games()
{
    $pdo = get_connection();
    $result = $pdo->query('SELECT * FROM v4SLRMJ8jK.game');
    $games = $result->fetchAll();
    return $games;
}

function show_one_game($id)
{
    $pdo = get_connection();
    $query = 'SELECT * FROM v4SLRMJ8jK.game WHERE id = :idVal';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('idVal', $id);
    $stmt->execute();

    return $stmt->fetch();
}