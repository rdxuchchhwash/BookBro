<?php 
include 'admin_index.php';
?>


<div class="new">

    <?php

    function getJSONFromDB($sql){
        $conn = mysqli_connect("localhost", "root", "","bookbro");

        $result = mysqli_query($conn, $sql)or die(mysqli_error($$conn));
        $arr=array();

        while($row = mysqli_fetch_assoc($result)) {
            $arr[]=$row;
        }
        return json_encode($arr);
    }


    $jsonData= getJSONFromDB("select * from admin");



    $jsn=json_decode($jsonData,true);

    echo"<table cellpadding='0' cellspacing='0' class='db-table'>
    <tr>
    <th>Admin ID</th>
    <th>User Name</th>
    <th>Password</th>
    </tr>";

    foreach($jsn as $v){
        echo "<tr>";
        echo "<td>" . $v['admin_id']."</td>";
        echo "<td>" . $v['username']."</td>";
        echo "<td>" . $v['password']."</td>";
        echo "</tr>";



    }
    echo"</table>";





    ?>
</div>