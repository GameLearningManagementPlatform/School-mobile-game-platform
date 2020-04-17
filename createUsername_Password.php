<?php
$title = 'School-registration';
require 'includes/header.php';
require 'database/conn.php';

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $user_authentication->insertUser($username, $password);
    if ($result==true){
        header("Location: login.php");
    }else{
        echo  '<h1>Error creating  username and password</h1>';
    }
}

?>
    <div id="wrap">
        <div id="main" class="container clear-top">
            <h1>Create your username and password</h1>
            <form method="post" action="createUsername_Password.php">
                <div class="form-group">
                    <label for="firstname">Username</label>
                    <input required type="text" class="form-control" id="username" name="username">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">password</label>
                    <input required type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm password </label>
                    <input required type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>

                <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>

            </form>
        </div>
    </div>
<?php require 'includes/footer.php';