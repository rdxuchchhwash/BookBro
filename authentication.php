<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once 'db/db_init.php' ; 

$usermail=$_SESSION["email"];
$password=$_SESSION["password"];


$sql = "SELECT * FROM user_info WHERE email='$usermail' and password ='$password'";

$result=mysqli_query($conn,$sql);
$count=0;
$count=mysqli_num_rows($result);
$id=mysqli_fetch_assoc($result);


//$_SESSION["sessFlag"] = $temp;	

if($count==1)
{   
    $_SESSION["login_status"] = "success";	
    $_SESSION["user_id"] = $id["user_id"];
    header('Location:home.php');
}

else
{   
    $_SESSION["login_status"] = "failed";	
    header('Location:signIn.php');

}

?>

