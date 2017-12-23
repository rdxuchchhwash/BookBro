<?php
require_once 'db/db_init.php' ; 

include 'includes/head.php'; 
include 'includes/navigation.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if ($_SESSION['login_status']!="success"){
    header("location:home.php");
    exit();
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

        <legend id=specs>MY REVIEWS </legend>
        <div class="container">

            <table class="table table-hover">
                <thead>

                    <tr>
                        <th>BOOK NAME</th>
                        <th>REVIEW</th>
                        <th></th>
                    </tr>
                    <?php
                    $mail=$_SESSION["email"];
                    $sql = "SELECT * from review r, books b where r.book_id=b.id and r.userMail='$mail' and r.status=1";

                    $showReviews=mysqli_query($conn,$sql);


                    while($S=mysqli_fetch_assoc($showReviews)):
                    $book_id=$S["book_id"];

                    ?>     
                    <tr>
                        <td>
                            <div class="media">
                                <a class="thumbnail pull-left" href="#" id="odpicr"> <img class="media-object" id="odpicimg" src="<?php echo $S["img_path"]; ?>" style="width: 80px; height: 100px;"> </a>

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
                        </td>
                        <td><?php echo $S["review_des"]; ?> </td>
                        <td class="col-sm-1 col-md-1">
                            <button type="button" class="btn btn-danger" onClick="document.location.href='removeReview.php?book_id=<?php echo $book_id; ?>'">
                                <span class="glyphicon glyphicon-remove"></span> Remove
                            </button>
                        </td>
                    </tr>
                    <?php endwhile; ?>



                </thead>


            </table>
        </div>

    </div>
</div>        

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scrollbarHome.php'; ?>

</body>
</html>