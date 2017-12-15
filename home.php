<?php 
require_once 'db/db_init.php' ; 
include 'includes/head.php'; 
include 'includes/navigation.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
    session_regenerate_id(true); 
}

?>

<div id="headerWrapper">
    <div id="back-flower"></div>
    <div id="logotext"></div>
    <div id="fore-flower"></div>
</div>

<!--Ajax CART START -->
<script>
    function addProduct(str,qty) {

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                showCart();
            }
        };
     
        if(qty == 0)
            {
                alert("This Book Is Out Of Stock");
                return;
            }
        xmlhttp.open("GET", "addToCart.php?bk_id=" + str, true);
        xmlhttp.send();

        // document.getElementById('cartButton').innerText = str;
    }
</script>

<script>

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
<!--Ajax CART END -->


<!--Show Products-->
<div class="container-fluid">

    <div class="col-md-2"></div>

    <div class="col-md-8">
        <div class="row">
            <h2 class="text-center">Featured Books</h2>

            <?php
            $sql = "select * from books n, featured_books f where n.id=f.book_id";
            $catquery=mysqli_query($conn,$sql);
            ?> 

            <?php while($S=mysqli_fetch_assoc($catquery)):?>
            <div class="col-md-3">
                <h4><?php echo $S["bk_name"]; ?></h4>

                <img src="<?php echo $S["img_path"]; ?>" alt="<?php echo $S["bk_name"]; ?>" class="img-thumb " height="200" width="200"/>

                <p class="price"><span id=spnprice>Our Price : BDT <?php echo $S["price"]; ?></span></p>

                <span id="qtyavail"> Quantity Available : <?php echo $S["quantity"]; ?></span> <br>

                <?php $book_id=$S["book_id"]; ?>

                <button type="button" class="btn btn-info btn-xs " onClick="document.location.href='productPreview.php?bk_id=<?php echo "$book_id;" ?>'" >Details</button>

                <button type="button" id="demo" class="btn btn-info btn-xs" onclick="addProduct(<?php echo $book_id ?>,<?php echo $S["quantity"] ?>)">
                    <span class="glyphicon glyphicon-shopping-cart"></span> Add To Cart
                </button>
            </div>
            <?php endwhile; ?>

        </div>
    </div>

    <div class="col-md-2"></div>

</div>
<?php include 'includes/footer.php'; ?>
<?php include 'includes/scrollbarHome.php'; 

?>

</body>
</html>



