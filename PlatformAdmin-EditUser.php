<?php
$id = '';
$firstname = '';
$secondname = '';
$role = '';
$email = '';
$password = '';
$phonenumber = '';
$schoolname = '';
$title = 'Edit User';
require 'includes/header.php';
require_once 'includes/auth_check.php';

require_once 'database/conn.php';
if (!isset($_GET['id'])) {
    echo '<h1>User unavailable</h1>';

} else {
    $id = $_GET['id'];
    $results = $crud->getSchoolName();
    $users = $crud->getManager_Admin($id);


    ?>


    <div id="wrap">
        <div id="main" class="container clear-top">


            <strong>
                <div class="p-3 mb-2 bg-warning text-dark text-center">
                    <h1>Edit User</h1>
                </div>


            </strong>
            <form method="post" action="PlatformAdmin-EditPost.php">
                <!--Hide the id value to the user-->
                <input type="hidden" name="id" value="<?php echo $users['user_id']; ?>" />

                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname"
                           value="<?php echo $users['firstname']; ?>">
                </div>
                <div class="form-group">
                    <label for="secondname">Second Name</label>
                    <input type="text" class="form-control" id="secondname" name="secondname"
                           value="<?php echo $users['secondname']; ?>">
                </div>
                <div class="form-group">
                    <label for="role">What is your role in school (Choose from list)</label>
                    <select class="form-control" id="role" name="role">
                        <option>School Administrator</option>
                        <option>School Manager</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                           value="<?php echo $users['email']; ?>">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                           value="value="<?php echo $users['password'] ?>"">
                </div>
                <div class="form-group">
                    <label for="phonenumber"> Contact Number</label>
                    <input type="text" class="form-control" id="phonenumber" name="phonenumber"
                           value="<?php echo $users['phonenumber']  ?>"" >
                    <small id="phoneHelp" class="form-text text-muted">We'll never share your phone number with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="schoolname">School name (Choose from list)</label>
                    <select class="form-control" id="schoolname" name="schoolname">
                        < <?php $results = $crud->getSchoolName();
                        while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                            <option value="<?php echo $r['school_id'] ?>" <?php if ( $r['school_id'] ==  $users['school_id']) echo 'selected'?>>
                                <?php echo $r['schoolname'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" name="submit" class="btn btn-success btn-block" >Update User</button>
            </form>
        </div>
    </div>
<?php } ?>
<?php require 'includes/footer.php';