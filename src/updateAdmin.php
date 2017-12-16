<?php
require_once '../db/db_init.php';
include 'admin_index.php';


?>


<div class="new">

    <form action="#" enctype="multipart/form-data" method="post">
        <div class="first_block">
            <h2>Update Admin</h2>
            <hr>
            <p>Admin Name</p>
            <input type="text" placeholder="Input Admin Username here" name="addminUsername" >
            <p>Password</p>
            <input type="text" placeholder="Input Password Here" name="dminPass" >
            <p>New Admin Name</p>
            <input type="text" placeholder="Input New Username here" name="newAdminName" >

            <p>New Password</p>
            <input type="email" placeholder="Input New Password  here" name="newAdinPass" >

            <input type="submit" value="Update" style="background-color:#08ad19">




        </div>
    </form>



</div>