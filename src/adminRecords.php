<?php 
include 'admin_index.php';
require_once '../db/db_init.php' ; 
?>


<div class="new">

    <?php


    $result= mysqli_query($conn,"Select * from admin_Records order by record_id DESC");
    echo"<table cellpadding='0' cellspacing='0' class='db-table'>
    <tr>
    <th>Record ID</th>
    <th>Admin ID</th>
    <th>Operation</th>
    <th>Date</th>
    <th>Time</th>
    </tr>";
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['record_id']."</td>";
        echo "<td>" . $row['admin_id']."</td>";
        echo "<td>" . $row['operation']."</td>";
        echo "<td>" . $row['date']."</td>";
        echo "<td>" . $row['time']."</td>";
        echo "</tr>";
    }
    echo"</table>";
    
    ?>
</div>