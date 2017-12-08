<?php 
require_once 'db/db_init.php' ; 

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
            <small style="color:#337ab7">( <?php echo $viewCount; ?> views)</small></h5>

        <!-- Price -->
        <h6 class="title-price"><small>PRICE</small></h6>
        <h3 style="margin-top:0px;">BDT <?php echo $S["price"]; ?></h3>
        
        <!-- Avaialble Quantity -->
        <h6 class="title-quantity"><small>AVAILABLE QUANTITY</small></h6>
        <h3 style="margin-top:0px;"> <?php echo $S["quantity"]; ?></h3>
        
        <!-- Details Part-->

        <div class="section" style="padding-bottom:20px;">
            <h6 class="title-attr"><small>QUANTITY</small></h6>                    
            <div>
                <div class="btn-minus"><span class="glyphicon glyphicon-minus"></span></div>
                
                <input value="1" />
                <div class="btn-plus"><span class="glyphicon glyphicon-plus"></span></div>
            </div>
        </div>                

        <!--  -->
        <div class="section" style="padding-bottom:20px;">
            <button class="btn btn-success"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>ADD TO CART</button>

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

            </tbody>
        </table>
    </div>

</div>
</div>        

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scrollbarHome.php'; ?>

</body>
</html>






