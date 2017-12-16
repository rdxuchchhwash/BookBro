<?php
session_start();

require_once '../db/db_init.php';
$temp= 1;
if(strlen($_POST["adminName"])==0){
    echo "No Input On Name  field!";
    $temp= 0;
}
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




if(strlen($_POST["adminID"])!=0){
    if(strlen($_POST["adminID"])!=4){
        echo "Id has to be of 4 digit!";
        $temp= 0;
    }   
}
echo "<br>";
if($temp==1){
    /*insert query*/
    $sql = "INSERT INTO admin VALUES ('".$_POST['adminID']."','".$_POST['adminPass']."','".$_POST['adminName']."')";


    if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript">'; 
        echo 'alert("Admin Information Saved");'; 
        echo 'window.location.href = "addAdmin.php";';
        echo '</script>';

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}





























?>