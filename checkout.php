<?php

require_once 'db/db_init.php' ; 

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//print_r($_SESSION);
if($_SESSION["login_status"]=="reset")
{   
    $_SESSION["login_status"]="continueToCheckout";
    header('Location:signIn.php');
}

else if($_SESSION["login_status"]=="success")
{   
    
    $date=date("Y-m-d");
    $ptotal=0;
    $sql = "SELECT * FROM shipment ORDER BY ID DESC LIMIT 1"; 
    $result=mysqli_query($conn,$sql);
    $type=mysqli_fetch_assoc($result);   
    $count=$type["id"];
    $count++;


    $sess=session_id();
    $userID=$_SESSION["user_id"];
    $stockQty=0;

    $sql = "select * from tempcart where session_id='$sess'";
    $result=mysqli_query($conn,$sql);
    $ck=mysqli_num_rows($result);
    if($ck==0)
    {   
         echo '<script>alert("Cart Is Empty")</script>';
    echo '<script>window.location = "orderDetails.php";</script>';
        
    }
    while($products=mysqli_fetch_assoc($result))
    {

        $book_id=$products["book_id"];
        $book_type=$products["book_type"];
        $book_qty=$products["book_qty"];
        $book_price=$products["book_price"];

        $temp=$book_qty*$book_price;
        $ptotal+=$temp;

        $sql1 = "insert into orderdetails (order_no,book_id,book_type,book_price,quantity,date,customerID) values('$count','$book_id','$book_type','$book_price','$book_qty','$date','$userID')";
        mysqli_query($conn,$sql1);

        $sql2 = "select quantity from books where id='$book_id'";
        $result1=mysqli_query($conn,$sql2);
        $qty=mysqli_fetch_assoc($result1);
        $stockQty=$qty['quantity'];
        $stockQty=$stockQty-$book_qty;
        echo $stockQty;

        $sql3 = "update books set quantity='$stockQty' where id='$book_id'";
        mysqli_query($conn,$sql3);

    }
    $ptotal+=50;
    $sql = "insert into shipment (order_id,status,total_cost,customerID,date) values('$count','PENDING','$ptotal','$userID','$date')";
    mysqli_query($conn,$sql);

    $sql = "delete from tempcart where session_id='$sess'";
    mysqli_query($conn,$sql);


    echo '<script>alert("Your Order Has Been Placed & Will Be Delivered Withing 3 Days.For Any Query Contact +8801631666080")</script>';
    echo '<script>window.location = "orderDetails.php";</script>';
}


?>    
