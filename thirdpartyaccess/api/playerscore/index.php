<?php

  header('Access-Control-Allow-Origin: *');
  header('Access-Control-Allow-Method: POST');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Orgin, Access-Control-Allow-Method, Access-Control-Allow-Headers, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../model/GameData.php';


  $database = new Database();
  $db = $database->connect();

  $score = new GameData($db);

  $score_data = json_decode(file_get_contents('php://input'));

  $score->player_id = $score_data->user;
  $score->game_id = $score_data->id;
  $score->play_mode = $score_data->playMode; //"individual" of "group"
  $score->start_time = $score_data->startTime;
  $score->end_time = $score_data->endTime;
  $score->score = $score_data->score;
  // $score->API_key = $score_data->API_KEY;
  
  // $score->game_play_id = $score_data->gamePlayId;
  // $result = $score->verify_API_KEY();
  // echo $result;
  
  // if ($result) {
    // $score->game_id = $gam;

    try {
      $score->publish_score_to_db();
  
    } catch (Exception $e) {
      http_response_code(400);
      echo json_encode(array(
        "status" => "failed",
        "message" => $e
      ));
      die();
    }
  
    http_response_code(202);
    echo json_encode(array(
      "status" => "accepted",
      "message" => "user score logged"
    ));
    
    
  // } else {
  //   http_response_code(400);
  //   echo json_encode(array(
  //     "status" => "failed",
  //     "message" => "invalid request key"
  //   ));
  // }
  

