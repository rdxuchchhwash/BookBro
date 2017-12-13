<pre>
<?php 
require_once 'db/db_init.php' ; 

session_start();
//echo session_id();
$bookID = $_GET['book_id'];
$userMail=$_SESSION["email"];
    
        $sql = "update review set status=0 where userMail='$userMail' and  book_id='$bookID'";
        mysqli_query($conn,$sql);

    header("Location: myReviews.php");
    
    
?>
</pre>