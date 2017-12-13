<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once 'db/db_init.php' ; 

$usermail=$_SESSION["email"];
$reviewDes=$_POST["review"];
$date=date("Y-m-d");
$bookID=$_POST["book_id"];;

$sql = "insert into review (userMail,book_id,description,date) values('$usermail','$bookID','$reviewDes','$date')";
mysqli_query($conn,$sql);


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

