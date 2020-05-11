<?php
$title = 'Student grades';

require_once 'includes/header.php';
require_once 'database/conn.php';
require_once 'includes/auth_check.php';

$result = $Student_Crud->getCurrentStudentScore($_SESSION['email']);

?>

<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $result['firstname'] . "\t" . $result['secondname']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Email:<?php echo $result['email']; ?></h6>
                    <p class="card-text">School Name:<?php echo $result['schoolname']; ?></p>
                    <p class="card-text">Play Mode:<?php echo $result['play_mode']; ?></p>

                    <p class="card-text">Game Name:<?php echo $result['game_name']; ?></p>
                    <p class="card-text">Score:<?php echo $result['score']; ?></p>
                    <p class="card-text">Start Time:<?php echo $result['start_time']; ?></p>
                    <p class="card-text">End Time:<?php echo $result['end_time']; ?></p>
                    <p>
                        <a href="schoolManagerSchoolAdminViewUsers.php?id=<?php echo $result['user_id']; ?>"
                           class="btn btn-primary"> Users</a>
                        <a href="PlatformAdmin-EditUser.php?id=<?php echo $result['user_id']; ?>" class="btn btn-info">Edit</a>

                        <a onclick="return confirm('Are you sure you want to delete this record?');"
                           href="PlatformAdmin-DeleteUser.php?id=<?php echo $result['user_id']; ?>"
                           class="btn btn-danger">Delete</a>
                    </p>


                </div>
            </div>
        </div>
        <div class="col-sm">

        </div>

    </div>
</div>




<?php
include_once 'includes/footer.php' ?>


