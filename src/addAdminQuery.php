<?php
session_start();

require_once '../db/db_init.php';
$temp= 1;
if(strlen($_POST["adminName"])==0){
    echo "No Input On Name  field!";
    $temp= 0;
}

echo "<br>";
if(strlen($_POST["adminPass"])==0){
    echo "No Input On Admin Password  field!";
    $temp= 0;
}
echo "<br>";
if(strlen($_POST["adminPass"])!=0){
    if(strlen($_POST["adminPass"])!=8){
        echo "Password must be of 8 character";
        $temp= 0;
    }
}
echo "<br>";




if($temp==1){
    /*insert query*/
    $sql = "INSERT INTO admin(username,password) VALUES ('".$_POST['adminName']."','".$_POST['adminPass']."')";


    if ($conn->query($sql) === TRUE) {
        //admin record start
        $date=date("Y-m-d");
        $time=date("h:i:sa");
        $admin_id= $_SESSION['admin_id'];
        $operation="ADDED ADMIN";
        $sql = "insert into admin_records (admin_id,operation,time,date) values('$admin_id','$operation','$time','$date')";
        mysqli_query($conn,$sql);
         //admin record end
        
        echo '<script type="text/javascript">'; 
        echo 'alert("Admin Information Saved");'; 
        echo 'window.location.href = "addAdmin.php";';
        echo '</script>';

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}





























?>