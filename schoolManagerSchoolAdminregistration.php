<?php
$title = 'School-registration';
require 'includes/header.php';
require 'database/conn.php';
?>

    <!--
            -id
            -first name
            -last name
            -email
            -username
            -password
            -Date of Birth
            -School list from dropdown(name of the school)
            -contact number

            //on sign up and login authentication.
            -Add teachers
            -Add Students




    -->
    <div id="wrap">
        <div id="main" class="container clear-top">
            <h1>Registration for the school</h1>

            <strong>
                <div class="p-3 mb-2 bg-warning text-dark">
                    <p >Please adhere to our terms and conditions. This form is to be filled by the school
                        administrator or school manager to register their school.
                    </p>
                </div>


            </strong>
            <form method="post" action="success.php">
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input required type="text" class="form-control" id="firstname" name="firstname">
                </div>
                <div class="form-group">
                    <label for="secondname">Second Name</label>
                    <input required type="text" class="form-control" id="secondname" name="secondname">
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
                    <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="username">username</label>
                    <input required type="text" class="form-control" id="username" name="username">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input required type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>

                <div class="form-group">
                    <label for="phonenumber"> Contact Number</label>
                    <input type="text" class="form-control" id="phonenumber" name="phonenumber">
                    <small id="phoneHelp" class="form-text text-muted">We'll never share your phone number with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="schoolname">School name (Choose from list)</label>
                    <select class="form-control" id="schoolname" name="schoolname">
                         <?php $results =$crud->getSchoolName();
                        while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                            <option value="<?php echo $r['school_id'] ?>"><?php echo $r['schoolname']; ?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>



<?php require 'includes/footer.php';