<?php


require_once '../db/db_init.php';
session_start();
$temp=1;
$catid=$_POST["catID"];
$catname=$_POST["catName"];
if(strlen($catname)==0){
    echo "CAtegory Name empty!";
    $temp=0;
}
if($temp==1){


    $sql = "SELECT * FROM category WHERE id='$catid'";
    $result=mysqli_query($conn,$sql);
    $count=0;
    $count=mysqli_num_rows($result);

    if($count!=0){
        //admin record start
        $date=date("Y-m-d");
        $time=date("h:i:sa");
        $admin_id= $_SESSION['admin_id'];
        $operation="UPDATED CATEGORY";
        $sql = "insert into admin_records (admin_id,operation,time,date) values('$admin_id','$operation','$time','$date')";
        mysqli_query($conn,$sql);
        //admin record end

        $sql = "update category SET category_name='$catname' where id='$catid'";
        mysqli_query($conn,$sql);
        echo '<script type="text/javascript">'; 
        echo 'alert("Category Updated");'; 
        echo 'window.location.href = "updateCategory.php";';

        echo '</script>';
    }
    else{

        echo '<script type="text/javascript">'; 
        echo 'alert("Category Id not found match");'; 
        echo 'window.location.href = "updateCategory.php";';
        echo '</script>';   
    }




}
?>