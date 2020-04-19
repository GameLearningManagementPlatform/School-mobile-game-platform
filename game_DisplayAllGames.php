<?php
$title = 'games';
require 'includes/header.php';
require 'database/conn.php';
$games = $gamesCrud->get_games();
?>

<div class="container">
    <div class="row">
        <?php foreach ($games as $myGames) { ?>
            <div class="col-lg-4 game-list-item">
                <!--quering for one game sent as a link-->
                <a href="/game_DisplaySingleGame.php?id=<?php echo $myGames['game_id'] ?>">
                <h2><?php echo $myGames['game_name']; ?></h2>

                    <img src="media/images/<?php echo $myGames['image']; ?>" class="img-rounded">


                <blockquote class="game-details">
                    <span class="label label-info"><?php echo $myGames['game_id']; ?></span>
                    <?php
                    if (!array_key_exists('company_name', $myGames) || $myGames['company_name'] == '') {
                        echo 'Unknown';
                    } elseif ($myGames['company_name'] == 'hidden') {
                        echo '(contact owner for Company company_name)';
                    } else {
                        echo $myGames['company_name'];
                    }
                    ?>
                    <?php echo $myGames['domain_name']; ?>
                    <?php echo $myGames['student_level']; ?>
                </blockquote>

                <p>
                    <?php echo $myGames['description']; ?>
                </p>
                <p>
                    <?php echo $myGames['gameurl']; ?>
                </p>
                </a>
            </div>
        <?php } ?>
    </div>

</div>

<?php require 'includes/footer.php' ?>
