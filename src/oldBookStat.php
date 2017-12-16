<?php
require_once '../db/db_init.php';
include 'admin_index.php';
?>




<div class="new">

    <form action="#" enctype="multipart/form-data" method="post">
        <div class="first_block">

            <h2>OLD BOOK STATUS </h2>
            <hr>
            <p>Old Book ID</p>
            <input type="text" placeholder="Input Old Book ID here" name="book_id" >

            <input type="submit" value="Get Status" >
            <br><br>


            <p>Book Status</p>
            <select name="author" class="form-control" id="author">
                <option>PENDING</option>
                <option>APPROVED</option>
                <option>DECLINE</option>
            </select>

            <input type="submit" value="Update" style="background-color:#08ad19">
        </div>
    </form>



</div>
