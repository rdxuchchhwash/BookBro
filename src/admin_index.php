<?php
session_start();
if($_SESSION['loginStatus']==0){


    echo '<script type="text/javascript">'; 
    echo 'alert("Please Login First!");'; 
    echo 'window.location.href = "adminLogin.php";';
    echo '</script>';
}
    else{

        require_once '../db/db_init.php';
        include '../adminIncludes/head.php';

        include '../adminIncludes/navigation.php';
        include '../adminIncludes/dashboard.php';
    }



?>


