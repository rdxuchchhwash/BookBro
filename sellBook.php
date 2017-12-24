<?php 

require_once 'db/db_init.php' ; 
include 'includes/head.php'; 
include 'includes/navigation.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<link rel="stylesheet" href="css/sellBook.css">

<script>
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }

    function showCart() {
        var xhttp = new XMLHttpRequest();
        var r;
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                r = this.responseText;
                var str1 = "CART(";
                var str2 = ")";
                r = str1.concat(r,str2);
                document.getElementById('cartButton').innerText = r;   

            }
        };
        xhttp.open("GET", "noOfCartProducts.php?", true);
        xhttp.send(); 

    }

</script>

<script>
    showCart(); 
</script>

<script>
    function validate(){
        var flag= true;
        var name = document.getElementById("name");
        var desc = document.getElementById("desc");
        var quan = document.getElementById("quan");
        var price = document.getElementById("price");
        var lang = document.getElementById("lang");
        var country = document.getElementById("country");
        
        
        if(name.value.length==0){

            alert("Insert Book Name");
            name.style.border= "solid 2px red";
            name.focus();

            flag=false;
        }


        if(desc.value.length==0){

            alert("Please write a small description");
            desc.style.border= "solid 2px red";
            desc.focus();

            flag=false;
        }

        if(lang.value.length==0){

            alert("Enter Book's language");
            lang.style.border= "solid 2px red";
            lang.focus();

            flag=false;
        }

        if(quan.value.length==0){

            alert("Enter a valid quantity");
            quan.style.border= "solid 2px red";
            quan.focus();

            flag=false;
        }
        if(country.value.length==0){

            alert("Enter country name");
            country.style.border= "solid 2px red";
            country.focus();

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
        if(desc.value.length!=0){
            desc.style.border= "solid 2px steelblue";


        }
        if(price.value.length!=0){
            price.style.border= "solid 2px steelblue";


        } 
        if(quan.value.length!=0){
            quan.style.border= "solid 2px steelblue";


        } 
        if(lang.value.length!=0){
            lang.style.border= "solid 2px steelblue";


        }
        if(country.value.length!=0){
            country.style.border= "solid 2px steelblue";


        }
        if(quan.value==0){
            alert("Quantity can not be 0");
            quan.style.border= "solid 2px red";
            quan.focus();
            flag=false;
        }
        if(price.value==0){
            alert("Price can not be 0");
            price.style.border= "solid 2px red";
            price.focus();
            flag=false;
        } 
       
        if(quan.value<0){
            alert("Quantity  can not negative");
            quan.style.border= "solid 2px red";
            quan.focus();
            flag=false;
        }
        if(price.value<0){
            alert("Price can not Negative");
            price.style.border= "solid 2px red";
            price.focus();
            flag=false;
        }

        return flag;
        
        
        
    }
    
    
    
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#preview')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">SELL A BOOK</h1>
            <div class="account-wall">

                <form class="form-sellBook" action=sellBookSubmit.php method="POST" enctype="multipart/form-data">

                    <input type="text" name="bk_name" class="form-control" placeholder="Book Name" id="name">

                    <input type="text" name="description" class="form-control" placeholder="Enter the Description"  id="desc">

                    <input type="text" name="quantity" class="form-control" placeholder="Enter the Quantity" id="quan" onkeypress="return isNumber(event);">

                    <input type="text" name="price" class="form-control" placeholder="Enter the Price" id="price" onkeypress="return isNumber(event);">

                    <input type="text" name="country" class="form-control" placeholder="Country  Name" id="country" >

                    <input type="text" name="language" class="form-control" placeholder="Language" id="lang" >

                    <div class="form-group">
                        <label for="sel1">Category</label>
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

                    <br>

                    <div class="form-group">
                        <label for="sel1">Author</label>
                        <select name="author" class="form-control" id="author">
                            <?php
                            $sql = "select * from authors";
                            $catquery=mysqli_query($conn,$sql);
                            ?> <?php while($S=mysqli_fetch_assoc($catquery)):?>
                            <option><?php echo $S['author_name'] ;?></option>
                            <?php endwhile; ?>
                        </select>
                    </div> 

                    <br>

                    <label class="btn-bs-file btn btn-primary" id="bkUpBt">
                        Browse
                        <input type="file" name="bookCover"onchange="readURL(this);" />
                    </label>
                    <img id="preview" src="images/selectImage.jpg" alt="your image" />


                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="signup" value="submit" onclick="return validate();">
                        SELL BOOK</button>

                </form>
            </div>
        </div>


    </div>


</div>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scrollbarHome.php'; ?>

</body>
</html>


