<?php 
include 'admin_index.php';
require_once '../db/db_init.php' ; 
?>


<div class="new">

    <?php


    $result= mysqli_query($conn,"select orderdetails.order_no , orderdetails.book_id ,orderdetails.quantity , orderdetails.customerID ,orderdetails.date , books.bk_name , books.book_type ,books.price from orderdetails inner join books on orderdetails.book_id=books.id");
    echo"<table cellpadding='0' cellspacing='0' class='db-table'>
    <tr>
    <th>Order ID </th>
    <th>Book ID </th>
    <th>Book Name </th>
    <th>Book Type</th>
    <th>Book Price </th>
    <th>Book Quantity</th>
    <th>Total Cost</th>
    <th>Customer ID</th>
    <th>Date</th>
    </tr>";
    while($row = mysqli_fetch_array($result)){
        echo "<td>" . $row['order_no']."</td>";
        echo "<td>" . $row['book_id']."</td>";
        echo "<td>" . $row['bk_name']."</td>";
        echo "<td>" . $row['book_type']."</td>";
        echo "<td>" . $row['price']."</td>";
        echo "<td>" . $row['quantity']."</td>";
        echo "<td>" . $row['price']*$row['quantity']."</td>";
        echo "<td>" . $row['customerID']."</td>";
        echo "<td>" . $row['date']."</td>";
        echo "</tr>";
    }
    echo"</table>";
    
    ?>
</div>