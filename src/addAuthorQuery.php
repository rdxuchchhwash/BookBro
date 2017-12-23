<?php
session_start();

require_once '../db/db_init.php';
$temp= 1;
if(strlen($_POST["authorName"])==0){
    echo "No Input On Name  field!";
    $temp= 0;
}

if(strlen($_POST["authorDescription"])==0){
    echo "No Input On Description  field!";
    $temp= 0;
}






if($temp==1){
    /*insert query*/
    $sql = "INSERT INTO authors (author_name,author_details) VALUES ('".$_POST['authorName']."','".$_POST['authorDescription']."')";


    if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript">'; 
        echo 'alert("Author Information Saved");'; 
        echo 'window.location.href = "addAdmin.php";';
        echo '</script>';

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}





























?>