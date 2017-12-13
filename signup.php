<?php 
session_start();
require_once 'db/db_init.php' ; 
include 'includes/head.php'; 
include 'includes/navigation.php';
?>

<link rel="stylesheet" href="css/signup.css">
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

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">SIGN UP</h1>
            <div class="account-wall">

                <form class="form-signup" action=signupValidate.php method="POST">
                    <input type="text" name="fname" class="form-control" placeholder="Full Name" required autofocus>
                    <input type="text" name="email" class="form-control" placeholder="Email" required autofocus>

                    <input type="text" name="mbNo" class="form-control" placeholder="Mobile No" required autofocus>

                    <input type="password" name="pass" class="form-control" placeholder="Password" required>
                    <input type="password" name="confirmpass" class="form-control" placeholder="Retype Password" required>
                    <input type="date" name="date" class="form-control">

                    <input type="text" name="address" class="form-control" placeholder="Address" required autofocus>

                    <div class="buying-selling-group" id="buying-selling-group" data-toggle="buttons">
                        <input type="radio" name="gender" value="MALE" autocomplete="off">  MALE
                        <input type="radio" name="gender" value="FEMALE" autocomplete="off">  FEMALE
                    </div>

                    <input type="checkbox" name=checkbx value=Agree>
                    I agree all your <a href="/BookBro/footer_policy.php">Terms of
                    Services</a>
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="signup" value="submit">
                        SIGN UP</button>
                    <label class="checkbox pull-left">
                        <!--remember me
<input type="checkbox" value="remember-me">
Remember me -->
                    </label>
                    <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                    <?php 
                    if($_SESSION["SignUpStatus"]=="Complete")
                    {
                     echo"<center><p>Sign Up Completed Succesfully</p></center>";
                    }
                        $_SESSION["SignUpStatus"]="incomplete";
                    ?>
                </form>
            </div>
        </div>


    </div>


</div>
<?php include 'includes/footer.php'; ?>
<?php include 'includes/scrollbarHome.php'; ?>

</body>
</html>



