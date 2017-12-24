<?php 
include 'admin_index.php';
require_once '../db/db_init.php' ; 
?>
<head><title>Show All Books | BookBro</title></head>

<div class="new">

    <?php


    $result= mysqli_query($conn,"Select * from books where book_type='NEW'");
    echo"<table cellpadding='0' cellspacing='0' class='db-table'>
    <tr>
    <th>Book ID</th>
    <th>Book name</th>
    <th>Category</th>
    <th>Author</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Book Type</th>
    <th>Language</th>
    <th>Country</th>
    <th>Date</th>
    </tr>";
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['id']."</td>";
        echo "<td>" . $row['bk_name']."</td>";
        echo "<td>" . $row['category']."</td>";
        echo "<td>" . $row['author']."</td>";
        echo "<td>" . $row['quantity']."</td>";
        echo "<td>" . $row['price']."</td>";
        echo "<td>" . $row['book_type']."</td>";
        echo "<td>" . $row['language']."</td>";
        echo "<td>" . $row['country']."</td>";
        echo "<td>" . $row['date']."</td>";
        echo "</tr>";
    }
    echo"</table>";
    
    ?>
</div>