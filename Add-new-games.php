<?php
/*require 'libraries/functions.php';

    //this   $games = get_games(); will ensure we get the previous added games to avoid deletion in the json /database of previous data

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['game_name'])) {
        $game_name = $_POST['game_name'];
    } else {
        $game_name = 'A game without a name';
    }
    if (isset($_POST['$game_id'])) {
        $game_id = $_POST['$game_id'];
    } else {
        $game_id = 'A game without a id';
    }

    if (isset($_POST['company_name'])) {
        $Company = $_POST['company_name'];
    } else {
        $Company = 'A game without a Company';
    }
    if (isset($_POST['domain_name'])) {
        $domain = $_POST['domain_name'];
    } else {
        $domain = 'A game without a domain_name';
    }
    if (isset($_POST['student_level'])) {
        $school_level = $_POST['student_level'];
    } else {
        $school_level = 'A game without a school level';
    }
    if (isset($_POST['description'])) {
        $description = $_POST['description'];
    } else {
        $description = 'A game without a  description';
    }
    if (isset($_POST['image'])) {
        $image = $_POST['image'];
    } else {
        $image = 'A game without a  image';
    }
 $games = gett_games();
     //adding new data and putting it in an array.
    $newGame = array(

        'game_name' => $game_name,
        'game_id' => $game_id,
        'company_name' => $Company,
        'domain_name' => $domain,
        'student_level' => $school_level,
        'description' => $description,
        'image' => $image
    );

    $games[] = $newGame;

    save_games();

    header('Location: /Display-games.php');
    die;
}*/
?>
<?php
require 'libraries/functions.php';
$pdo = get_connection();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['game_name'])) {
        $game_name = $_POST['game_name'];
    } else {
        $game_name = 'A game without a name';
    }
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    } else {
        $id = 'A game without a id';
    }

    if (isset($_POST['company_name'])) {
        $Company = $_POST['company_name'];
    } else {
        $Company = 'A game without a Company';
    }
    if (isset($_POST['domain_name'])) {
        $domain = $_POST['domain_name'];
    } else {
        $domain = 'A game without a domain_name';
    }
    if (isset($_POST['student_level'])) {
        $school_level = $_POST['student_level'];
    } else {
        $school_level = 'A game without a school level';
    }
    if (isset($_POST['description'])) {
        $description = $_POST['description'];
    } else {
        $description = 'A game without a  description';
    }
    if (isset($_POST['company_id'])) {
        $company_id = $_POST['company_id'];
    } else {
        $company_id = 'A game without a  company_id';
    }
    if (isset($_POST['domain_id'])) {
        $domain_id = $_POST['domain_id'];
    } else {
        $domain_id = 'A game without a  domain_id';
    }
    if (isset($_POST['image'])) {
        $image = $_POST['image'];
    } else {
        $image = 'A game without a  image';
    }


$Sqlresult = $pdo->query("INSERT INTO game (id,game_name, company_id, domain_id,company_name,student_level,domain_name,description,image)
VALUES ('$id','$game_name', '$company_id','$domain_id','$Company','$school_level','$domain','$description','$image' )");

header('Location: /Display-games.php');
die;
}
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Header</title>
        <link rel="stylesheet" href="layout/header/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
        <link rel="stylesheet" href="layout/header/assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="layout/header/assets/css/Header-Blue.css">
        <link rel="stylesheet" href="layout/header/assets/css/KD_Header.css">
        <link rel="stylesheet" href="layout/header/assets/css/KD_Header-1.css">
        <link rel="stylesheet" href="layout/header/assets/css/KD_Header-2.css">
        <link rel="stylesheet" href="layout/header/assets/css/styles.css">
    </head>

    <body>
    <div>
        <div class="header-blue">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
                <div class="container-fluid"><a class="navbar-brand" href="/"><br>School Mobile Games&nbsp;<br><br></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div
                            class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="/Display-games.php">Games</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="/Add-new-games.php">Add new game</a></li>
                            <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Games Category</a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                            </li>
                        </ul>
                        <form class="form-inline mr-auto" target="_self">
                            <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" id="search-field" name="search"></div>
                        </form><span class="navbar-text"> <a class="login" href="#">Log In</a></span><a class="btn btn-light action-button" role="button" href="#">Sign Up</a></div>
                </div>
            </nav>
            <div class="container hero">
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                        <h1>The revolution is here.</h1>
                        <p>Mauris egestas tellus non ex condimentum, ac ullamcorper sapien dictum. Nam consequat neque quis sapien viverra convallis. In non tempus lorem. </p><button class="btn btn-light btn-lg action-button" type="button">Learn More</button></div>
                    <div
                            class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
                        <div class="iphone-mockup"><img class="device" src="assets/img/iphone.svg">
                            <div class="screen"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="layout/header/assets/js/jquery.min.js"></script>
    <script src="layout/header/assets/bootstrap/js/bootstrap.min.js"></script>
    </body>

    </html>


       <div class="p-3 mb-2 bg-secondary text-white">
           <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <h1>Add new game</h1>

                <form action="/Add-new-games.php" method="POST">
                    <div class="form-group">
                        <label for="game_name" class="control-label">game_name</label>
                        <input type="text" name="game_name" id="game_name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="company_id" class="control-label">company_id  </label>
                        <input type="number" name="company_id" id="company_id" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="domain_id" class="control-label">domain_id  </label>
                        <input type="number" name="domain_id" id="domain_id" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="company_name" class="control-label">company_name </label>
                        <input type="text" name="company_name" id="company_name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="domain_name" class="control-label">domain_name </label>
                        <input type="text" name="domain_name" id="domain_name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="student_level" class="control-label">student_level </label>
                        <input type="text" name="student_level" id="student_level" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="description" class="control-label">description</label>
                        <textarea name="description" id="description" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image" class="control-label">image </label>
                        <textarea name="image" id="image" class="form-control"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span> Add</button>
                </form>

            </div>
        </div>
    </div>
   </div>


<?php require 'layout/footer1.php';?>
