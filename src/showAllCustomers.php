<?php 
include 'admin_index.php';
require_once '../db/db_init.php' ; 
?>


<div class="new">

    <?php


    $result= mysqli_query($conn,"Select * from user_info");
    echo"<table cellpadding='0' cellspacing='0' class='db-table'>
    <tr>
    <th>User ID</th>
    <th>User Name</th>
    <th>Email</th>
    <th>Mobile No</th>
    <th>Date Of Birth</th>
    <th>Gender</th>
    <th>Address</th>
    </tr>";
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['user_id']."</td>";
        echo "<td>" . $row['full_name']."</td>";
        echo "<td>" . $row['email']."</td>";
        echo "<td>" . $row['mobile_no']."</td>";
        echo "<td>" . $row['dob']."</td>";
        echo "<td>" . $row['gender']."</td>";
        echo "<td>" . $row['address']."</td>";
        echo "</tr>";
    }
    echo"</table>";
    
    ?>
</div>