
<?php
 require_once '../db/db_init.php';
include 'admin_index.php';

?>


<div class="new">

    <form action="#" enctype="multipart/form-data" method="post">
       <div class="first_block">
        <h2>Add Author</h2>
        <hr>
        <p>Author ID</p>
        <input type="text" placeholder="Input Author Id here" name="authorID" >
        <p>Author Name</p>
        <input type="text" placeholder="Input Author Name Here" name="authorName" >
        <p>Author Details</p>
        <textarea placeholder="Write a small description about the author" name="authorDescription" ></textarea>
        <input type="submit" value="Submit" >
        



    </div>
    </form>
 


</div>