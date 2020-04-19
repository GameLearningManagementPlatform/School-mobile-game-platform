<?php
//all pages will have a session directly required from the header and no need to keep repeating on all page]
require_once 'session.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home_page</title>
    <link rel="stylesheet" href="css/HomePage-css/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="css/HomePage-css/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="css/HomePage-css/assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="css/HomePage-css/assets/css/styles.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


    <title>SGM - <?php echo $title?></title>

</head>

<body id="register">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container "><a class="navbar-brand" href="/index.php"><strong>School Game Management </strong></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div
            class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="/game_DisplayAllGames.php">Games</a></li>

                <li class="nav-item dropdown"  role="presentation">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        My Dashboard
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/mygrades.php">Grades</a>
                        <a class="dropdown-item" href="/myprofile.php">My Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/myactivity.php">Activity</a>

                    </div>
                </li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="/aboutus.php">About Us </a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="/contactUs.php">Contact us</a></li>

                <li>
                    <div >
                        <?php
                        if(!isset($_SESSION['userid'])){
                            ?>
                            <a class="nav-item nav-link" href="/login.php">Login <span class="sr-only">(current)</span></a>
                        <?php } else { ?>
                            <a class="nav-item nav-link" href="/logout.php">Logout <span class="sr-only">(current)</span></a>
                        <?php } ?>
                    </div>
                </li>

            </ul>

        </div>

</nav>
<div id="promo">
    <div class="jumbotron">
        <h1>Play mobile games to improve your skills in school&nbsp;</h1>
        <p>Welcome to the world of games. Let your students play as you track their progress. Let them compete and have more fun  </p>

    </div>
</div>
<br>