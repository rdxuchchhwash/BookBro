<?php


require_once '../db/db_init.php';
session_start();

$id=$_POST["shipID"];
$status=$_POST["status"];

$sql = "SELECT * FROM shipment WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$count=0;
$count=mysqli_num_rows($result);

if($count!=0){
    //admin record start
    $date=date("Y-m-d");
    $time=date("h:i:sa");
    $admin_id= $_SESSION['admin_id'];
    $operation="SHIPMENT STATUS CHANGE";
    $sql = "insert into admin_records (admin_id,operation,time,date) values('$admin_id','$operation','$time','$date')";
    mysqli_query($conn,$sql);
    //admin record end
    $sql = "update shipment SET status='$status' where id='$id'";
    mysqli_query($conn,$sql);
    echo '<script type="text/javascript">'; 
    echo 'alert("Status Changed");'; 
    echo 'window.location.href = "shipmentStat.php";';

    echo '</script>';
}
else{

    echo '<script type="text/javascript">'; 
    echo 'alert("Book ID no match");'; 
    echo 'window.location.href = "shipmentStat.php";';
    echo '</script>';   
}




?>