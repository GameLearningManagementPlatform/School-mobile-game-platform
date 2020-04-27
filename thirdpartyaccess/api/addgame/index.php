<?php

  header('Access-Control-Allow-Origin: *');
  header('Access-Control-Allow-Method: POST');
  header('Conent-Type: application/json');
  header('Access-Control-Allow-Header: Access-Control-Allow-Method, Access-Control-Allow-Orgin, Content-Type, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../model/Games.php';
  include_once '../../model/VerifyGameKey.php'; //Key is API key assigned to game company

  // Database Initialization
  $database = new Database();
  $db = $database->connect();

  // Initialize API key verificator
  $verify_key = new VerifyGameKey($db);

  // Initialize Games Model
  $game = new Games($db);

  // Get user inputs
  $data = json_decode(file_get_contents('php://input'));

  $game->game_name = $data->gameName;
  $game->game_name = $data->gameName;
  $game->game_name = $data->gameName;
  $game->game_name = $data->gameName;

