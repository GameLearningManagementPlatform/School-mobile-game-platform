<?php
$title = 'Display Single Game';
require_once 'includes/header.php';
require_once 'database/conn.php';
require_once 'includes/auth_check.php';



$id = $_GET['id'];
$studentId = $Student_Crud->getStudentId($_SESSION['userid']);


$result = $gamesCrud->getOneGame($id);
?>

    <h1> <?php echo $result['game_name']; ?></h1>

    <div class="container">
        <div class="row">
            <div class="col-xs-3 game-list-item">
                <img src="/media/images/<?php echo $result['image'] ?>" class="pull-left img-rounded"/>
            </div>
            <div class="col-xs-6">
                <p>
                    <?php echo $result['description']; ?>
                </p>

                <table class="table">
                    <tbody>
                    <tr>
                        <th>Domain subject</th>
                        <td><?php echo $result['domain_name']; ?></td>
                    </tr>
                    <tr>
                        <th>Student level</th>
                        <td><?php echo $result['student_level']; ?></td>
                    </tr>
                    <tr>
                        <th>Company</th>
                        <td><?php echo $result['company_name']; ?></td>
                    </tr>
                    </tbody>
                </table>
                <p>
                    <a href="<?php echo $result['gameurl']; ?> " target="_blank"
                       class="btn btn-primary"> Download Game</a>

                    <a href="<?php echo $result['gameurl'].'?id='.$result['game_id'].'&user='.$studentId['user_id'] ?>" target="_blank";
                       class="btn btn-dark">Play Individually</a>

                    <a href=""
                       class="btn btn-danger">Compete and play as a group</a>
                </p>
            </div>

        </div>


    </div>
    <br>

<?php require 'includes/footer.php' ?>