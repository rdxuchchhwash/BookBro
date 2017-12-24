<?php 
include 'admin_index.php';
require_once '../db/db_init.php' ; 
?>

<head><title>Show All Report | BookBro</title></head>
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


$jsonData= getJSONFromDB("select * from reports");



$jsn=json_decode($jsonData,true);


  //  $result= mysqli_query($conn,"Select * from reports");
    echo"<table cellpadding='0' cellspacing='0' class='db-table'>
    <tr>
    <th>ID</th>
    <th>User Name</th>
    <th>Email</th>
    <th>Mobile No</th>
    <th>Message</th>
    <th>Status</th>
    <th>Date</th>
    </tr>";

      foreach($jsn as $v){
		echo "<tr>";
        echo "<td>" . $v['id']."</td>";
        echo "<td>" . $v['name']."</td>";
        echo "<td>" . $v['email']."</td>";
        echo "<td>" . $v['mobile_no']."</td>";
        echo "<td>" . $v['message']."</td>";
        echo "<td>" . $v['status']."</td>";
        echo "<td>" . $v['date']."</td>";
        echo "</tr>";

	
	
}
    echo"</table>";
    
    ?>
</div>