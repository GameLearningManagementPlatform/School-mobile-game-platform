<?php
$title = 'Edit User';
require 'includes/header.php';
require_once 'includes/auth_check.php';

require_once 'database/conn.php';
if (!isset($_GET['id'])) {
    echo '<h1>Game unavailable</h1>';

} else {
    $id = $_GET['id'];
    $game = $gamesCrud->getOneGame($id);


    ?>
    <?php

    //save data into database
    if (isset($_POST['submit'])) {
        //this ID posted from Platform_EditUser will help us update user on its ID reference $id = $_POST['user_id'];
        $id = $_POST['id'];
        $company_name = $_POST['company_name'];
        $game_name = $_POST['game_name'];
        $domain_name = $_POST['domain_name'];
        $student_level = $_POST['student_level'];
        $description = $_POST['description'];
        $gameurl = $_POST['gameurl'];
        $image = $_POST['image'];


        $result = $gamesCrud->editGame ($id, $company_name, $game_name, $domain_name, $student_level,
            $description, $gameurl, $image);

        if ($result) {
            header("Location: game_viewGames.php");
        } else {
            echo '<h1>Error</h1>';
        }
    } else {
        echo '<h1>Error</h1>';

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

<?php } ?>
<?php require 'includes/footer.php';