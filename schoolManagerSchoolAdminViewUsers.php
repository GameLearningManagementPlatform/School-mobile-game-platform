<?php

$title = 'view users';
require 'includes/header.php';
require_once 'includes/auth_check.php';
require 'database/conn.php';
$result = $crud->getSchoolManager_SchoolAdmin();
?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Admin Portal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">School Admins/Managers <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Games</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Teachers/students
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Teachers</a>
                        <a class="dropdown-item" href="#">Students</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

<br>
    <table class="table container">
        <thead class="thead-dark">
        <tr>
            <th> ID</th>
            <th>firstname</th>
            <th>secondname</th>
            <th>role</th>
            <th>email</th>
            <th>password</th>
            <th>phonenumber</th>
            <th>schoolname</th>
            <th>view</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        </thead>
        <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td> <?php echo $row['user_id']; ?></td>
                <td> <?php echo $row['firstname']; ?></td>
                <td> <?php echo $row['secondname']; ?></td>
                <td> <?php echo $row['role']; ?></td>
                <td> <?php echo $row['email']; ?></td>
                <td> <?php echo $row['password']; ?></td>
                <td> <?php echo $row['phonenumber']; ?></td>
                <td> <?php echo $row['schoolname']; ?></td>
                <td><a href="PlatformAdmin-ViewUser.php?id=<?php echo $row['user_id']; ?>"
                       class="btn btn-primary">View</a></td>
                <td><a href="PlatformAdmin-EditUser.php?id=<?php echo $row['user_id']; ?>" class="btn btn-info">Edit</a>
                </td>
                <td><a onclick="return confirm('Are you sure you want to delete this record?');" href="PlatformAdmin-DeleteUser.php?id=<?php echo $row['user_id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>

        <?php endwhile; ?>
    </table>

<?php require 'includes/footer.php' ?>