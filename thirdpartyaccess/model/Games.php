<?php

  class Games {
    private $conn;
    private $table = '';
    private $player_table = 'student_registration';
    private $game_developers = 'game_developers';
    
    public $player_id;
    public $company_name;
    public $address;
    public $country;
    public $email;
    public $phone;

    public function __construct($db) {
      $this->conn = $db;
    }

    public function verify_gamer() {
      // query
      $query = 'SELECT * FROM '.$this->player_table.' WHERE user_id = :player_id';

      // prepare query
      $stmt = $this->conn->prepare($query);

      // clean data
      $this->player_id = htmlspecialchars(strip_tags($this->player_id));

      // bind param
      $stmt->bindParam(':player_id', $this->player_id);

      // execute statement
      if ($stmt->execute()) {
        return $stmt;
      }

      printf('Error: ', $stmt->error);
      return;

    }

    public function add_new_gamer() {
      // query
      $query = "INSERT INTO ".$this->game_developers." 
                  (company_name, address, country, email, phone)
                VALUES 
                  (:company_name, :address, :country, :email, :phone)";
      
      // prepare query
      $stmt = $this->conn->prepare($query);

      // clean data
      $this->company_name = htmlspecialchars(strip_tags($this->company_name));
      $this->address = htmlspecialchars(strip_tags($this->address));
      $this->country = htmlspecialchars(strip_tags($this->country));
      $this->email = htmlspecialchars(strip_tags($this->email));
      $this->phone = htmlspecialchars(strip_tags($this->phone));
      
      // bind parameters
      $stmt->bindParam(':company_name', $this->company_name);
      $stmt->bindParam(':address', $this->address);
      $stmt->bindParam(':country', $this->country);
      $stmt->bindParam(':email', $this->email);
      $stmt->bindParam(':phone', $this->phone);

      // execute query
      if ($stmt->execute()) {
        return true;
      }
    
      //Error message
      printf("Error: ", $stmt->error);
      return false;
    }

    
  }