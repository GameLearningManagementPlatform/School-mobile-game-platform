<?php
$title = 'view game';
$id = '';
require_once 'includes/header.php';
require_once 'database/conn.php';
if (!isset($_GET['id'])) {
    //check for the error first
    echo '<h1 class="text-danger">Game doesnt exist</h1>';


} else {
    $id = $_GET['id'];
    $result = $gamesCrud->getOneGame($id);

    ?>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo  $result['game_name']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $result['game_id']; ?></h6>
            <p class="card-text">Email:<?php echo $result['company_name']; ?></p>
            <p class="card-text">Phone Number:<?php echo $result['game_name']; ?></p>
            <p class="card-text">School Name:<?php echo $result['image']; ?></p>
            <p class="card-text">School Address:<?php echo $result['domain_name']; ?></p>
            <p class="card-text">School ID:<?php echo $result['student_level']; ?></p>
            <p class="card-text">School Name:<?php echo $result['description']; ?></p>
            <p class="card-text">School Address:<?php echo $result['gameurl']; ?></p>

            <p>
                <a href="game_viewGame.php?id=<?php echo $result['game_id']; ?>"
                   class="btn btn-primary">View</a>
                <a href="game_editGame.php?id=<?php echo $result['game_id']; ?>" class="btn btn-info">Edit</a>
                <a onclick="return confirm('Are you sure you want to delete this record?');" href="game_DeleteGame.php?id=<?php echo $result['game_id']; ?>" class="btn btn-danger">Delete</a>
            </p>


        </div>
    </div>
<?php } ?>
<?php include 'includes/footer.php'; ?>