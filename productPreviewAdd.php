<?php 
require_once 'db/db_init.php' ; 

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//echo session_id();

print_r($GLOBALS);
$bookID = $_GET['bk_id'];
$bookQty = $_GET['qty'];
$ssid=session_id();
//if user logged in then $flag=1 otherwise 0


$sql = "select book_qty from tempcart where book_id=$bookID";
    $result=mysqli_query($conn,$sql);
    $qty=mysqli_fetch_assoc($result);
$q=0;
$q=$qty["book_qty"];

if($q>0){
    $bookQty=$bookQty+$q;
    $sql = "update tempcart set book_qty= '$bookQty' where book_id= '$bookID'";
    mysqli_query($conn,$sql);
    echo "done";
}
else
{   
    $sql = "select * from books where id=$bookID";
    $result=mysqli_query($conn,$sql);
    $type=mysqli_fetch_assoc($result);
    $t=$type["book_type"];

    $sql = "insert into tempcart (session_id,book_id,book_type,book_qty) values('$ssid','$bookID','$t','$bookQty')";
    mysqli_query($conn,$sql);
    echo "done 2";
}

?>
