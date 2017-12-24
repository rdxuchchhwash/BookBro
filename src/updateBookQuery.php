
<?php
require_once '../db/db_init.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$flag=1;
$book_id=$_POST["bookID"];
$bookName=$_POST["bname"];
$category=$_POST["category"];
$author=$_POST["author"];
$description=$_POST["description"];
$language=$_POST["language"];
$country=$_POST["country"];
$qty=$_POST["quan"];
$price=$_POST["price"];
$language=$_POST["language"];
$date=date("Y-m-d");

if(strlen($book_id)==0){
    echo '<script type="text/javascript">'; 
    echo 'alert("Book ID can not be empty");'; 
    echo 'window.location.href = "updateBook.php";';
    echo '</script>';
}


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
if($price <= 0){
    echo "Price Can not be 0 or less";
    $flag=0;
}
echo "<br>";
if($qty <= 0){
    echo "Quantity Can not be 0 or less";
    $flag=0;
}

echo "<br>";


$s=$_FILES['bookCover']['tmp_name'];
$sql = "SELECT img_path FROM books where id='$book_id'"; 
$result=mysqli_query($conn,$sql);
$type=mysqli_fetch_assoc($result);

$imgPath=$type["img_path"];
$n=0;


if($_FILES['bookCover']['type']=="image/jpeg")
{
    $n=$imgPath;
    $sz=$_FILES['bookCover']['size'];

}
else
{   
    $flag=0;
    echo '<script>alert("Uploaded File Type must be JPEG/JPG")</script>';
}



if($flag==1)
{
    $nsql= "select id from books where id='$book_id'";

    $nresult=mysqli_query($conn,$nsql);
    $ncount=0;
    $ncount=mysqli_num_rows($nresult);
    if($ncount!=0){

        move_uploaded_file($s,"../".$n);
        $sql = "update books SET bk_name='$bookName',category='$category',author='$author',description='$description',quantity='$qty',price='$price',img_path='$imgPath',date='$date',country='$country',language='$language' where id='$book_id'";
        mysqli_query($conn,$sql);

        //admin record start
        $date=date("Y-m-d");
        $time=date("h:i:sa");
        $admin_id= $_SESSION['admin_id'];
        $operation="UPDATED BOOK INFO";
        $sql = "insert into admin_records (admin_id,operation,time,date) values('$admin_id','$operation','$time','$date')";
        mysqli_query($conn,$sql);
        //admin record end

        echo '<script type="text/javascript">'; 
        echo 'alert("Book Updated");'; 
        echo 'window.location.href = "updateBook.php";';

        echo '</script>';
    }
    else{
        echo '<script type="text/javascript">'; 
        echo 'alert("Check Book ID");'; 
        echo 'window.location.href = "updateBook.php";';
        echo '</script>';

    }
}

?>