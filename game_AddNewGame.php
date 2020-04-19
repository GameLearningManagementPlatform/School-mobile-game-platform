<?php
$title = 'User Login';

require_once 'includes/header.php';
require_once 'database/conn.php';

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
        $company_name = $_POST['company_name'];
    } else {
        $company_name = 'A game without a Company';
    }
    if (isset($_POST['domain_name'])) {
        $domain_name = $_POST['domain_name'];
    } else {
        $domain_name = 'A game without a domain_name';
    }
    if (isset($_POST['student_level'])) {
        $student_level = $_POST['student_level'];
    } else {
        $student_level = 'A game without a school level';
    }
    if (isset($_POST['gameurl'])) {
        $gameurl = $_POST['gameurl'];
    } else {
        $gameurl = 'A game without a URL';
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
    $result = $gamesCrud->registerNewGame($company_name, $game_name , $domain_name, $student_level, $description, $gameurl, $image);
    if ($result){
        echo '<h1>Game registered successfully</h1>';
    }else
    {
        echo  "<h1>Game registration was unsuccessful</h1>";
    }
}

?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <h1 class="bg-warning text-dark">Add new game</h1>

                <form action="game_AddNewGame.php" method="POST">
                    <div class="form-group">
                        <label for="company_name" class="control-label">company_name </label>
                        <input type="text" name="company_name" id="company_name" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="game_name" class="control-label">game_name</label>
                        <input type="text" name="game_name" id="game_name" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="domain_name">domain_name (Choose from list)</label>
                        <select class="form-control" id="domain_name" name="domain_name">
                            <option>Mathematics</option>
                            <option>English</option>
                            <option>Biology</option>
                            <option>Chemistry</option>
                            <option>Physics</option>
                            <option>Geography</option>
                            <option>Computer Science</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="student_level">student_level (Choose from list)</label>
                        <select class="form-control" id="student_level" name="student_level">
                           <option>Grade 1</option>
                            <option>Grade 2</option>
                            <option>Grade 3</option>
                            <option>Grade 4</option>
                            <option>Grade 5</option>
                            <option>Grade 6</option>
                            <option>Grade 7</option>
                            <option>Grade 8</option>
                            <option>Grade 9</option>
                            <option>Grade 10</option>
                            <option>Grade 11</option>
                            <option>Grade 12</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description" class="control-label">description</label>
                        <input type="text" name="description" id="description" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="gameurl" class="control-label">Game URL </label>
                        <input type="text" name="gameurl" id="gameurl" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="image" class="control-label">image </label>
                        <textarea name="image" id="image" class="form-control"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-heart"></span> Add New Game
                    </button>
                </form>

            </div>
        </div>
    </div>
<br>
<br>

<?php include_once 'includes/footer.php' ?>