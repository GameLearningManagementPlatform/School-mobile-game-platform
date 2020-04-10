<?php
$title = 'success registration';
require 'includes/header.php';
require_once 'database/conn.php';

//save data into database
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $role = $_POST['role'];
    } else {
        $role = 'A user without a role';
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $email = 'A user without a email';
    }
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        $password = 'A user without a password';
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
    $isSuccess = $crud->insertSchoolmanager_Admin($firstname, $secondname, $role, $email, $password, $phonenumber, $schoolname);

    if ($isSuccess) {
        echo '<h1 class="text-center text-success">You have been registered successfully</h1><br>
                <h3 class="text-secondary">Please confirm your email before login</h3>';
    } else {
        echo '<h1 class="text-center text-danger">Registration was unsuccessful</h1>';
    }
}

?>
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php echo $_POST['firstname'] . "\t" . $_POST['secondname']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $_POST['role']; ?></h6>
        <p class="card-text">Email:<?php echo $_POST['email']; ?></p>
        <p class="card-text">Password:<?php echo $_POST['password']; ?></p>
        <p class="card-text">Phone Number:<?php echo $_POST['phonenumber']; ?></p>


        <a href="/login.php" class="card-link">Login Here</a>
    </div>
</div>

<?php require 'includes/footer.php' ?>
