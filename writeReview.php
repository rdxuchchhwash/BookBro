<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once 'db/db_init.php' ; 

$usermail=$_SESSION["email"];
$reviewDes=$_POST["review"];
$date=date("Y-m-d");
$bookID=$_POST["book_id"];;


$sql = "select * from user_info where email='$usermail'"; 
$result=mysqli_query($conn,$sql);
$username=mysqli_fetch_assoc($result);
$fname=$username["full_name"];

$sql = "select count(*) as cnt from review where book_id='$bookID' and userMail='$usermail' and status=1"; 
$result=mysqli_query($conn,$sql);
$count=mysqli_fetch_assoc($result);
$c=(int)$count["cnt"];

if($c==0)
{
$sql = "insert into review (userMail,book_id,review_des,username,date,status) values('$usermail','$bookID','$reviewDes','$fname','$date',1)";
mysqli_query($conn,$sql);
    header("Location: productPreview.php?bk_id=$bookID");
}
else{
    $sql = "update review set review_des='$reviewDes' where userMail='$usermail' and book_id='$bookID' status=1";
    mysqli_query($conn,$sql);
    header("Location: productPreview.php?bk_id=$bookID");
}