<?php 
require_once 'db/db_init.php' ; 

//tushar_work

session_start();
//echo session_id();
$cartID = $_GET['cart_id'];
    $ssid=session_id();
    
    echo $cartID;

        $sql = "delete from tempcart where id=$cartID";
        mysqli_query($conn,$sql);

    header("Location: orderDetails.php");
    
    
?>
