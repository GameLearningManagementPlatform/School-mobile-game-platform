<?php
$title = 'view users';
$id = '';
require_once 'includes/header.php';
require_once 'database/conn.php';
if (isset($_GET['view'])){
    $id = $_GET['view'];
    $result = $crud->getManager_Admin($id);

} else {
    echo '<h1 class="text-danger">User doesnt exist</h1>';
}
    ?>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $result['firstname'] . "\t" . $result['secondname']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $result['role']; ?></h6>
            <p class="card-text">Email:<?php echo $result['email']; ?></p>
            <p class="card-text">Password:<?php echo $result['password']; ?></p>
            <p class="card-text">Phone Number:<?php echo $result['phonenumber']; ?></p>
            <p class="card-text">School ID:<?php echo $result['school_id']; ?></p>
            <p class="card-text">School Name:<?php echo $result['schoolname']; ?></p>
            <p class="card-text">School Address:<?php echo $result['schooladdress']; ?></p>
            <p>
                <a href="PlatformAdmin-EditUser.php" class="card-link">Edit User</a>
                <a href="PlatformAdmin-DeleteUser.php" class="card-link">Delete  User</a>
            </p>
        </div>
    </div>
<?php include 'includes/footer.php'; ?>