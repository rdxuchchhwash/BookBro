<?php
require_once '../db/db_init.php';
include 'admin_index.php';
?>




<div class="new">

    <form action="shipmentStatQuery.php" method="post">
        <div class="first_block">

            <h2>SHIPMENT STATUS </h2>
            <hr>
           <p>Shipment ID</p>
                   <div class="form-group">
                        <select name="shipID" class="form-control">
                            <?php
                            $sql = "select * from shipment";
                            $catquery=mysqli_query($conn,$sql);
                            ?> 
                            <?php while($S=mysqli_fetch_assoc($catquery)):?>
                           
                            <option><?php echo $S['id'] ;?></option>
                            
                            <?php endwhile; ?>

                        </select>
                    </div> 


            <p>Shipment Status</p>
            <select name="status" class="form-control" >
                <option>PENDING</option>
                <option>APPROVED</option>
                <option>DECLINE</option>
            </select>

            <input type="submit" value="Update" style="background-color:#08ad19">
        </div>
    </form>



</div>
