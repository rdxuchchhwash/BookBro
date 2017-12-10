<?php  
require_once 'db/db_init.php' ;

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$sessID = session_id();
        $sql = "select count(*) as cnt from tempcart where session_id='$sessID'"; 
        $result=mysqli_query($conn,$sql);
        $type=mysqli_fetch_assoc($result);
        
        echo $type["cnt"];

?>