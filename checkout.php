<?php

require_once 'db/db_init.php' ; 

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if($_SESSION["login_status"]=="reset")
{   
    $_SESSION["login_status"]="continueToCheckout";
    header('Location:signIn.php');
}

else if($_SESSION["login_status"]=="success")
{   $ptotal=0;
    $sql = "SELECT * FROM shipment ORDER BY ID DESC LIMIT 1"; 
    $result=mysqli_query($conn,$sql);
    $type=mysqli_fetch_assoc($result);   
    $count=$type["id"];
    $count++;
    

    $sess=session_id();
    $email=$_SESSION["email"];
    $sql = "select * from tempcart where session_id=$sess";
    $result=mysqli_query($conn,$sql);
    $products=mysqli_fetch_assoc($result);
    $book_id=$products["book_id"];
    $book_type=$products["book_type"];
    $book_qty=$products["book_qty"];
    $book_price=$products["book_price"];
    $date=date("Y-m-d");
    $temp=$book_qty*$book_price;
    $ptotal+=$temp;
    $sql = "insert into orderdetails (order_no,book_id,book_type,book_price,quantity,date,customerMail) values('$count','$book_id','$book_type','$book_qty','$book_price','$date')";
    mysqli_query($conn,$sql);
    
    $sql = "insert into shipment (order_id,status,total_cost,address,contact_no,date) values('$count','PENDING','$ptotal','address','$book_price','$date')";
    mysqli_query($conn,$sql);
}

}
?>    


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

$sql = "insert into tempcart (session_id,book_id,book_type,book_qty) values('$ssid','$bookID','$t',1)";
mysqli_query($conn,$sql);
}


$s=$_FILES['bookCover']['tmp_name'];
$sql = "SELECT * FROM books ORDER BY ID DESC LIMIT 1"; 
$result=mysqli_query($conn,$sql);
$type=mysqli_fetch_assoc($result);

$count=$type["id"];
$count++;