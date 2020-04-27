<?php
  
  header('Access-Control-Allow-Origin: *');
  header('Access-Control-Allow-Method: POST');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Header: Access-Control-Allow-Origin, Access-Control-Allow-Method, Content-Type, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../model/Games.php';
  include_once '../../model/GameData.php';

  // Database Initialization
  $database = new Database();
  $db = $database->connect();

  // Games Model Initialization
  $gamer = new Games($db);

  $game = new GameData($db);

  // Get user input
  $data = json_decode(file_get_contents('php://input'));

  // bind user input to Games Model
  $gamer->player_id = $data->playerId;
  $game->API_KEY = $data->API_KEY;

  $result->$game->verify_API_KEY();


  if($result) {

    try {

      $result = $gamer->verify_gamer();

    } catch (Exception $e) {

      http_response_code(400);
      echo json_encode(array(
        "status" => "failed",
        "message" => $e
      ));
      die();

    }

    $gamer_info = $result->fetch();
    
    if ($gamer_info->rowCount() > 0) {

      http_response_code(400);
      echo json_encode(array(
        "status" => "valid",
        "message" => json_encode(array(
          "firstname" => $gamer_info->firstname
        ))
      ));

    } else {
      http_response_code(404);
      echo json_encode(array(
        "status" => "invalid",
        "message" => "user does not exist"
      ));
    }



  } else {

    http_response_code(400);
    echo json_encode(array(
      "status" => "failed",
      "message" => "invalid request key"
    ));
  }

