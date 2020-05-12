<?php

$result = $Student_Crud->getAllScores($_SESSION['email']);
?>


    <table class="table container">
        <thead class="thead-dark">
        <tr>
            <th> email</th>
            <th> score</th>
        </tr>
        </thead>
        <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td> <?php echo $row['player_id']; ?></td>

                <td> <?php echo $row['score']; ?></td>
            </tr>

        <?php endwhile; ?>
    </table>

