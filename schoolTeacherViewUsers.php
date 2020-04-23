<?php

$title = 'view users';
require 'includes/header.php';
require_once 'includes/auth_check.php';
require 'database/conn.php';
require_once 'includes/headerSchoolAdminSchoolManager.php';

$result = $SchoolTeacher_Crud->getTeacher();
?>


    <table class="table container">
        <thead class="thead-dark">
        <tr>
            <th> ID</th>
            <th>firstname</th>
            <th>secondname</th>
            <th>teacherSubject</th>
            <th>email</th>
            <th>phonenumber</th>
            <th>schoolname</th>
            <th>view</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        </thead>
        <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td> <?php echo $row['user_id']; ?></td>
                <td> <?php echo $row['firstname']; ?></td>
                <td> <?php echo $row['secondname']; ?></td>
                <td> <?php echo $row['teacherSubject']; ?></td>
                <td> <?php echo $row['email']; ?></td>
                <td> <?php echo $row['phonenumber']; ?></td>
                <td> <?php echo $row['schoolname']; ?></td>
                <td><a href="SchoolAdmin-ViewUser.php?id=<?php echo $row['user_id']; ?>"
                       class="btn btn-primary">View</a></td>
                <td><a href="SchoolAdminAdmin-EditUser.php?id=<?php echo $row['user_id']; ?>" class="btn btn-info">Edit</a>
                </td>
                <td><a onclick="return confirm('Are you sure you want to delete this record?');" href="SchoolAdmin-DeleteUser.php?id=<?php echo $row['user_id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>

        <?php endwhile; ?>
    </table>

<?php require 'includes/footer.php' ?>