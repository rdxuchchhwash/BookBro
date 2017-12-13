<?php 
require_once 'db/db_init.php' ; 

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['email']) && $_SESSION['login_status']=="success"){
    
$bookID = $_GET['bk_id'];
$userMail=$_SESSION['email'];

$sql = "select * from wishlist where book_id='$bookID' and userMail='$userMail' and status=1";
$result=mysqli_query($conn,$sql);
$book=mysqli_fetch_assoc($result);


$b=$book["book_id"];


if( $b == (int)$bookID ){
    echo "Exist";
}

else{
    $sql = "insert into wishlist (userMail,book_id,status) values('$userMail','$bookID',1)";
    mysqli_query($conn,$sql);
    echo "Not Exist";
}


}

else{
    echo "notLoggedIn";
}

?>
