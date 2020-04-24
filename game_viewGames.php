<?php

$title = 'view users';
require 'includes/header.php';
require_once 'includes/auth_check.php';
require 'database/conn.php';
require_once 'includes/headerPlatformAdmin.php';

$result = $gamesCrud->get_games();
?>


    <table class="table container">
        <thead class="thead-dark">
        <tr>
            <th> ID</th>
            <th>company_name</th>
            <th>game_name</th>
            <th>image</th>
            <th>domain_name</th>
            <th>student_level</th>
            <th>description</th>
            <th>gameurl</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        </thead>
        <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td> <?php echo $row['game_id']; ?></td>
                <td> <?php echo $row['company_name']; ?></td>
                <td> <?php echo $row['game_name']; ?></td>
                <td> <?php echo $row['image']; ?></td>
                <td> <?php echo $row['domain_name']; ?></td>
                <td> <?php echo $row['student_level']; ?></td>
                <td> <?php echo $row['description']; ?></td>
                <td> <?php echo $row['gameurl']; ?></td>

                <td><a href="game_editGame.php?id=<?php echo $row['game_id']; ?>" class="btn btn-info">Edit</a>
                </td>
                <td><a onclick="return confirm('Are you sure you want to delete this record?');" href="game_DeleteGame.php?id=<?php echo $row['game_id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>

        <?php endwhile; ?>
    </table>

<?php require 'includes/footer.php' ?>