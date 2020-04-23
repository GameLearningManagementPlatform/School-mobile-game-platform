<?php

class SchoolTeacher_Crud
{
    private $db;

    //constructor to initialize private variable to the database connection
    function __construct($conn)
    {
        $this->db = $conn;
    }

    // insert into database
    public function insertTeacher($firstname, $secondname, $teacherSubject, $email,  $phonenumber, $schoolname)
    {
        try {
            // define sql statement to be executed
            $sql = "INSERT into teacher_registration(firstname, secondname, teacherSubject, 
            email,phonenumber,school_id ) VALUES (:firstname, :secondname, 
            :teacherSubject, :email,  :phonenumber, :schoolname)";
            //prepare the sql statement for execution
            $pdo = $this->db->prepare($sql);
            // bind all placeholders to the actual values
            $pdo->bindparam(':firstname', $firstname);
            $pdo->bindparam(':secondname', $secondname);
            $pdo->bindparam(':teacherSubject', $teacherSubject);
            $pdo->bindparam(':email', $email);
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

    public function getTeacher()
    {
        try {
            $query = 'SELECT * FROM `teacher_registration` a inner join 
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

    public function getTeacherByID($id)
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

    public function editTeacher($id, $firstname, $secondname, $teacherSubject, $email,  $phonenumber, $schoolname)
    {
        try {
            $sql = "UPDATE `teacher_registration` SET 
                   `firstname`= :firstname,`secondname`= :secondname,`teacherSubject`= :teacherSubject,`email`= :email,
                   `phonenumber`= :phonenumber,`school_id`= :schoolname WHERE 	user_id = :id";

            //prepare the sql statement for execution
            $pdo = $this->db->prepare($sql);
            // bind all placeholders to the actual values
            $pdo->bindparam(':id', $id);
            $pdo->bindparam(':firstname', $firstname);
            $pdo->bindparam(':secondname', $secondname);
            $pdo->bindparam(':teacherSubject', $teacherSubject);
            $pdo->bindparam(':email', $email);
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

    public function deleteTeacher($id)
    {
        try {
            $sql = 'DELETE FROM `teacher_registration` WHERE user_id = :id ';
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
}
