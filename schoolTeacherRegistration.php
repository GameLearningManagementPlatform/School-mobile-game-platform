<?php
$title = 'Registration of  teachers';
require 'includes/header.php'; ?>

    <div id="wrap">
        <div id="main" class="container clear-top">
            <h1>Registration for the school</h1>
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
                    <label for="teacherSubject">What is the subject of the teacher in school (Choose from list)</label>
                    <select class="form-control" id="role" name="role">
                        <option>Mathematics</option>
                        <option>English</option>
                        <option>Physics</option>
                        <option>Biology</option>
                        <option>Chemistry</option>
                        <option>Programming</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="phonenumber"> Contact Number</label>
                    <input required  type="text" class="form-control" id="phonenumber" name="phonenumber">
                    <small id="phoneHelp" class="form-text text-muted">We'll never share your phone number with anyone
                        else.</small>
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>

<?php require 'includes/footer.php' ?>