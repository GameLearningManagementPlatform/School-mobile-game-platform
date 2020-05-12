<?php

$title = 'view users';
require 'includes/header.php';
require_once 'includes/auth_check.php';
require 'database/conn.php';

$result = $Student_Crud->getAllScores();
?>


    <table class="table container">
        <thead class="thead-dark">
        <tr>
            <th> score</th>
        </tr>
        </thead>
        <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td> <?php echo $row['score']; ?></td>
            </tr>

        <?php endwhile; ?>
    </table>

<?php require 'includes/footer.php' ?>