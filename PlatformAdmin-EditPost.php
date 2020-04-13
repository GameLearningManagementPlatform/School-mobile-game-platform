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
    $role = $_POST['role'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];
    $schoolname = $_POST['schoolname'];


    $result = $crud->editManager_Admin($id,$firstname, $secondname, $role, $email, $password, $phonenumber, $schoolname);

    if($result){
        header("Location: schoolManagerSchoolAdminViewUsers.php");
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
