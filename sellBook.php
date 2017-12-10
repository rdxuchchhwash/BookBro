<?php 

require_once 'db/db_init.php' ; 
include 'includes/head.php'; 
include 'includes/navigation.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<link rel="stylesheet" href="css/sellBook.css">
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">SELL A BOOK</h1>
            <div class="account-wall">

                <form class="form-sellBook" action=signupValidate.php method="POST" enctype="multipart/form-data">
                    <input type="text" name="bk_name" class="form-control" placeholder="Full Name" required autofocus>

                    <input type="text" name="description" class="form-control" placeholder="Enter the Description" required>

                    <input type="text" name="quantity" class="form-control" placeholder="Enter the Quantity" required>

                    <input type="text" name="price" class="form-control" placeholder="Enter the Price">

                    <input type="text" name="country" class="form-control" placeholder="Country  Name" required autofocus>

                    <div class="btn-group" id="category"><a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">CATAGORY <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Option 1 </a></li>
                            <li><a href="#">Option 2 </a></li>
                            <li><a href="#">Option 3 </a></li>
                            <li><a href="#">Option 4 </a></li>
                        </ul>
                    </div>
                    <br>
                    <div class="btn-group" id="author"><a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">AUTHORS<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Option 1 </a></li>
                            <li><a href="#">Option 2 </a></li>
                            <li><a href="#">Option 3 </a></li>
                            <li><a href="#">Option 4 </a></li>
                        </ul>
                    </div>
                    <br>
                    <label class="btn-bs-file btn btn-primary" id="bkUpBt">
                        Browse
                        <input type="file" />
                    </label>
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="signup" value="submit">
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



