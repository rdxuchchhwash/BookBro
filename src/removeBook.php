<?php
require_once '../db/db_init.php';
include 'admin_index.php'


?>
<div class="new">

    <form action="#" enctype="multipart/form-data" method="post">
       <div class="first_block">
        <h2>Remove Book</h2>
        <hr>
        <p>Book ID</p>
        <input type="number" placeholder="Enter Book ID here" name="bId" >

           <br><br>
           
        <input type="submit" value="Remove" style="background-color:#cc4128" >

    </div>
    <div class="second_block">
        
        <img id="preview" src="http://placehold.it/180" alt="your image" />
        
             
        
       <!-- Select image to upload : <input type="file" name="fileToUpload">
		<input type="submit" value="Upload File" name="submit">
        <br>
        <img src="index.jpg" alt=Picture style="width:150height:100";>-->
        <br>
        <br>
        
        



    </div>
    </form>
 


</div>