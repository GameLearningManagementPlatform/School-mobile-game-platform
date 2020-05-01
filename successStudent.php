<?php
$title = 'success registration';
require 'includes/header.php';
require_once 'database/conn.php';

//save data into database
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['user_id'])) {
        $id = $_POST['user_id'];
    } else {
        $id = 'A user without ID';
    }
    if (isset($_POST['firstname'])) {
        $firstname = $_POST['firstname'];
    } else {
        $firstname = 'A user without firstname name';
    }
    if (isset($_POST['secondname'])) {
        $secondname = $_POST['secondname'];
    } else {
        $secondname = 'A user without a secondname';
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $email = 'A user without a email';
    }

    if (isset($_POST['phonenumber'])) {
        $phonenumber = $_POST['phonenumber'];
    } else {
        $phonenumber = 'A user without a  phonenumber';
    }
    if (isset($_POST['schoolname'])) {
        $schoolname = $_POST['schoolname'];
    } else {
        $schoolname = 'A user without a  schoolname';
    }
    if (isset($_POST['studentlevel'])) {
        $studentlevel = $_POST['studentlevel'];
    } else {
        $studentlevel = 'A user without a  studentlevel';
    }
    if (isset($_POST['teacherSubject'])) {
        $teacherSubject = $_POST['teacherSubject'];
    } else {
        $teacherSubject = 'A user without a  teacherSubject';
    }

    $isStudentSuccess = $Student_Crud->insertStudent($firstname, $secondname, $email,  $studentlevel, $schoolname);

    if ($isStudentSuccess) {
        echo '<h1 class="text-center text-success">You have been registered successfully</h1><br>

                <h3 class="p-3 mb-2 bg-success text-white">Please confirm your email before login</h3>';
    } else {
        echo '<h1 class="text-center text-danger">Registration was unsuccessful</h1>';
    }
}

?>
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php echo $_POST['firstname'] . "\t" . $_POST['secondname']; ?></h5>
        <p class="card-text">Email:<?php echo $_POST['email']; ?></p>
        <p class="card-text">Phone Number:<?php echo $_POST['studentlevel']; ?></p>


        <a href="./login.php" class="card-link">Login Here</a>
    </div>
</div>

<?php require 'includes/footer.php' ?>
