<?php
require_once '../db/db_init.php';
include 'admin_index.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<head><title>Remove Category | BookBro</title></head>

<div class="new">

    <form action="removeCategoryQuery.php"  method="post">
       <div class="first_block">
           
        <h2>Remove Category</h2>
        <hr>
          <p>Category ID</p>
                   <div class="form-group">
                        <select name="catID" class="form-control" id="category">
                            <?php
                            $sql = "select * from category";
                            $catquery=mysqli_query($conn,$sql);
                            ?> 
                            <?php while($S=mysqli_fetch_assoc($catquery)):?>
                           
                            <option><?php echo $S['id'] ;?></option>
                            
                            <?php endwhile; ?>

                        </select>
                    </div> 
           
     
       
        <input type="submit" onclick="return validate()" value="Remove" style="background-color:#cc4128">
       



    </div>
    </form>
 


</div>