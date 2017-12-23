<?php

    require_once '../db/db_init.php';
    include 'admin_index.php';

?>
<head><title>Add/Remove Featured Book | BookBro</title></head>


<div class="new">

    <form action="featureBookQuery.php"  method="post">
        <div class="first_block">
            <h2>Add/Remove Featured Books</h2>
            <hr>
            <p>Book ID</p>
            <div class="form-group">
                <select class="form-control" name="bookID">
                    <?php
                    $sql = "select * from books";
                    $catquery=mysqli_query($conn,$sql);
                    ?> 
                    <?php while($S=mysqli_fetch_assoc($catquery)):?>

                    <option><?php echo $S['id'] ;?></option>

                    <?php endwhile; ?>

                </select>
            </div> 
           
            <input type="submit" name="add" value="ADD" style="background-color:#08ad19" >
            <br><br>
            <p>Book ID</p>
            <div class="form-group">
                <select class="form-control" name="rbookID">
                    <?php
                    $sql = "select * from featured_books";
                    $catquery=mysqli_query($conn,$sql);
                    ?> 
                    <?php while($S=mysqli_fetch_assoc($catquery)):?>

                    <option><?php echo $S['id'] ;?></option>

                    <?php endwhile; ?>

                </select>
            </div> 
            
            <input type="submit" name="remove" value="REMOVE" style="background-color:#cc4128" >
            




        </div>
    </form>



</div>