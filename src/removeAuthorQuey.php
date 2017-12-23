<?php

require_once '../db/db_init.php';
$temp= 1;
if(strlen($_POST["authorID"])==0){
    echo "No Input On Category ID  field!";
    $temp= 0;
}

echo "<br>";
if(!is_numeric($_POST["authorID"])){
    echo "ID must be of only Numbers!";
    $temp = 0;
}
echo "<br>";




if($temp==1){
    /*search query*/
    $sql = "select id from authors where id='".$_POST["authorID"]."'";
    $result = mysqli_query($conn,$sql);
    $count = 0;
    $count = mysqli_num_rows($result);
    if($count!=0){

        /*delete query*/
        $sql = "delete from authors where id='".$_POST["authorID"]."'";


        if($conn->query($sql) === TRUE) {
            
            echo '<script type="text/javascript">'; 
            echo 'alert("Author Information Deleted");'; 
            echo 'window.location.href = "removeAuthor.php";';
            echo '</script>';

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }
    else{
        echo '<script type="text/javascript">'; 
            echo 'alert("Atuhor info not found! Try again!");'; 
            echo 'window.location.href = "removeAuthor.php";';
            echo '</script>';
    }




}





























?>