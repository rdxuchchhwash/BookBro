<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BookBro";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno()) {
    echo "Database connection failed with following errors:" .mysqli_connect_error();
    die();
} 

?>