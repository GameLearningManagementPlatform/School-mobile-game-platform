<?php
$title = 'Registration of   students';
require 'includes/header.php';
require 'database/conn.php';
?>

    <div id="wrap">
        <div id="main" class="container clear-top">
            <h1>Registration for the school</h1>
            <form method="post" action="successStudent.php">
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname">
                </div>
                <div class="form-group">
                    <label for="secondname">Second Name</label>
                    <input type="text" class="form-control" id="secondname" name="secondname">
                </div>
                <div class="form-group">
                    <labl for="email">Email address</labl>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="schoolname">School name (Choose from list)</label>
                    <select class="form-control" id="schoolname" name="schoolname">
                        <?php $results = $SchoolTeacher_Crud->getSchoolName();
                        while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                            <option value="<?php echo $r['school_id'] ?>"><?php echo $r['schoolname']; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="studentlevel">What is the class  level of the student in school (Choose from list)</label>
                    <select class="form-control" id="studentlevel" name="studentlevel">
                        <option>Grade 1</option>
                        <option>Grade 2</option>
                        <option>Grade 3</option>
                        <option>Grade 4</option>
                        <option>Grade 5</option>
                        <option>Grade 6</option>
                        <option>Grade 7</option>
                        <option>Grade 8</option>
                        <option>Grade 9</option>
                        <option>Grade 10</option>
                        <option>Grade 11</option>
                        <option>Grade 12</option>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>


<?php require 'includes/footer.php' ?>