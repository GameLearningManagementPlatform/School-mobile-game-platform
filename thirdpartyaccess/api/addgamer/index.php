<?php
  
  header('Access-Control-Allow-Origin: *');
  header('Access-Control-Allow-Method: POST');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Header: Access-Control-Allow-Origin, Access-Control-Allow-Method, Content-Type, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../model/Games.php';

  // Database Initialization
  $database = new Database();
  $db = $database->connect();

  // Games Model Initialization
  $gamer = new Games($db);

  // Get user input
  $data = json_decode(file_get_contents('php://input'));

  // bind user input to Games Model
  $gamer->company_name = $data->companyName;
  $gamer->address = $data->address;
  $gamer->country = $data->country;
  $gamer->email = $data->email;
  $gamer->phone = $data->phone;

  try {
    $gamer->add_new_gamer();

    http_response_code(202);
    echo json_encode(array(
      "status" => "success",
      "message" => "game company registered"
    ));

  } catch (Exception $e) {

    http_response_code(400);
    echo json_encode(array(
      "status" => "failed",
      "message" => $e
    ));
    die();

  }