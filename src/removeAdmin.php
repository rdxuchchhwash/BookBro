<?php
require_once '../db/db_init.php';
include 'admin_index.php';


?>

<div class="new">

    <form action="#" enctype="multipart/form-data" method="post">
       <div class="first_block">
        <h2>Remove Admin by ID</h2>
        <hr>
        <p>Admin ID</p>
        <input type="text" placeholder="Input Admin Username here" name="addminUsername" >
        <p>Password</p>
        <input type="text" placeholder="Input Password Here" name="adminPass" >
           
        <input type="submit" class="" value="Get Data" style="background-color:#0f8c1c">
           <br>
       
        <input type="submit" class="" value="Remove" style="background-color:#cc4128">
        



    </div>
    </form>
 


</div>