<?php
$title = 'Student Grades';

require_once 'includes/header.php';
require_once 'database/conn.php';
require_once 'includes/auth_check.php';
require_once 'includes/Teacher_Auth.php';
?>
<?php


$result = $Student_Crud->getAllScores();
?>


    <table class="table container">
        <thead class="thead-dark">
        <tr>
            <th> player_id</th>
            <th> play_mode</th>
            <th> start_time</th>
            <th> end_time</th>
            <th> score</th>
        </tr>
        </thead>
        <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td> <?php echo $row['player_id']; ?></td>
                <td> <?php echo $row['play_mode']; ?></td>
                <td> <?php echo $row['start_time']; ?></td>
                <td> <?php echo $row['end_time']; ?></td>
                <td> <?php echo $row['score']; ?></td>
            </tr>

        <?php endwhile; ?>
    </table>



<?php include_once 'includes/footer.php' ?>