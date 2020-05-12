<?php

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

