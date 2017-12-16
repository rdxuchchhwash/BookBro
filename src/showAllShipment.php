<?php 
include 'admin_index.php';
require_once '../db/db_init.php' ; 
?>


<div class="new">

    <?php


    $result= mysqli_query($conn,"Select * from shipment sp , user_info ui where sp.customerID=ui.user_id");
    echo"<table cellpadding='0' cellspacing='0' class='db-table'>
    <tr>
    <th>Shipment ID</th>
    <th>Order ID </th>
    <th>Status</th>
    <th>Total Cost</th>
    <th>Customer ID</th>
    <th>Customer Name</th>
    <th>Customer Email</th>
    <th>Customer Mobile No</th>
    <th>Customer Address</th>
    <th>Date</th>
    </tr>";
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['id']."</td>";
        echo "<td>" . $row['order_id']."</td>";
        echo "<td>" . $row['status']."</td>";
        echo "<td>" . $row['total_cost']."</td>";
        echo "<td>" . $row['customerID']."</td>";
        echo "<td>" . $row['full_name']."</td>";
        echo "<td>" . $row['email']."</td>";
        echo "<td>" . $row['mobile_no']."</td>";
        echo "<td>" . $row['address']."</td>";
        echo "<td>" . $row['date']."</td>";
        echo "</tr>";
    }
    echo"</table>";
    
    ?>
</div>