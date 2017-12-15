<?php
$subtotal=0;
require_once 'db/db_init.php' ; 

include 'includes/head.php'; 
include 'includes/navigation.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

?>    


<link rel="stylesheet" href="css/productPreview.css">
<div id="headerWrapper">
    <div id="back-flower"></div>
    <div id="logotext"></div>
    <div id="fore-flower"></div>
</div>

<!--Ajax CART START -->
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

<!--Ajax CART END -->

<script>
    showCart(); 
</script>
<div class="container">
    <div class="row">

        <legend id=specs>ORDER DETAILS</legend>
        <div class="container">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>BOOK NAME</th>
                        <th>QUANTITY</th>
                        <th class="text-center">PRICE</th>
                        <th class="text-center">TOTAL</th>

                    </tr>


                    <?php
                    $sessID = session_id();
                    $sql = "select * from books b , tempcart c where b.id=c.book_id and session_id='$sessID'";


                    $showCarts=mysqli_query($conn,$sql);


                    while($S=mysqli_fetch_assoc($showCarts)):
                    $total=$S["book_qty"]*$S["price"];
                    $book_id=$S["id"];

                    ?> 
                    <tr>
                        <td class="col-sm-8 col-md-8">
                            <div class="media">
                                <a class="thumbnail pull-left" href="#" id="odpicr"> <img class="media-object" id="odpicimg" src="<?php echo $S["img_path"]; ?>" style="width: 80px; height: 100px;"> </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><?php echo $S["bk_name"]; ?></h4>
                                    <h5 class="media-heading" style="font-family:initial;"> by <?php echo $S["author"]; ?></h5>

                                    <span style="font-family:initial;">Available Quantity:<?php echo $S["quantity"]; ?> </span><br>
                                    <span style="font-family:initial;">Status: </span><span class="text-success"><strong>
                                    <?php if($S["quantity"]>0)
                                    echo "In Stock";
                                    else
                                        echo "Out Of Stock";
                                    ?>
                                    </strong></span><br>
                                </div>
                            </div>
                        </td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                            <form action="update_qty.php" method="post">
                                <input type="text" class="form-control" name="bk_qty" value="<?php $availQty=$S["quantity"];
                                       $orderQty=$S["book_qty"];
                                       if($availQty>$orderQty){
                                           echo $orderQty;
                                       }
                                       else{  echo $availQty;
                                           }
                                       ?>">
                                <input type="hidden" name="availqty" value="<?php echo $S["quantity"]; ?>" />
                                <button type="submit" class="btn btn-primary btn-sm" id="btnUpdate" name="book_id" value ="<?php echo $book_id; ?>">UPDATE</button> <span id="txtHint"></span>
                            </form>

                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><?php echo $S["price"]; ?></strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><?php echo $total; ?></strong></td>
                        <td class="col-sm-1 col-md-1">
                            <button type="button" class="btn btn-danger" onClick="document.location.href='removeFromCart.php?cart_id=<?php echo $book_id; ?>'">
                                <span class="glyphicon glyphicon-remove"></span> Remove
                            </button>
                        </td>

                    </tr>

                    <?php $subtotal+=$total; ?>
                    <?php endwhile; ?>

                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>SUBTOTAL</h5></td>
                        <td class="text-right"><h5><strong>BDT <?php echo $subtotal; ?></strong></h5></td>
                    </tr>	

                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>SHIPPING COST</h5></td>
                        <td class="text-right"><h5><strong>BDT 50</strong></h5></td>
                    </tr>	

                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>TOTAL</h3></td>
                        <td class="text-right"><h3><strong>BDT <?php echo $subtotal+50; ?></strong></h3></td>
                    </tr>

                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                            <button type="button" class="btn btn-default" onClick="document.location.href='home.php'">
                                <span class="glyphicon glyphicon-shopping-cart" ></span> Continue Shopping
                            </button>
                        </td>
                        <td>

                            <button type="button" class="btn btn-success" onClick="document.location.href='checkout.php?'">
                                CHECKOUT <span class="glyphicon glyphicon-play"></span>
                            </button>
                        </td>
                    </tr>
                </thead>


            </table>
        </div>

    </div>
</div>        

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scrollbarHome.php'; ?>

</body>
</html>