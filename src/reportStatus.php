
<?php
require_once '../db/db_init.php';
include 'admin_index.php';
?>

<head><title>Report Status | BookBro</title></head>


<div class="new">

    <form action="reportStatusQuery.php" method="post">
        <div class="first_block">

            <h2>REPORT STATUS </h2>
            <hr>
            <p>REPORT ID</p>
            <select name="reportID" class="form-control" >
                <?php
                $sql = "select * from reports";
                $catquery=mysqli_query($conn,$sql);
                ?> 
                <?php while($S=mysqli_fetch_assoc($catquery)):?>

                <option><?php echo $S['id'] ;?></option>

                <?php endwhile; ?>

            </select>

            
            <br><br>


            <p>Book Status</p>
            <select name="status" class="form-control" >
                <option>PENDING</option>
                <option>APPROVED</option>
                <option>DECLINE</option>
            </select>

            <input type="submit" name="update" value="Update" style="background-color:#08ad19">
        </div>
    </form>



</div>
