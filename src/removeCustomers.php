<?php
require_once '../db/db_init.php';
include 'admin_index.php';


?>

<div class="new">

    <form action="#" enctype="multipart/form-data" method="post">
       <div class="first_block">
        <h2>Remove Customer by ID</h2>
        <hr>
        <p>Customer ID</p>
        <input type="text" placeholder="Input Customer ID here" name="customerID" >     
        <input type="submit" class="" value="Remove" style="background-color:#cc4128">

    </div>
    </form>
 


</div>