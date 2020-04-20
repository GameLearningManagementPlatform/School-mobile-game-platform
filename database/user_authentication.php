<?php

class user_authentication{
    // private database object\
    private $db;

    //constructor to initialize private variable to the database connection
    function __construct($conn){
        $this->db = $conn;
    }

    public function insertUser($username,$password, $role){
        try {
            $result = $this->getUserbyUsername($username);
            if($result['num'] > 0){
                return false;
            } else{
                $new_password = md5($password.$username);
                // define sql statement to be executed
                $sql = "INSERT INTO user_authentication (username,password, role) VALUES (:username,:password, :role)";
                //prepare the sql statement for execution
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':username',$username);
                $stmt->bindparam(':password',$new_password);
                $stmt->bindparam(':role',$role);


                // execute statement
                $stmt->execute();
                return true;
            }


        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getUser($role, $username,$password){
        try{
            $sql = "select * from user_authentication where role = :role AND  username = :username AND password = :password  ";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':role', $role);
            $stmt->bindparam(':username', $username);
            $stmt->bindparam(':password', $password);

            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getUserbyUsername($username){
        try{
            $sql = "select count(*) as num from user_authentication where username = :username";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':username',$username);

            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function getRole($username){
        try{

            $sql = " SELECT  `role` FROM `user_authentication` where username = :username  ";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':username', $username);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getUsers(){
        try{
            $sql = "SELECT * FROM user_authentication";
            $result = $this->db->query($sql);
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }
}
?>