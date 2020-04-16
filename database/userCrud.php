<?php

class crud
{
    private $db;

    //constructor to initialize private variable to the database connection
    function __construct($conn)
    {
        $this->db = $conn;
    }

    // insert into database
    public function insertSchoolmanager_Admin($firstname, $secondname, $role, $email, $password, $phonenumber, $schoolname)
    {
        try {
            // define sql statement to be executed
            $sql = "INSERT into schooladmin_schoolmanager(firstname, secondname,role, email,password,phonenumber,school_id ) VALUES (:firstname, :secondname, :role, :email, 
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
    }

    public function getSchoolManager_SchoolAdmin()
    {
        try {
            $query = 'SELECT * FROM `schooladmin_schoolmanager` a inner join school_list s on a.school_id = s.school_id  ';
            $result = $this->db->query($query);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getSchoolName()
    {
        try {
            $sql = "SELECT * FROM `school_list`";
            $result = $this->db->query($sql);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }

    }

    public function getManager_Admin($id)
    {
        try {
            $sql = "select * from schooladmin_schoolmanager a inner join school_list s on a.school_id = s.school_id 
                where 	user_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function editManager_Admin($id, $firstname, $secondname, $role, $email, $password, $phonenumber, $schoolname)
    {
        try {
            $sql = "UPDATE `schooladmin_schoolmanager` SET 
                   `firstname`= :firstname,`secondname`= :secondname,`role`= :role,`email`= :email,`password`= :password,
                   `phonenumber`= :phonenumber,`school_id`= :schoolname WHERE 	user_id = :id";

            //prepare the sql statement for execution
            $pdo = $this->db->prepare($sql);
            // bind all placeholders to the actual values
            $pdo->bindparam(':id', $id);
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

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            return false;
        }
    }

    public function deleteSchoolAdmin_SchoolManager($id){
        try {
            $sql = 'DELETE FROM `schooladmin_schoolmanager` WHERE user_id = :id ';
            //prepare the sql statement for execution
            $pdo = $this->db->prepare($sql);
            // bind all placeholders to the actual values
            $pdo->bindparam(':id', $id);
            $pdo->execute();
            return true;
        }catch (PDOException $exception){
            echo $exception->getMessage();
            return false;
        }
    }

}
