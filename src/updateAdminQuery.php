<?php
session_start();

require_once '../db/db_init.php';
$temp= 1;
if(strlen($_POST["oldName"])==0){
    echo "No Input On Name  field!";
    $temp= 0;
}

echo "<br>";
if(strlen($_POST["newAdminName"])==0){
    echo "No Input On New Name  field!";
    $temp= 0;
}
echo "<br>";
if(strlen($_POST["newAdinPass"])==0){
    echo "No Input On Admin Password  field!";
    $temp= 0;
}
echo "<br>";


if(strlen($_POST["newAdinPass"])!=0){
    if(strlen($_POST["newAdinPass"])!=8){
        echo "Password must be of 8 character";
        $temp= 0;
    }
}
echo "<br>";




if($temp==1){
    /*search query*/
    $sql = "select username from admin where username='".$_POST["oldName"]."'";
    $result = mysqli_query($conn,$sql);
    $count = 0;
    $count = mysqli_num_rows($result);
    if($count!=0){

        /*update query*/
        $sql = "update admin SET username='".$_POST["newAdminName"]."',password='".$_POST['newAdinPass']."' where username='".$_POST['oldName']."'";


        if($conn->query($sql) === TRUE) {

            //admin record start
            $date=date("Y-m-d");
            $time=date("h:i:sa");
            $admin_id= $_SESSION['admin_id'];
            $operation="UPDATED ADMIN INFO";
            $sql = "insert into admin_records (admin_id,operation,time,date) values('$admin_id','$operation','$time','$date')";
            mysqli_query($conn,$sql);
            //admin record end
            
            echo '<script type="text/javascript">'; 
            echo 'alert("Admin Information Updated");'; 
            echo 'window.location.href = "updateAdmin.php";';
            echo '</script>';

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }
    else{
        echo '<script type="text/javascript">'; 
        echo 'alert("Admin name not found! Try again!");'; 
        echo 'window.location.href = "updateAdmin.php";';
        echo '</script>';
    }




}





























?>