<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>

<?php
require "process.php";
?>

<?php
if (isset($_SESSION['message'])): ?>
<div class="alert alert-<?=$_SESSION["msg_type"]?>" >
    <?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    ?>
</div>
<?php endif;?>

<?php

$sql = "SELECT * FROM game";
$result = $mysql->query($sql);

?>


<div class="container">
<h1>Admin game table</h1>
    <p>
        <a href="create.php" class="btn btn-success">Add new Game</a>
        <a href="/Display-games.php" class="btn btn-success">Home Page</a>

    </p>

    <table class="table">
        <thead>
        <tr>
            <th>game_id</th>
            <th>game_name</th>
            <th>company_id</th>
            <th>domain_id</th>
            <th>company_name</th>
            <th>student_level</th>
            <th>domain_name</th>
            <th>description</th>
            <th>image</th>
            <th>Action</th>
        </tr>
        </thead>

        <?php
        while($row = $result->fetch_assoc()): ?>
            <tr>
                <td> <?php echo  $row['id'];?></td>
                <td> <?php echo  $row['game_name'];?></td>
                <td> <?php echo  $row['company_id'];?></td>
                <td> <?php echo  $row['domain_id'];?></td>
                <td> <?php echo  $row['company_name'];?></td>
                <td> <?php echo  $row['student_level'];?></td>
                <td> <?php echo  $row['domain_name'];?></td>
                <td> <?php echo  $row['description'];?></td>
                <td> <?php echo  $row['image'];?></td>

                <td>

                    <a href="create.php?edit=<?php echo  $row['id'];?>"
                       class="btn btn-info">edit</a>
                    <a href="process.php?delete=<?php echo  $row['id'];?>"
                       class="btn btn-danger">delete</a>
                </td>
            </tr>
        <?php endwhile;?>
    </table>
</div>






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>