
<?php
require_once ('process.php');
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
<div class="p-3 mb-2 bg-secondary text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <h1>Add new game</h1>

                <form action="create.php" method="POST">
                    <div class="form-group">
                        <label for="game_name" class="control-label">game_name</label>
                        <input type="text" name="game_name" id="game_name" class="form-control" value="<?php echo $game_name?>" />
                    </div>
                    <div class="form-group">
                        <label for="company_id" class="control-label">company_id  </label>
                        <input type="number" name="company_id" id="company_id" class="form-control" value="<?php echo $company_id?>" />
                    </div>

                    <div class="form-group">
                        <label for="domain_id" class="control-label">domain_id  </label>
                        <input type="number" name="domain_id" id="domain_id" class="form-control" value="<?php echo $domain_id?>" />
                    </div>

                    <div class="form-group">
                        <label for="company_name" class="control-label">company_name </label>
                        <input type="text" name="company_name" id="company_name" class="form-control"  value="<?php echo $Company?>" />
                    </div>
                    <div class="form-group">
                        <label for="domain_name" class="control-label">domain_name </label>
                        <input type="text" name="domain_name" id="domain_name" class="form-control"  value="<?php echo $domain?>" />
                    </div>
                    <div class="form-group">
                        <label for="student_level" class="control-label">student_level </label>
                        <input type="text" name="student_level" id="student_level" class="form-control" value="<?php echo $school_level?>" />
                    </div>
                    <div class="form-group">
                        <label for="description" class="control-label">description</label>
                        <input type="text" name="description" id="description" class="form-control" value="<?php echo $description?>" />

                    </div>
                    <div class="form-group">
                        <label for="image" class="control-label">image </label>
                        <input type="text" name="image" id="image" class="form-control" value="<?php echo $image?>" />

                    </div>

                    <button name="save" type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span> Add</button>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>


