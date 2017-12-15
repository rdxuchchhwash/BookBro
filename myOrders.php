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
<?php $temp=0; $total=0; ?>

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


        <div class="container">

            <table class="table table-hover">
                <thead>
                    <tr><legend id=specs>MY ORDERS </legend></tr>
                    <div>
                        <?php
                        $show=0;//
                        $show1=0;//
                        $userID=$_SESSION["user_id"];
                        $sql = "SELECT * from shipment s, orderdetails od where s.order_id=od.order_no and s.customerID='$userID' ORDER BY order_no DESC";
                        $result=mysqli_query($conn,$sql);
                        while($details=mysqli_fetch_assoc($result)):
                        ?> 
                        
                        <tr>
                            <th>ORDER NO : <?php echo $details['order_id']; ?> </th>   
                            <th>ORDER STATUS</th>
                            <th>DATE</th>
                        </tr>
       
                        <?php
                            $mail=$_SESSION["email"];
                            $dts=$details['book_id'];


                            $sql = "SELECT * from books where id='$dts' ";
                            $S=mysqli_query($conn,$sql);
                            while($showinf=mysqli_fetch_assoc($S)):
                                $book_id=$showinf['id'];

                        ?>     
                        <tr>
                            <td>
                                <div class="media">
                                    <a class="thumbnail pull-left" href="#" id="odpicr"> <img class="media-object" id="odpicimg" src="<?php echo $showinf["img_path"]; ?>" style="width: 50px; height: 70px;"> </a>

                                    <h4 class="media-heading"><?php echo $showinf["bk_name"]; ?></h4>

                                    <h5 class="media-heading" style="font-family:initial;"> by <?php echo $showinf["author"]; ?></h5>

                                    <span style="font-family:initial;">Ordered Quantity:<?php echo $details["quantity"]; ?> </span><br>
                                    <span style="font-family:initial;">Price:<?php echo $details['book_price']?> </span>

                                </div>
                            </td>

                            <td><?php echo $details['status'] ; ?></td>
                            <td><?php echo $details['date'] ; ?> </td>
                        </tr>
                        <?php $temp= $details['quantity']*$details['book_price'] ; $total=$temp ;

                        ?>

                        <?php endwhile; ?>
                        
                        <?php if($show==$show1)
                            {echo '<tr>
                            <td></td>
                            <td><h5>TOTAL</h5></td>
                            <td class="text-left"><h5><strong>BDT ';
                             echo $total; 
                             echo "</strong></h5></td>
                             <td></td>
                             <td></td>
                        </tr>";
                            } ?>	
                        <?php endwhile; ?>
                    </div>


                </thead>



            </table>
        </div>

    </div>
</div>        

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scrollbarHome.php'; ?>

</body>
</html>