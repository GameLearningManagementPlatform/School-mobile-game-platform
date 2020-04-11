<?php

$title = 'view users';
require 'includes/header.php';
require 'database/conn.php';


$result = $crud->getSchoolManager_SchoolAdmin();
?>
    <table class="table container">
        <thead class="thead-dark">
        <tr>
            <th> ID</th>
            <th>firstname</th>
            <th>secondname</th>
            <th>role</th>
            <th>email</th>
            <th>password</th>
            <th>phonenumber</th>
            <th>schoolname</th>
            <th>view</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        </thead>
        <?php while($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td> <?php echo  $row['user_id'];?></td>
                <td> <?php echo  $row['firstname'];?></td>
                <td> <?php echo  $row['secondname'];?></td>
                <td> <?php echo  $row['role'];?></td>
                <td> <?php echo  $row['email'];?></td>
                <td> <?php echo  $row['password'];?></td>
                <td> <?php echo  $row['phonenumber'];?></td>
                <td> <?php echo  $row['schoolname'];?></td>
                <td><a href="PlatformAdmin-ViewUser.php?view=<?php echo  $row['user_id'];?>" class="btn btn-primary">edit</a></td>
                <td><a href="PlatformAdmin-EditUser.php" class="btn btn-info">edit</a> </td>
                <td><a href="PlatformAdmin-DeleteUser.php" class="btn btn-danger">delete</a> </td>
            </tr>

        <?php endwhile;?>
    </table>

<?php require 'includes/footer.php' ?>