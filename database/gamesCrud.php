<?php

class gamesCrud
{
    private $db;

    //constructor to initialize private variable to the database connection
    function __construct($conn)
    {
        $this->db = $conn;
    }

    public function registerNewGame($company_name, $game_name, $domain_name, $student_level, $description, $gameurl, $image)
    {
        try {
            // define sql statement to be executed
            $sql = "INSERT into game_registration(company_name, game_name,domain_name,
            student_level,description,gameurl,image  ) VALUES (:company_name, :game_name, 
            :domain_name, :student_level,  :description, :gameurl, :image)";
            //prepare the sql statement for execution
            $pdo = $this->db->prepare($sql);
            // bind all placeholders to the actual values
            $pdo->bindparam(':company_name', $company_name);
            $pdo->bindparam(':game_name', $game_name);
            $pdo->bindparam(':domain_name', $domain_name);
            $pdo->bindparam(':student_level', $student_level);
            $pdo->bindparam(':description', $description);
            $pdo->bindparam(':gameurl', $gameurl);
            $pdo->bindparam(':image', $image);


            // execute statement
            $pdo->execute();
            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    function get_games()
    {
        try {
            $sql = "SELECT * FROM `game_registration`";
            $result = $this->db->query($sql);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }

    }

    function getOneGame($id)
    {
        try {
            $sql = "select * from game_registration 
                where 	game_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            //fetch is used for one row. FetchAll() is used for multiple rows
            $result = $stmt->fetch();
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    function deleteGame($id)
    {
        try {
            $sql = 'DELETE FROM `game_registration` WHERE game_id = :id ';
            //prepare the sql statement for execution
            $pdo = $this->db->prepare($sql);
            // bind all placeholders to the actual values
            $pdo->bindparam(':id', $id);
            $pdo->execute();
            return true;
        } catch (PDOException $exception) {
            echo $exception->getMessage();
            return false;
        }
    }


    function editGame($id, $company_name, $game_name, $domain_name, $student_level,
                      $description, $gameurl, $image)
    {
        try {
            $sql = 'UPDATE `game_registration` SET `company_name`= :company_name,
                    `game_name`= :game_name,
                    `domain_name`= :domain_name,`student_level`= :student_level,
                    `description`= :description,`gameurl`= :gameurl,`image`= :image WHERE game_id = :id';

            //prepare the sql statement for execution
            $pdo = $this->db->prepare($sql);
            // bind all placeholders to the actual values
            $pdo->bindparam(':id', $id);
            $pdo->bindparam(':company_name', $company_name);
            $pdo->bindparam(':game_name', $game_name);
            $pdo->bindparam(':domain_name', $domain_name);
            $pdo->bindparam(':student_level', $student_level);
            $pdo->bindparam(':description', $description);
            $pdo->bindparam(':gameurl', $gameurl);
            $pdo->bindparam(':image', $image);


            // execute statement
            $pdo->execute();
            return true;

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            return false;
        }

    }

    }

