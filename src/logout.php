<?php
session_start();

require_once '../db/db_init.php';

$_SESSION['loginStatus']=0;

//admin record start
$date=date("Y-m-d");
$time=date("h:i:sa");
$admin_id= $_SESSION['admin_id'];
$operation="ADMIN LOGOUT";
$sql = "insert into admin_records (admin_id,operation,time,date) values('$admin_id','$operation','$time','$date')";
mysqli_query($conn,$sql);
//admin record end

session_destroy();
echo '<script type="text/javascript">'; 
echo 'alert("Logout Successful");'; 
echo 'window.location.href = "adminLogin.php";';
echo '</script>';

?>