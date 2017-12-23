<?php


require_once '../db/db_init.php';


	$bookid=$_POST["bookID"];
	$status=$_POST["status"];
	
	$sql = "SELECT * FROM oldbookstat WHERE old_book_id='$bookid'";
	$result=mysqli_query($conn,$sql);
	$count=0;
	$count=mysqli_num_rows($result);
	
    if($count!=0){
        $sql = "update oldbookstat SET book_status='$status' where old_book_id='$bookid'";
         mysqli_query($conn,$sql);
        echo '<script type="text/javascript">'; 
        echo 'alert("Status Changed");'; 
        echo 'window.location.href = "oldBookStat.php";';

        echo '</script>';
    }
    else{

        echo '<script type="text/javascript">'; 
        echo 'alert("Book ID no match");'; 
        echo 'window.location.href = "oldBookStat.php";';
        echo '</script>';   
    }




?>