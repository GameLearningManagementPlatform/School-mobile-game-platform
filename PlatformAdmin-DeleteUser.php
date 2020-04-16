<?php
require_once 'includes/auth_check.php';

require_once 'database/conn.php';
if (!$_GET['id']){
    echo 'error';
}else{
    $id = $_GET['id'];
    $results = $crud->deleteSchoolAdmin_SchoolManager($id);

    if ($results){
        header('Location: schoolManagerSchoolAdminViewUsers.php');
    }else{
        echo 'error';
    }
}