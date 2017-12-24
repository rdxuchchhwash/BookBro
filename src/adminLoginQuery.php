<?php

session_start();

require_once '../db/db_init.php';


$_SESSION['loginStatus']=0;
$temp=1;

if(strlen($_POST["name"])==0){
    echo "No Input On Name  field!";
    $temp= 0;
}

echo "<br>";
if(strlen($_POST["pass"])==0){
    echo "No Input On Admin Password  field!";
    $temp= 0;
}

if($temp==0){

    echo '<script type="text/javascript">'; 
    echo 'alert("Login Failed");'; 
    echo 'window.location.href = "adminLogin.php";';
    echo '</script>';
}
if($temp==1){
    $username=$_POST["name"];
    $password=$_POST["pass"];


    $sql = "SELECT * FROM admin WHERE username='$username' and password ='$password'";
    $result=mysqli_query($conn,$sql);
    $count=0;
    $count=mysqli_num_rows($result);
    $r = mysqli_fetch_array($result);
    $_SESSION['admin_id']=$r['admin_id'];

    if($count!=0){
        //admin record start
        $date=date("Y-m-d");
        $time=date("h:i:sa");
        $admin_id= $_SESSION['admin_id'];
        $operation="ADMIN LOGIN";
        $sql = "insert into admin_records (admin_id,operation,time,date) values('$admin_id','$operation','$time','$date')";
        mysqli_query($conn,$sql);
        //admin record end
        
        $_SESSION['loginStatus']=1;
        echo '<script type="text/javascript">'; 
        echo 'alert("Login Successful");'; 
        echo 'window.location.href = "admin_index.php";';
        echo '</script>';
    }
    else{

        echo '<script type="text/javascript">'; 
        echo 'alert("Login Failed");'; 
        echo 'window.location.href = "adminLogin.php";';
        echo '</script>';   
    }

}


?>