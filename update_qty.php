<pre><?php 
require_once 'db/db_init.php' ; 

session_start();
//echo session_id();
$cartID = $_POST['book_id'];
$newQty = $_POST['bk_qty'];
$availqty= $_POST['availqty'];
$ssid=session_id();



if($newQty>0 && $newQty<=$availqty)
{   
    $sql = "update tempcart set book_qty=$newQty where id=$cartID";
    mysqli_query($conn,$sql);
    header("Location: orderDetails.php");
}
else if($newQty==1)
{   
    $sql = "update tempcart set book_qty=1 where id=$cartID";
    mysqli_query($conn,$sql);
    header("Location: orderDetails.php");
}

else if($newQty==0)
{   
    echo "<script>
alert('Given Quantity Can Not Be 0');
window.location.href='orderDetails.php';
</script>";
}


else
{
    echo "<script>
alert('Given Quantity is Bigger than Avaialble Quantity');
window.location.href='orderDetails.php';
</script>";
}



?>
</pre>