<?php
require_once '../db/db_init.php';
include 'admin_index.php';
?>




<div class="new">

    <form action="#" enctype="multipart/form-data" method="post">
       <div class="first_block">
           
        <h2>Update Category</h2>
        <hr>
        <p>Category ID</p>
        <input type="text" placeholder="Input Category ID here" name="catID" >
           
        <input type="submit" value="Get Name" >
           <br><br>
           
           
        <p>Category Name</p>
        <input type="text" placeholder="Category Name" name="catName" disabled>
       
        <input type="submit" value="Remove" style="background-color:#cc4128">
       



    </div>
    </form>
 


</div>