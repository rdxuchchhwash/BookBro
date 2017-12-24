<?php

require_once '../db/db_init.php';
$temp= 1;
if(strlen($_POST["catID"])==0){
    echo "No Input On Category ID  field!";
    $temp= 0;
}

echo "<br>";
if(!is_numeric($_POST["catID"])){
    echo "ID must be of only Numbers!";
    $temp = 0;
}
echo "<br>";




if($temp==1){
    /*search query*/
    $sql = "select id from category where id='".$_POST["catID"]."'";
    $result = mysqli_query($conn,$sql);
    $count = 0;
    $count = mysqli_num_rows($result);
    if($count!=0){

        /*delete query*/
        $sql = "delete from category where id='".$_POST["catID"]."'";


        if($conn->query($sql) === TRUE) {

            //admin record start
            $date=date("Y-m-d");
            $time=date("h:i:sa");
            $admin_id= $_SESSION['admin_id'];
            $operation="REMOVED CATEGORY";
            $sql = "insert into admin_records (admin_id,operation,time,date) values('$admin_id','$operation','$time','$date')";
            mysqli_query($conn,$sql);
            //admin record end

            echo '<script type="text/javascript">'; 
            echo 'alert("Category Information Deleted");'; 
            echo 'window.location.href = "removeCategory.php";';
            echo '</script>';

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }
    else{
        echo '<script type="text/javascript">'; 
        echo 'alert("Category info not found! Try again!");'; 
        echo 'window.location.href = "removeCategory.php";';
        echo '</script>';
    }




}





























?>