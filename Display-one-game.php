<?php

require  'libraries/functions.php';

    $id = $_GET['id'];
    $game =show_one_game($id);
?>
<?php require 'layout/header.php'; ?>
<h1> Play <?php echo $game['game_name']; ?></h1>

<div class="container">
    <div class="row">
        <div class="col-xs-3 pet-list-item">
            <img src="/images/<?php echo $game['image'] ?>" class="pull-left img-rounded" />
        </div>
        <div class="col-xs-6">
            <p>
                <?php echo $game['description']; ?>
            </p>

            <table class="table">
                <tbody>
                <tr>
                    <th>School level</th>
                    <td><?php echo $game['student_level']; ?></td>
                </tr>
                <tr>
                    <th>domain</th>
                    <td><?php echo $game['domain_name']; ?></td>
                </tr>
                <tr>
                    <th>company name</th>
                    <td><?php echo $game['company_name']; ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require 'layout/footer.php'; ?>
