<?php
session_start();

$_SESSION['loginStatus']=0;

        echo '<script type="text/javascript">'; 
        echo 'alert("Logout Successful");'; 
        echo 'window.location.href = "adminLogin.php";';
        echo '</script>';
?>