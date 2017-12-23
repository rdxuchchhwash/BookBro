<pre><?php
require_once 'db/db_init.php' ; 
session_start();
//print_r($GLOBALS);
$flag=1;
if(strlen($_POST["fname"])==0){
    echo "No Input On firstname field!";
    $flag=0;
}

echo "<br>";

if(strlen($_POST["email"])==0){
    echo "No Input On email field!";
    $flag=0;
}

// Validate e-mail
$email = $_POST["email"];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
{} 
else 
{
    echo("$email is not a valid email address");
    $flag=0;
}
//email validation end
echo "<br>";

if(strlen($_POST["mbNo"])==0){
    echo "No Input On mobileno field!";
    $flag=0;
}

if(strlen($_POST["mbNo"])<11){
    echo "Mobile Number can't be lower than 11 digits";
    $flag=0;
}

echo "<br>";

if(strlen($_POST["pass"])==0){
    echo "No Input On pass field!";
    $flag=0;
}

if(strlen($_POST["confirmpass"])==0){
    echo "No Input On pass field!";
    $flag=0;
}

if(strlen($_POST["pass"])<8){
    echo "Password must contain atleast 8 characters";
    $flag=0;
}

echo "<br>";

if($_POST["confirmpass"]!=$_POST["pass"]){
    echo "Password & Confirm password missmatch";
    $flag=0;
}

echo "<br>";

if(strlen($_POST["address"])==0){
    echo "No Input On Address field!";
    $flag=0;
}
echo "<br>";

$gender=$_POST["gender"];

if(($gender!="MALE")&& ($gender!="FEMALE")){
    echo "Gender not selected";
    $flag=0;
}

if ($_POST["checkbx"]!="Agree") {
    echo "Agreement not accepted!";
    $flag=0;
}
echo "<br>";

//
$sql = "SELECT * FROM user_info WHERE email='$email'";
$result=mysqli_query($conn,$sql);
$count=0;
$count=mysqli_num_rows($result);

if($count>0)
{   
    echo '<script>alert("Email Already Exist")</script>';
    echo '<script>window.location = "signup.php";</script>';
    $flag=0;
}
//
$mbNo = $_POST["mbNo"];
$sql = "SELECT * FROM user_info WHERE mobile_no='$mbNo'";
$result=mysqli_query($conn,$sql);
$count=0;
$count=mysqli_num_rows($result);
if($count>0)
{   
    echo '<script>alert("Mobile No Already Exist")</script>';
    echo '<script>window.location = "signup.php";</script>';
    $flag=0;
}

if($flag==1)
{

$fullname = $_POST["fname"];
$email = $_POST["email"];
$password = $_POST["pass"];
$dob = $_POST["date"];
$address = $_POST["address"];
$gender = $_POST["gender"];

        
        $sql = "insert into user_info (full_name,email,mobile_no,password,dob,gender,address) values('$fullname','$email','$mbNo','$password','$dob','$gender','$address')";
        mysqli_query($conn,$sql);

$_SESSION["SignUpStatus"] = "Complete";
 header("Location: signup.php");
}
else{
    echo '<script>alert("Please Insert Your Data Correctly")</script>';
    echo '<script>window.location = "signup.php";</script>';   
}
?>
</pre>

