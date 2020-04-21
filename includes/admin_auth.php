<?php
//check the role for admin authentication
if ($_SESSION['role'] != 'Platform Admin'){
    echo '<h1>YOU  ARE NOT AUTHORIZED TO VIEW THIS ACTION</h1>';
    //maybe redirect to login page
    die();
}
