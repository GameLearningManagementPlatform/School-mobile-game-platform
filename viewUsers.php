<?php

$title = 'view users';
require 'includes/header.php';
?>
    <table class="table">
        <thead>
        <tr>
            <th>firstname</th>
            <th>secondname</th>
            <th>role</th>
            <th>email</th>
            <th>password</th>
            <th>phonenumber</th>
            <th>schoolname</th>
        </tr>
        </thead>

        <?php
        while($row = $result->fetch_assoc()): ?>
            <tr>
                <td> <?php echo  $row['user_id'];?></td>
                <td> <?php echo  $row['firstname'];?></td>
                <td> <?php echo  $row['secondname'];?></td>
                <td> <?php echo  $row['role'];?></td>
                <td> <?php echo  $row['email'];?></td>
                <td> <?php echo  $row['password'];?></td>
                <td> <?php echo  $row['phonenumber'];?></td>
                <td> <?php echo  $row['schoolname'];?></td>

                <td>

                    <a href="create.php?edit=<?php echo  $row['id'];?>"
                       class="btn btn-info">edit</a>
                    <a href="process.php?delete=<?php echo  $row['id'];?>"
                       class="btn btn-danger">delete</a>
                </td>
            </tr>
        <?php endwhile;?>
    </table>

<?php require 'includes/footer.php' ?>