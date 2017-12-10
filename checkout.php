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
{
    echo "Checkout Confirm";
}
?>    
