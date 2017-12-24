<?php
session_start();

require_once '../db/db_init.php';
$temp= 1;
if(strlen($_POST["bookID"])==0){
    echo "No Input On BookID  field!";
    $temp= 0;
}

echo "<br>";
if(!is_numeric($_POST["bookID"])){
    echo "ID must be of only Numbers!";
    $temp = 0;
}
echo "<br>";




if($temp==1){
    /*search query*/
    $sql = "select id from books where id='".$_POST["bookID"]."'";
    $result = mysqli_query($conn,$sql);
    $count = 0;
    $count = mysqli_num_rows($result);
    if($count!=0){

        /*delete query*/
        $sql = "delete from books where id='".$_POST["bookID"]."'";


        if($conn->query($sql) === TRUE) {
            //admin record start
            $date=date("Y-m-d");
            $time=date("h:i:sa");
            $admin_id= $_SESSION['admin_id'];
            $operation="BOOK REMOVED";
            $sql = "insert into admin_records (admin_id,operation,time,date) values('$admin_id','$operation','$time','$date')";
            mysqli_query($conn,$sql);
            //admin record end
            echo '<script type="text/javascript">'; 
            echo 'alert("Book Deleted");'; 
            echo 'window.location.href = "removeAdmin.php";';
            echo '</script>';

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }
    else{
        echo '<script type="text/javascript">'; 
        echo 'alert("Book Not Found");'; 
        echo 'window.location.href = "removeAdmin.php";';
        echo '</script>';
    }




}





























?>