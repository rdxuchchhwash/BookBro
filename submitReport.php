<pre><?php
require_once 'db/db_init.php' ; 
session_start();
//print_r($GLOBALS);
$flag=1;
if(strlen($_POST["name"])==0){
    echo "No Input On Name field!";
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

if(strlen($_POST["mobileNo"])==0){
    echo "No Input On mobileno field!";
    $flag=0;
}

if(strlen($_POST["mobileNo"])<11){
    echo "Mobile Number can't be lower than 11 digits";
    $flag=0;
}

echo "<br>";

if(strlen($_POST["message"])==0){
    echo "No Input On Message field!";
    $flag=0;
}

echo "<br>";

if($flag==1)
{

    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobileNo = $_POST["mobileNo"];
    $message = $_POST["message"];
    $date=date("Y-m-d");
    $status='PENDING';


    $sql = "insert into reports (name,email,mobile_no,message,status,date) values('$name','$email','$mobileNo','$message','$status','$date')";
    mysqli_query($conn,$sql);
    echo '<script>alert("Report Submitted")</script>';
    header("Location: footer_contactUs.php");
}
else{
    echo '<script>alert("Please Insert Your Data Correctly")</script>';
    echo '<script>window.location = "footer_contactUs.php";</script>';   
}
?>
</pre>

