<?php
require_once '../db/db_init.php';
include 'admin_index.php';


?>
<head><title>Update Book | BookBro</title></head>


<script type="text/javascript">
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
    function checkLength(len,box){
        var fieldLength = box.value.length;
        if(fieldLength <= len){
            return true;
        }
        else
        {
            var str = box.value;
            str = str.substring(0, str.length - 1);
            box.value = str;
        }
    }




    function validate(){

        var flag=true;
        var id=document.getElementById('bID');
        var name= document.getElementById('bName'); 
        var description = document.getElementById('bDescription'); 
        var language = document.getElementById('bLanguage'); 
        var quantity = document.getElementById('bQuantity'); 
        var price = document.getElementById('bPrice'); 
        var country= document.getElementById('bCountry');

        if(id.value.length==0){

            alert("Insert Book ID");
            id.style.border= "solid 2px red";
            id.focus();

            flag=false;
        }

        if(name.value.length==0){

            alert("Insert Book Name");
            name.style.border= "solid 2px red";
            name.focus();

            flag=false;
        }



        if(description.value.length==0){

            alert("Please write a small description");
            description.style.border= "solid 2px red";
            description.focus();

            flag=false;
        }

        if(language.value.length==0){

            alert("Enter Book's language");
            language.style.border= "solid 2px red";
            language.focus();

            flag=false;
        }
        if(country.value.length==0){

            alert("Enter country name");
            country.style.border= "solid 2px red";
            country.focus();

            flag=false;
        }

        if(quantity.value.length==0){

            alert("Enter a valid quantity");
            quantity.style.border= "solid 2px red";
            quantity.focus();

            flag=false;
        }


        if(price.value.length==0){

            alert("Enter a valid price");
            price.style.border= "solid 2px red";
            price.focus();

            flag=false;
        }
        if(name.value.length!=0){
            name.style.border= "solid 2px steelblue";


        } 
        if(description.value.length!=0){
            description.style.border= "solid 2px steelblue";


        }
        if(price.value.length!=0){
            price.style.border= "solid 2px steelblue";


        } 
        if(quantity.value.length!=0){
            quantity.style.border= "solid 2px steelblue";


        } 
        if(language.value.length!=0){
            language.style.border= "solid 2px steelblue";


        }
        if(country.value.length!=0){
            country.style.border= "solid 2px steelblue";


        }
        if(id.value==0 || id.value<0){
            alert("ID can not be 0 or less");
            id.style.border= "solid 2px red";
            id.focus();
            flag=false;
        }
        if(quantity.value==0 || quantity.value<0){
            alert("Quantity can not be 0 or less");
            quantity.style.border= "solid 2px red";
            quantity.focus();
            flag=false;
        }
        if(price.value==0 || price.value<0){
            alert("Price can not be 0 or less");
            price.style.border= "solid 2px red";
            price.focus();
            flag=false;
        } 


        return flag;

    }
</script>

<div class="new">

    <form action="updateBookQuery.php" enctype="multipart/form-data" method="post">
        <div class="first_block">
            <h2>Update Book</h2>
            <hr>
            <p>Book ID</p>
            <input type="text" placeholder="Book ID" name="bookID" id="bID" onkeypress="return isNumber(event)" onInput="checkLength(6,this);">
            <p>Book Name</p>
            <input type="text" placeholder="Book Name" name="bname" id="bName">
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

            <textarea placeholder="Write a small description about the book" name="description" id="bDescription"></textarea><br>
            <p>Language</p>
            <input type="text" placeholder="Language" name="language" id="bLanguage">
            <p>Country</p>
            <input type="text" placeholder="Country" name="country" id="bCountry">



        </div>
        <div class="second_block">

            <input type="file" name="bookCover"onchange="readURL(this);" />
            <img id="preview" src="../images/180.jpg" alt="Preview image" />
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
            <input type="text"   placeholder="Quantity" name="quan" onkeypress="return isNumber(event)" onInput="checkLength(6,this);" id="bQuantity">
            <p>Price</p>
            <input type="text" placeholder="Price" name="price" onkeypress="return isNumber(event)" onInput="checkLength(6,this);" id="bPrice">
            <input type="submit" onclick="return validate();" value="Update" style="background-color:#08ad19">




        </div>
    </form>



</div>
