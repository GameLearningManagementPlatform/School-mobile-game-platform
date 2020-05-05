<?php
$title = 'Student grades';

require_once 'includes/header.php';
require_once 'database/conn.php';
require_once 'includes/auth_check.php';

?>

<div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $result['firstname'] . "\t" . $result['secondname']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $result['role']; ?></h6>
            <p class="card-text">Email:<?php echo $result['email']; ?></p>
            <p class="card-text">Phone Number:<?php echo $result['phonenumber']; ?></p>
            <p class="card-text">School ID:<?php echo $result['school_id']; ?></p>
            <p class="card-text">School Name:<?php echo $result['schoolname']; ?></p>
            <p class="card-text">School Address:<?php echo $result['schooladdress']; ?></p>
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

<?php
include_once 'includes/footer.php' ?>


