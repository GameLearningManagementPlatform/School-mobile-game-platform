<?php

  class GameData {
    private $conn;
    private $table = 'users';
    
    // user data
    public $player_id;
    
    // game company data
    public $game_id;
    public $API_key;
    
    // score data
    public $play_mode;
    public $start_time;
    public $end_time;
    public $score;

    // DB constructor
    public function __construct($db) {
      $this->conn = $db;
    }

    public function publish_score_to_db() {
      // query
      $query = "INSERT INTO score_board 
                  (player_id, game_id, play_mode, start_time, end_time, score)
                VALUES 
                  (:player_id, :game_id, :play_mode, :start_time, :end_time, :score)";
      
      // prepare query
      $stmt = $this->conn->prepare($query);

      // clean data
        $this->player_id = htmlspecialchars(strip_tags($this->player_id));
      $this->game_id = htmlspecialchars(strip_tags($this->game_id));
      $this->play_mode = htmlspecialchars(strip_tags($this->play_mode));
      $this->start_time = htmlspecialchars(strip_tags($this->start_time));
      $this->end_time = htmlspecialchars(strip_tags($this->end_time));
      $this->score = htmlspecialchars(strip_tags($this->score));

      // bind parameters
      $stmt->bindParam(':player_id', $this->player_id);
      $stmt->bindParam(':game_id', $this->game_id);
      $stmt->bindParam(':play_mode', $this->play_mode);
      $stmt->bindParam(':start_time', $this->start_time);
      $stmt->bindParam(':end_time', $this->end_time);
      $stmt->bindParam(':score', $this->score);

      // execute query
      if ($stmt->execute()) {
        return true;
      }
    
      //Error message
      // printf("Error: ", $stmt->error);
      return false;

    }

    public function verify_API_KEY() {
      // query
      $query = 'SELECT * FROM game_developers WHERE API_key = :API_key LIMIT 1';

      // prepare query
      $stmt = $this->conn->prepare($query);

      // clean data
      $this->username = htmlspecialchars(strip_tags($this->API_key));

      // bind params
      $stmt->bindParam(':API_key', $this->API_key);

      // execute query
      $stmt->execute();
      if ($stmt->rowCount() > 0) {
        // echo $stmt->fetch()->game_dev_id;
        return $stmt->fetch()->game_dev_id;
      }
    
      //Error message
      printf("Error: ", $stmt->error);
      return false;
      
    }
    
  }