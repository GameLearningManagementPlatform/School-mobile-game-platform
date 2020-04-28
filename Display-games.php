<?php



require 'libraries/functions.php';

$games = get_games();

$cleverWelcomeMessage = "Explore our games below";
?>

<?php require 'layout/header.php'; ?>

<div class="jumbotron">
    <div class="container">
        <h1><?php echo strtoupper($cleverWelcomeMessage); ?></h1>

    </div>
</div>

<div class="container">
    <div class="row">
        <?php foreach ($games as $myGames) { ?>
            <div class="col-lg-4 pet-list-item">
                <h2>
                    <a href="Display-one-game.php?game=<?php echo  $myGames['id'];?>"</a>
                    <?php echo $myGames['game_name']; ?>
                </h2>

                <img src="/images/<?php echo $myGames['image']; ?>" class="img-rounded">

                <blockquote class="game-details">
                    <span class="label label-info"><?php echo $myGames['id']; ?></span>
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
            </div>
        <?php } ?>
    </div>

</div>
<script src="resources/js/jquery.js"></script>
<script src="resources/js/bootstrap.min.js"></script>
</body>
</html>
