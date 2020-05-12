<?php

$result = $Student_Crud->getAllScores();
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
                <td> <?php echo $_SESSION['email']; ?></td>

                <td> <?php echo $row['score']; ?></td>
            </tr>

        <?php endwhile; ?>
    </table>

