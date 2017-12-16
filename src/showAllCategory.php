<?php 
include 'admin_index.php';
require_once '../db/db_init.php' ; 
?>


<div class="new">

    <?php


    $result= mysqli_query($conn,"Select * from category");
    echo"<table cellpadding='0' cellspacing='0' class='db-table'>
    <tr>
    <th>Category ID</th>
    <th>Category Name</th>
    </tr>";
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['id']."</td>";
        echo "<td>" . $row['category_name']."</td>";
        echo "</tr>";
    }
    echo"</table>";
    
    ?>
</div>