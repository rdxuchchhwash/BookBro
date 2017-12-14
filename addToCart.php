<?php 
require_once 'db/db_init.php' ; 

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

    $bookID = $_GET['bk_id'];
    $ssid=session_id();
    //if user logged in then $flag=1 otherwise 0
    $flag=0;

    


    $sql = "select book_qty from tempcart where book_id=$bookID and session_id='$ssid'";
    $result=mysqli_query($conn,$sql);
    $qty=mysqli_fetch_assoc($result);

    
    $q=$qty["book_qty"];
    if($q)
    {   
        ++$q;
        $sql = "update tempcart set book_qty=$q where book_id=$bookID and session_id='$ssid'";
        mysqli_query($conn,$sql);
    }
    else
    {   
        $sql = "select * from books where id=$bookID";
        $result=mysqli_query($conn,$sql);
        $type=mysqli_fetch_assoc($result);
        $t=$type["book_type"];
        $price=$type["price"];
        
        $sql = "insert into tempcart (session_id,book_id,book_type,book_qty,book_price) values('$ssid','$bookID','$t',1,'$price')";
        mysqli_query($conn,$sql);
    }
    
?>
