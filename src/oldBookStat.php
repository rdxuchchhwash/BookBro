
<?php
require_once '../db/db_init.php';
include 'admin_index.php';
?>

<head><title>Old Book Status | BookBro</title></head>


<div class="new">

    <form action="oldBookStatQuery.php" method="post">
        <div class="first_block">

            <h2>OLD BOOK STATUS </h2>
            <hr>
            <p>Book ID</p>
            <select name="bookID" class="form-control" id="category">
                <?php
                $sql = "select * from oldbookstat";
                $catquery=mysqli_query($conn,$sql);
                ?> 
                <?php while($S=mysqli_fetch_assoc($catquery)):?>

                <option><?php echo $S['old_book_id'] ;?></option>

                <?php endwhile; ?>

            </select>

            
            <br><br>


            <p>Book Status</p>
            <select name="status" class="form-control" id="author">
                <option>PENDING</option>
                <option>APPROVED</option>
                <option>DECLINE</option>
            </select>

            <input type="submit" name="update" value="Update" style="background-color:#08ad19">
        </div>
    </form>



</div>
