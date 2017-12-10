<?php
require_once 'db/db_init.php' ; 
session_start();

$updateStat=1;
if(strlen($_POST["fname"])==0){
    echo "No Input On firstname field!";
    $updateStat=0;
}

echo "<br>";

if(strlen($_POST["mbNo"])==0){
    echo "No Input On mobileno field!";
    $updateStat=0;
}

if(strlen($_POST["mbNo"])<11){
    echo "Mobile Number can't be lower than 11 digits";
    $updateStat=0;
}

echo "<br>";

if(strlen($_POST["pass"])==0){
    echo "No Input On pass field!";
    $updateStat=0;
}

if(strlen($_POST["confirmpass"])==0){
    echo "No Input On pass field!";
    $updateStat=0;
}

if(strlen($_POST["pass"])<8){
    echo "Password must contain atleast 8 characters";
    $updateStat=0;
}

echo "<br>";

if($_POST["confirmpass"]!=$_POST["pass"]){
    echo "Password & Confirm password missmatch";
    $updateStat=0;
}

echo "<br>";

if(strlen($_POST["address"])==0){
    echo "No Input On Address field!";
    $updateStat=0;
}
echo "<br>";

$gender=$_POST["gender"];

if(($gender!="MALE")&& ($gender!="FEMALE")){
    echo "Gender not selected";
    $updateStat=0;
}

echo "<br>";

if($updateStat==1){
    $fullname = $_POST["fname"];
    $email = $_SESSION['email'];
    $mbNo = $_POST["mbNo"];
    $password = $_POST["pass"];
    $dob = $_POST["date"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];


    $sql = "update user_info set full_name='$fullname',mobile_no='$mbNo',password='$password',dob='$dob',gender='$gender',address='$address' where email='$email'";
    mysqli_query($conn,$sql);

    $_SESSION["userInfoUpdated"]="true";
    header("Location: myProfile.php");
}
?>





