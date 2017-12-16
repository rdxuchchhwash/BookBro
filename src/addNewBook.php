<?php

include 'admin_index.php';


?>
<div class="new">

    <form action="addNewBookQuery.php" enctype="multipart/form-data" method="POST">
        <div class="first_block">
            <h2>Add Book</h2>
            <hr>
            <p>Book Name</p>
            <input type="text" placeholder="Book Name" name="bk_name" >

            <p>Category</p>
            <div class="form-group">
                <select name="category" class="form-control" id="category">
                    <?php
                    $sql = "select * from category";
                    $catquery=mysqli_query($conn,$sql);
                    ?> 
                    <?php while($S=mysqli_fetch_assoc($catquery)):?>

                    <option><?php echo $S['category_name'] ;?></option>

                    <?php endwhile; ?>

                </select>
            </div> 
            <p>Author</p>
            <div class="form-group">
                <select name="author" class="form-control" id="author">
                    <?php
                    $sql = "select * from authors";
                    $catquery=mysqli_query($conn,$sql);
                    ?> <?php while($S=mysqli_fetch_assoc($catquery)):?>
                    <option><?php echo $S['author_name'] ;?></option>
                    <?php endwhile; ?>
                </select>
            </div> 
            <p>Description</p>
            <textarea placeholder="Write a small description about the book" name="description" ></textarea><br>
            <p>Language</p>
            <input type="text" placeholder="Language" name="language" >
            <p>Country</p>
            <input type="text" placeholder="Country" name="country" >



        </div>
        <div class="second_block">

            <input type="file" name="bookCover"onchange="readURL(this);" />
            <img id="preview" src="http://placehold.it/180" alt="your image" />
            <script>
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#preview')
                                .attr('src', e.target.result);
                        };

                        reader.readAsDataURL(input.files[0]);
                    }
                }</script>


            <!-- Select image to upload : <input type="file" name="fileToUpload">
<input type="submit" value="Upload File" name="submit">
<br>
<img src="index.jpg" alt=Picture style="width:150height:100";>-->
            <p>Quantity</p>
            <input type="number" min="1" placeholder="Quantity" name="quantity" >
            <p>Price</p>
            <input type="number" min="1" placeholder="Price" name="price" >
            <input type="submit" value="Submit" >




        </div>
    </form>



</div>
