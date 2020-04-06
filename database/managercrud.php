<?php
class crud{
    private $db;

    //constructor to initialize private variable to the database connection
    function __construct($conn){
        $this->db = $conn;
    }

    // insert into database
    public function insertSchoolmanager_Admin($firstname, $secondname, $role, $email, $password, $phonenumber, $schoolname){
        try {
            // define sql statement to be executed
            $sql = "INSERT into schooladmin_schoolmanager(firstname, secondname,role, email,password,phonenumber,schoolname ) VALUES (:firstname, :secondname, :role, :email, 
            :password, :phonenumber, :schoolname)";
            //prepare the sql statement for execution
            $pdo = $this->db->prepare($sql);
            // bind all placeholders to the actual values
            $pdo->bindparam(':firstname', $firstname);
            $pdo->bindparam(':secondname', $secondname);
            $pdo->bindparam(':role', $role);
            $pdo->bindparam(':email', $email);
            $pdo->bindparam(':password', $password);
            $pdo->bindparam(':phonenumber', $phonenumber);
            $pdo->bindparam(':schoolname', $schoolname);

            // execute statement
            $pdo->execute();
            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }}
