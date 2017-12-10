<?php
require_once 'db/db_init.php' ; 
session_start();

print_r($GLOBALS);


if(strlen($_POST["fname"])==0){
    echo "No Input On firstname field!";
}

echo "<br>";

if(strlen($_POST["email"])==0){
    echo "No Input On email field!";
}

// Validate e-mail
$email = $_POST["email"];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
{} 
else 
{
    echo("$email is not a valid email address");
}
//email validation end
echo "<br>";

if(strlen($_POST["mbNo"])==0){
    echo "No Input On mobileno field!";
}

if(strlen($_POST["mbNo"])<11){
    echo "Mobile Number can't be lower than 11 digits";
}

echo "<br>";

if(strlen($_POST["pass"])==0){
    echo "No Input On pass field!";
}

if(strlen($_POST["confirmpass"])==0){
    echo "No Input On pass field!";
}

if(strlen($_POST["pass"])<8){
    echo "Password must contain atleast 8 characters";
}

echo "<br>";

if($_POST["confirmpass"]!=$_POST["pass"]){
    echo "Password & Confirm password missmatch";
}

echo "<br>";

if(strlen($_POST["address"])==0){
    echo "No Input On pass field!";
}
echo "<br>";

$gender=$_POST["gender"];

if(($gender!="MALE")&& ($gender!="FEMALE")){
    echo "Gender not selected";
}

if (($_POST["chkbox"]!="Agree")) {
    echo "Agreement not accepted!";
}
echo "<br>";


$fullname = $_POST["fname"];
$email = $_POST["email"];
$mbNo = $_POST["mbNo"];
$password = $_POST["pass"];
$dob = $_POST["date"];
$address = $_POST["address"];
$gender = $_POST["gender"];

        
        $sql = "insert into user_info (full_name,email,mobile_no,password,dob,gender,address) values('$fullname','$email','$mbNo','$password','$dob','$address','$gender')";
        mysqli_query($conn,$sql);

$_SESSION["SignUpStatus"] = "Complete";
 header("Location: signup.php");
    
?>

