<?php
$title = 'Edit SchoolAdmin_SchoolManager registration';
require 'includes/header.php';
require_once 'database/conn.php';

//save data into database
if (isset($_POST['submit'])) {
    //this ID posted from Platform_EditUser will help us update user on its ID reference $id = $_POST['user_id'];
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $secondname = $_POST['secondname'];
    $teacherSubject = $_POST['teacherSubject'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $schoolname = $_POST['schoolname'];


    $result = $SchoolTeacher_Crud->editTeacher($id, $firstname, $secondname, $teacherSubject, $email,  $phonenumber, $schoolname);

    if($result){
        header("Location: schoolTeacherViewUsers.php");
    }
    else{
        echo '<h1>Error</h1>';
    }
}
else{
    echo  '<h1>Error</h1>';

}



?>

<?php require 'includes/footer.php' ?>
