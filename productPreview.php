<?php 
require_once 'db/db_init.php' ; 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include 'includes/head.php'; 
include 'includes/navigation.php';

?>

<?php 
$bookID = $_GET['bk_id'];
?>


<link rel="stylesheet" href="css/productPreview.css">
<div id="headerWrapper">
    <div id="back-flower"></div>
    <div id="logotext"></div>
    <div id="fore-flower"></div>
</div>

<!--Ajax CART START -->
<script>
    function addProduct(str) {

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //alert(this.response);
                showCart();
            }
        };
        var avaqty = document.getElementById("availQty").innerText;
        var q=document.getElementById("txtQty").value; 
        if(avaqty == 0)
        {
            alert("This Book Is Out Of Stock");
            return;
        }

        else if(q>avaqty){
            alert("Given Quantity Must Be Less Or Equal Than Available Quantity");
            return;
        }

        xmlhttp.open("GET", "productPreviewAdd.php?bk_id=" + str + "&qty="+ q, true);
        xmlhttp.send();

        // document.getElementById('cartButton').innerText = str;
    }
</script>

<script>
    function addWishlist(str) {

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var v=this.responseText;
                if(v=="notLoggedIn")
                {
                    alert("For Adding It To Wishlist You Have To Login");
                }
                else if(v=="Exist")
                {
                    alert("This Book Is Already In Wishlist");

                }
                else{
                    alert("Book Added To Wishlist");
                }
            }
        };
        xmlhttp.open("GET", "addToWishlist.php?bk_id=" + str , true);
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

<?php
$sql = "select * from books where id=$bookID";
$detailquery=mysqli_query($conn,$sql);
?> 
<?php $S=mysqli_fetch_assoc($detailquery);
$viewCount=$S["no_of_views"];
$viewCount++;
$sql = "update books set no_of_views='$viewCount' where id='$bookID'";
mysqli_query($conn,$sql);

?>


<div class="container">
    <div class="row">
        <div class="col-xs-4 item-photo">
            <img style="max-width:100%;" src='<?php echo $S["img_path"]; ?>' height="300" width="200"/>
        </div>
        <div class="col-xs-5" style="border:0px solid gray">
            <!--  -->
            <h3><?php echo $S["bk_name"]; ?></h3>    
            <small style="color:#337ab7">( <?php echo $viewCount; ?> views)</small>

            <!-- Price -->
            <h6 class="title-price"><small>PRICE</small></h6>
            <h3 style="margin-top:0px;">BDT <?php echo $S["price"]; ?></h3>

            <!-- Avaialble Quantity -->
            <h6 class="title-quantity"><small>AVAILABLE QUANTITY</small></h6>
            <h3 style="margin-top:0px;"> <span id="availQty"><?php echo $S["quantity"]; ?></span></h3>

            <!-- Details Part-->

            <div class="section" style="padding-bottom:20px;">
                <input type="text" name="qty" id="txtQty" class="form-control" value="1" >
            </div>                

            <!--  -->
            <div class="section" style="padding-bottom:20px;">
                <button class="btn btn-success" onclick="addProduct(<?php echo"'$bookID'"; ?>)"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>ADD TO CART</button>
            </div>  

            <div class="section" style="padding-bottom:20px;">
                <button class="btn btn-info" id="wish" onclick="addWishlist(<?php echo"'$bookID'"; ?>)"><span style="margin-right:20px" aria-hidden="true"></span>ADD TO WISHLIST</button><br>


            </div>   


        </div>                              

        <legend id=des>DESCRIPTION</legend>
        <p><?php echo $S["description"]; ?>
        </p>
        <legend id=specs>SPECIFICATIONS</legend>
        <div class="container">

            <table class="table table-striped">

                <tbody>


                    <tr>
                        <th>Title</th>
                        <td><?php echo $S["bk_name"]; ?></td>

                    </tr>
                    <tr>
                        <th>Author</th>
                        <td><?php echo $S["author"]; ?></td>


                    </tr>

                    <tr>
                        <th>Country</th>
                        <td><?php echo $S["country"]; ?></td>

                    </tr>
                    <tr>
                        <th>Language</th>
                        <td><?php echo $S["language"]; ?></td>

                    </tr>
                    <span id=sellContact><?php if($S["book_type"]=="OLD"){
    $sql3 = "select * from oldbookstat where old_book_id=$bookID";
    $detailquery=mysqli_query($conn,$sql3);
    $seller=mysqli_fetch_assoc($detailquery);
    $sellername=$seller['seller_name'];
    $sellerContact=$seller['seller_contact'];
    echo "<tr>";
    echo "<th>Seller Name</th> <td>$sellername</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Seller Contact</th> <td>$sellerContact</td> ";
    echo "</tr>";
}
                        ?>
                    </span>
                </tbody>
            </table>
        </div>

        <form action="writeReview.php" method="POST">
            <?php if($_SESSION['login_status']=="success"){echo "
            <div class=\"section\" style=\"padding-bottom:20px;\">
                <input type=\"text\" name=\"review\" id=\"review\" class=\"form-control\"  >
            </div>  
            <input type=\"hidden\" name=\"book_id\" value=\"$bookID\"/>";}
            ?>
            <?php if($_SESSION['login_status']=="success"){echo "
            <div class=\"section\" style=\"padding-bottom:20px;\">
                <button class=\"btn btn-info\" id=\"wish\" type=\"submit\"><span style=\"margin-right:20px\" aria-hidden=\"true\"></span>Write Review</button>
            </div>  ";}
            ?>
        </form>

        <h3>ALL REVIEWS</h3>

        <table class="table table-striped">

            <tbody>
                <?php
                $sql = "select * from review where book_id='$bookID' and status=1";
                $query=mysqli_query($conn,$sql);
                ?> <?php while($reviews=mysqli_fetch_assoc($query)):?>

                <tr>
                    <th><?php echo $reviews["username"]; ?></th>
                    <td><?php echo $reviews["review_des"]; ?></td>
                </tr>

                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>        

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scrollbarHome.php'; ?>

</body>
</html>






