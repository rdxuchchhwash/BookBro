<?php 
include 'admin_index.php';
require_once '../db/db_init.php' ; 
?>


<div class="new">

    <?php


    $result= mysqli_query($conn,"Select * from authors");
    echo"<table cellpadding='0' cellspacing='0' class='db-table'>
    <tr>
    <th>Author ID</th>
    <th>Author Name</th>
    <th>Author Details</th>
    </tr>";
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['id']."</td>";
        echo "<td>" . $row['author_name']."</td>";
        echo "<td>" . $row['author_details']."</td>";
        echo "</tr>";
    }
    echo"</table>";
    
    ?>
</div>