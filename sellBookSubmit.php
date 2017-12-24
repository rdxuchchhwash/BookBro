<pre>
<?php
require_once 'db/db_init.php' ; 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$flag=1;

$bookName=$_POST["bk_name"];
$description=$_POST["description"];
$qty=$_POST["quantity"];
$price=$_POST["price"];
$country=$_POST["country"];
$category=$_POST["category"];
$author=$_POST["author"];
$language=$_POST["language"];

if(strlen($bookName)==0){
    echo "No Input given on Book Name Field!";
    $flag=0;
}

if(strlen($description)==0){
    echo "No Input given on Book Description Field!";
    $flag=0;
}


if(strlen($qty)==0){
    echo "No Input given on Book Quantity Field!";
    $flag=0;
}


if(strlen($price)==0){
    echo "No Input given on Book Price Field!";
    $flag=0;
}


if(strlen($country)==0){
    echo "No Input given on Book Country Field!";
    $flag=0;
}


if(strlen($category)==0){
    echo "Book Category not selected!";
    $flag=0;
}


if(strlen($author)==0){
    echo "Book Author not selected!";
    $flag=0;
}

if(strlen($language)==0){
    echo "No Input given on language Field!";
    $flag=0;
}


$s=$_FILES['bookCover']['tmp_name'];
$sql = "SELECT id FROM books ORDER BY ID DESC LIMIT 1"; 
$result=mysqli_query($conn,$sql);
$type=mysqli_fetch_assoc($result);

$count=$type["id"];
$count++;

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
    echo '<script>alert("Uploaded File Type must be JPEG/JPG")</script>';
}

$email=$_SESSION['email'];
$sql = "SELECT * FROM user_info where email= '$email'"; 
$result=mysqli_query($conn,$sql);
$info=mysqli_fetch_assoc($result);

$sellerCont=$info['mobile_no'];
$sellerName=$info['full_name'];
if($flag==1)
{
    move_uploaded_file($s,"images/".$n);
    $n="images/".$n;
    $sql = "insert into books (bk_name,category,author,description,quantity,price,img_path,date,country,language,book_type,no_of_views) values('$bookName','$category','$author','$description',$qty,$price,'$n','$date','$country','$language','OLD',0)";
    mysqli_query($conn,$sql);

    $sql = "insert into oldbookstat (old_book_id,book_status,old_book_seller_mail,seller_contact,seller_name) values('$count','PENDING','$email','$sellerCont','$sellerName')";
    mysqli_query($conn,$sql);
 
    
    echo '<script>alert("Sell Book Submitted.Waiting For Admin Approval")</script>';
    echo '<script>window.location = "sellBook.php";</script>';

}

?>
</pre>