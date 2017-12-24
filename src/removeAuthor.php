<?php
require_once '../db/db_init.php';
include 'admin_index.php';

?>

<head><title>Remove Author | BookBro</title></head>

<div class="new">

    <form action="removeAuthorQuey.php"  method="post">
       <div class="first_block">
           
        <h2>Remove Author</h2>
        <hr>
          <p>Author ID</p>
                   <div class="form-group">
                        <select name="authorID" class="form-control" id="category">
                            <?php
                            $sql = "select * from authors";
                            $catquery=mysqli_query($conn,$sql);
                            ?> 
                            <?php while($S=mysqli_fetch_assoc($catquery)):?>
                           
                            <option><?php echo $S['id'] ;?></option>
                            
                            <?php endwhile; ?>

                        </select>
                    </div> 
           
     
       
        <input type="submit"  value="Remove" style="background-color:#cc4128">
       



    </div>
    </form>
 


</div>