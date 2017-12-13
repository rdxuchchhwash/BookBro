<pre>
<?php 
require_once 'db/db_init.php' ; 

session_start();
//echo session_id();
$bookID = $_GET['book_id'];
$userMail=$_SESSION["email"];
$ssid=session_id();
    
print_r($GLOBALS);

        $sql = "update wishlist set status=0 where userMail='$userMail' and  book_id='$bookID'";
        mysqli_query($conn,$sql);

    header("Location: wishlist.php");
    
    
?>
</pre>