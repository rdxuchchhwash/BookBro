<?php
require_once '../db/db_init.php';
include 'admin_index.php';
?>




<div class="new">

    <form action="#" enctype="multipart/form-data" method="post">
        <div class="first_block">

            <h2>SHIPMENT STATUS </h2>
            <hr>
            <p>Shipment ID</p>
            <input type="text" placeholder="Enter Shipment ID here" name="shipmentID" >

            <input type="submit" value="Get Status" >
            <br><br>


            <p>Shipment Status</p>
            <select name="author" class="form-control" id="author">
                <option>PENDING</option>
                <option>APPROVED</option>
                <option>DECLINE</option>
            </select>

            <input type="submit" value="Update" style="background-color:#08ad19">
        </div>
    </form>



</div>
