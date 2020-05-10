<?php

class Student_Crud
{
    private $db;

    //constructor to initialize private variable to the database connection
    function __construct($conn)
    {
        $this->db = $conn;
    }

    // insert into database
    public function insertStudent($firstname, $secondname, $email,  $studentlevel, $schoolname)
    {
        try {
            // define sql statement to be executed
            $sql = "INSERT into student_registration(firstname, secondname, 
            email,studentlevel,school_id ) VALUES (:firstname, :secondname, :email,
            :studentlevel, :schoolname)";
            //prepare the sql statement for execution
            $pdo = $this->db->prepare($sql);
            // bind all placeholders to the actual values
            $pdo->bindparam(':firstname', $firstname);
            $pdo->bindparam(':secondname', $secondname);
            $pdo->bindparam(':email', $email);
            $pdo->bindparam(':studentlevel', $studentlevel);
            $pdo->bindparam(':schoolname', $schoolname);

            // execute statement
            $pdo->execute();
            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getSStudent()
    {
        try {
            $query = 'SELECT * FROM `student_registration` a inner join 
            school_list s on a.school_id = s.school_id  ';
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

    public function getStudentByID($id)
    {
        try {
            $sql = "select * from teacher_registration a inner join school_list s 
            on a.school_id = s.school_id 
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

    public function editTeacher($id, $firstname, $secondname, $email,  $studentlevel, $schoolname)
    {
        try {
            $sql = "UPDATE `student_registration` SET 
                   `firstname`= :firstname,`secondname`= :secondname,`email`= :email,
                   `studentlevel`= :studentlevel,`school_id`= :schoolname WHERE 	user_id = :id";

            //prepare the sql statement for execution
            $pdo = $this->db->prepare($sql);
            // bind all placeholders to the actual values
            $pdo->bindparam(':id', $id);
            $pdo->bindparam(':firstname', $firstname);
            $pdo->bindparam(':secondname', $secondname);
            $pdo->bindparam(':email', $email);
            $pdo->bindparam(':studentlevel', $studentlevel);
            $pdo->bindparam(':schoolname', $schoolname);

            // execute statement
            $pdo->execute();
            return true;

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            return false;
        }
    }

    public function deleteStudent($id)
    {
        try {
            $sql = 'DELETE FROM `student_registration` WHERE user_id = :id ';
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
    
    public function getStudentId($id) {

        try {
            $sql = 'SELECT user_id 
            FROM student_registration 
            WHERE email =  (
                SELECT email
                FROM user_authentication 
                WHERE id = 15 ) LIMIT 1';
            
            $stmt = $this->db->prepare($sql);
            // bind all placeholders to the actual values
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            
            
            $result = $stmt->fetch();
            return $result;
            
        } catch (PDOException $exception) {
            echo $exception->getMessage();
            return false;
        }

    }

    public function getCurrentStudentScore($email){
        try {
            $sql = 'SELECT a.* , g.game_name, s.schoolname, st.*
            FROM score_board a, game_registration g, school_list s, student_registration st
            WHERE a.player_id = (
                SELECT user_id 
                FROM student_registration 
                WHERE email = :email)
            AND s.school_id = (
                SELECT school_id 
                FROM student_registration 
                WHERE email = :email)
            AND a.game_id = g.game_id 
            AND st.email = :email
            ORDER BY a.score_id DESC LIMIT 1';

            $stmt = $this->db->prepare($sql);
            // bind all placeholders to the actual values
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            
            
            $result = $stmt->fetch();
            return $result;

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            return false;
        }
    }

}
