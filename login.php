<?php
$title = 'User Login';
require_once 'includes/header.php';
require_once 'database/conn.php';

//If data was submitted via a form POST request, then...
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = strtolower(trim($_POST['username']));
    $password = $_POST['password'];
    $role = $_POST['role'];
    $new_password = md5($password.$username);


    $result = $user_authentication->getUser($role,$username,$new_password) ;

    if(!$result  ){
        echo '<div class="alert alert-danger">Username or Password is incorrect! Please try again. </div>';
    }else{
        $_SESSION['username'] = $username;
        $_SESSION['userid'] = $result['id'];
        $_SESSION['email'] = $result['email'];

        //using an if statement to route  user according to the  role he plays in webapp to view their functions
       //get the session role that has been posted
        $_SESSION['role'] = $role;

        //check the role for authentication
        if ($role == 'Platform Admin'){
            header("Location: Dashboard_Admin.php");
        }




        if ($role == 'School Manager'or $role == 'School Admin'){
            header("Location: Dashboard_SchoolManagerAdmin.php");
        }
        if ($role == 'Teacher'){
            header("Location: Dashboard_Teacher.php");
        }
        if ($role == 'Student'){
            header("Location: Dashboard_Student.php");
        }


    }

}
?>

    <h1 class="text-center"><?php echo $title ?> </h1>

    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <table class="table table-sm">
            <div class="form-group">
                <label for="role">Role (Choose from list)</label>
                <select class="form-control" id="role" name="role">
                    <option>Platform Admin</option>
                    <option>School Admin</option>
                    <option>School Manager</option>
                    <option>Teacher</option>
                    <option>Student</option>
                </select>
            </div>
            <tr>
                <td><label for="username">Username: * </label></td>
                <td><input type="text" name="username" class="form-control" id="username" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username']; ?>">
                </td>
            </tr>
            <tr>
                <td><label for="password">Password: * </label></td>
                <td><input type="password" name="password" class="form-control" id="password">
                </td>
            </tr>
        </table><br/><br/>
        <input type="submit" value="Login" class="btn btn-primary btn-block"><br/>
       <p><a href="#"> Forgot Password </a></p>
        <p><a href="/schoolManagerSchoolAdminregistration.php">Not yet registered. Try our games</a></p>

    </form><br/><br/><br/><br/>

<?php include_once 'includes/footer.php'?>