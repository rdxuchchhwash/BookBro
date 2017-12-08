<?php 
require_once 'db/db_init.php' ; 

//tushar_work

session_start();
//echo session_id();
    $cartID = $_POST['book_id'];
    $newQty = $_POST['bk_qty'];
    $ssid=session_id();
    
    echo $cartID;
    echo $newQty;


    if($newQty>0)
    {   
 
        $sql = "update tempcart set book_qty=$newQty where id=$cartID";
        mysqli_query($conn,$sql);
    }
    else
    {   
        $sql = "update tempcart set book_qty=1 where id=$cartID";
        mysqli_query($conn,$sql);
        header("Location: orderDetails.php");
    }
    header("Location: orderDetails.php");
    
    
?>
