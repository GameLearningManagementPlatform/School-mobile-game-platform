<?php
$id = '';
$company_name = '';
$game_name = '';
$domain_name = '';
$student_level = '';
$description = '';
$gameurl = '';
$image = '';
$title = '';
$title = 'Edit game';
require 'includes/header.php';
require_once 'includes/auth_check.php';

require_once 'database/conn.php';
if (!isset($_GET['id'])) {
    echo '<h1>Game unavailable</h1>';

} else {
    $id = $_GET['id'];
    $game = $gamesCrud->getOneGame($id);

    ?>


    <div class="container">
        <div class="row">
            <div class="col-lg-12">


                <h1 class="bg-warning text-dark">Update Game <?php   echo $game['game_name'];?></h1>

                <form method="post" action="game_editGamePost.php">
                    <div class="form-group">
                        <label for="company_name" class="control-label">company_name </label>
                        <input type="text" name="company_name" id="company_name" class="form-control"
                               value="<?php echo $game['company_name']; ?>"
                        />
                    </div>

                    <div class="form-group">
                        <label for="game_name" class="control-label">game_name</label>
                        <input type="text" name="game_name" id="game_name" class="form-control"
                               value="<?php echo $game['game_name']; ?>"
                        />
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
                        <input type="text" name="description" id="description" class="form-control"
                               value="<?php echo $game['description']; ?>"
                        />
                    </div>
                    <div class="form-group">
                        <label for="gameurl" class="control-label">Game URL </label>
                        <input type="text" name="gameurl" id="gameurl" class="form-control" value="<?php echo $game['gameurl']; ?>"/>
                    </div>

                    <div class="form-group">
                        <label for="image" class="control-label">image </label>
                        <input type="text" name="image" id="image" class="form-control"  value="<?php echo $game['image']; ?>"/>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-heart"></span> Update Game
                    </button>
                </form>

            </div>
        </div>
    </div>
    <br>
    <br>
<?php } ?>
<?php require 'includes/footer.php';