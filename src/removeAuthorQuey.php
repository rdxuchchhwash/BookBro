<?php

require_once '../db/db_init.php';
session_start();
$temp= 1;
if(strlen($_POST["authorID"])==0){
    echo "No Input On Author ID  field!";
    $temp= 0;
}

echo "<br>";
if(!is_numeric($_POST["authorID"])){
    echo "ID must be of only Numbers!";
    $temp = 0;
}
echo "<br>";




if($temp==1){
    /*search query*/
    $sql = "select id from authors where id='".$_POST["authorID"]."'";
    $result = mysqli_query($conn,$sql);
    $count = 0;
    $count = mysqli_num_rows($result);
    if($count!=0){

        /*delete query*/
        $sql = "delete from authors where id='".$_POST["authorID"]."'";


        if($conn->query($sql) === TRUE) {
            //admin record start
            $date=date("Y-m-d");
            $time=date("h:i:sa");
            $admin_id= $_SESSION['admin_id'];
            $operation="AUTHOR REMOVED";
            $sql = "insert into admin_records (admin_id,operation,time,date) values('$admin_id','$operation','$time','$date')";
            mysqli_query($conn,$sql);
            //admin record end

            echo '<script type="text/javascript">'; 
            echo 'alert("Author Information Deleted");'; 
            echo 'window.location.href = "removeAuthor.php";';
            echo '</script>';


        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }
    else{
        echo '<script type="text/javascript">'; 
        echo 'alert("Atuhor info not found! Try again!");'; 
        echo 'window.location.href = "removeAuthor.php";';
        echo '</script>';
    }




}





























?>