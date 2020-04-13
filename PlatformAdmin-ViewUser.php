<?php
$title = 'view users';
$id = '';
require_once 'includes/header.php';
require_once 'database/conn.php';
if (!isset($_GET['id'])){
    //check for the error first
    echo '<h1 class="text-danger">User doesnt exist</h1>';


} else {
    $id = $_GET['id'];
    $result = $crud->getManager_Admin($id);

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
                <a href="schoolManagerSchoolAdminViewUsers.php" class="card-link">Return back to List</a>
            </p>
        </div>
    </div>
    <?php } ?>
<?php include 'includes/footer.php'; ?>