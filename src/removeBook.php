<?php
require_once '../db/db_init.php';
include 'admin_index.php'


?>
<head><title>Remove Admin | BookBro</title></head>
<div class="new">

    <form action="removeBookQuery.php" method="post">
       <div class="first_block">
        <h2>Remove Book</h2>
        <hr>
        <p>Book ID</p>
         <select name="bookID" class="form-control">
                    <?php
                    $sql = "select * from books";
                    $catquery=mysqli_query($conn,$sql);
                    ?> 
                    <?php while($S=mysqli_fetch_assoc($catquery)):?>

                    <option><?php echo $S['id'] ;?></option>

                    <?php endwhile; ?>

                </select>

           <br><br>
           
        <input type="submit" value="Remove" style="background-color:#cc4128" >

    </div>
        
             
        
       <!-- Select image to upload : <input type="file" name="fileToUpload">
		<input type="submit" value="Upload File" name="submit">
        <br>
        <img src="index.jpg" alt=Picture style="width:150height:100";>-->
        <br>
        <br>
        
        



    </div>
    </form>
 


</div>