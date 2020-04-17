<?php
if((!isset($_SESSION['username'] ))){
    header("Location: login.php");
}
//if((!isset($_SESSION['username'] ) or $_SESSION['email'])){
//we will use the emails of teachers and students registered to login or unless they can create their new passwords
?>