
<?php
require_once '../db/db_init.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$flag=1;

$bookName=$_POST["bk_name"];
$category=$_POST["category"];
$author=$_POST["author"];
$description=$_POST["description"];
$language=$_POST["language"];
$country=$_POST["country"];
$qty=$_POST["quantity"];
$price=$_POST["price"];
$language=$_POST["language"];

if(strlen($bookName)==0){
    echo "No Input given on Book Name Field!";
    $flag=0;
}
echo "<br>";
if(strlen($description)==0){
    echo "No Input given on Book Description Field!";
    $flag=0;
}
echo "<br>";


if(strlen($qty)==0){
    echo "No Input given on Book Quantity Field!";
    $flag=0;
}
echo "<br>";


if(strlen($price)==0){
    echo "No Input given on Book Price Field!";
    $flag=0;
}
echo "<br>";


if(strlen($country)==0){
    echo "No Input given on Book Country Field!";
    $flag=0;
}
echo "<br>";


if(strlen($category)==0){
    echo "Book Category not selected!";
    $flag=0;
}
echo "<br>";


if(strlen($author)==0){
    echo "Book Author not selected!";
    $flag=0;
}
echo "<br>";

if(strlen($language)==0){
    echo "No Input given on language Field!";
    $flag=0;

}

echo "<br>";

if($price==0){
    echo "Price can not be zero!";
    $flag=0;
}
echo "<br>";
if($qty==0){
    echo "Quantity can not be zero!";
    $flag=0;
}
echo "<br>";
if(is_numeric($price)==false){
    echo "Price has to be a Integer";
    $flag=0;
}
echo "<br>";
if(is_numeric($qty)==false){
    echo "Quantity has to be a Integer";
    $flag=0;
}
echo "<br>";





$s=$_FILES['bookCover']['tmp_name'];
$sql = "SELECT id FROM books ORDER BY ID DESC LIMIT 1"; 
$result=mysqli_query($conn,$sql);
$type=mysqli_fetch_assoc($result);

$count=$type["id"];
$n=0;
$date=date("Y-m-d");

if($_FILES['bookCover']['type']=="image/jpeg")
{
    $n=$count.".jpg";
    $sz=$_FILES['bookCover']['size'];

}
else
{   
    $flag=0;
    echo '<script>alert("Uploaded File Type must be JPEG/JPG/Can\'t be empty")</script>';
}
if($flag==1)
{
    move_uploaded_file($s,"../images/".$n);
    $n="images/".$n;
    $sql = "insert into books (bk_name,category,author,description,quantity,price,img_path,date,country,language,book_type,no_of_views) values('$bookName','$category','$author','$description',$qty,$price,'$n','$date','$country','$language','NEW',0)";
    mysqli_query($conn,$sql);

    //admin record start
    $date=date("Y-m-d");
    $time=date("h:i:sa");
    $admin_id= $_SESSION['admin_id'];
    $operation="ADDED NEW BOOK";
    $sql = "insert into admin_records (admin_id,operation,time,date) values('$admin_id','$operation','$time','$date')";
    mysqli_query($conn,$sql);
    //admin record end
    
    echo '<script type="text/javascript">'; 
    echo 'alert("New Book Added");'; 
    echo 'window.location.href = "addNewBook.php";';

    echo '</script>';


}

?>