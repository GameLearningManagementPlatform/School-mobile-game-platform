<?php
require_once 'includes/auth_check.php';

require_once 'database/conn.php';
if (!$_GET['id']){
    echo 'error';
}else{
    $id = $_GET['id'];
    $results = $SchoolTeacher_Crud->deleteTeacher($id);

    if ($results){
        header('Location: schoolTeacherViewUsers.php');
    }else{
        echo 'error';
    }
}