<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if( !isset($_SESSION["login_status"]) ){
    $_SESSION["login_status"]="reset";
    
}
?>
<?php 
require_once 'db/db_init.php' ; 
include 'includes/head.php'; 
include 'includes/navigation.php';

?>
<link rel="stylesheet" href="css/signin.css">

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
    
     function validate(){
        var name= document.getElementById('name');
        var pass= document.getElementById('pass');
        var flag=true;
        if(name.value.length==0|| pass.value.length==0){
            if(name.value.length==0){
                alert("Insert Email Address");
                name.style.border= "solid 2px red";
                name.focus();

            }
            if(pass.value.length==0){
                alert("Insert Password!");

                pass.style.border= "solid 2px red";
                pass.focus();
            }
            flag=false;
        }
        if(name.value.length!=0){
            name.style.border= "solid 2px steelblue";


        }
        if(pass.value.length!=0){
            pass.style.border= "solid 2px steelblue";


        }
        return flag;
     }


</script>

<script>
    showCart(); 
</script>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">SIGN IN</h1>
            <div class="account-wall">
                <?php //print_r($GLOBALS); ?>
                <form class="form-signin" action="signinss.php" method="POST">
                    <input type="text" name="email" class="form-control" placeholder="Email" id="name">
                    <input type="password" name="pass" class="form-control" placeholder="Password" id="pass">
                    <button class="btn btn-lg btn-primary btn-block" type="submit" onclick="return validate();">
                        Sign in</button>
                    <?php
                    if($_SESSION["login_status"]== "failed")
                    {   echo '
                        <script>alert("Invalid Username/Password. Please try again!");</script>';
                        $_SESSION["login_status"]="reset";
                    }
                    
                    else if($_SESSION["login_status"]=="continueToCheckout")
                    {
                        echo '
                        <script>alert("Please Login To Continue");</script>';
                        $_SESSION["login_status"]="reset";
                    }
                    ?>
                    <label class="checkbox pull-left">
                        <!--remember me
<input type="checkbox" value="remember-me">
Remember me -->
                    </label>
                    <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
            </div>
            <a href="/BookBro/signup.php" class="text-center new-account">CREATE AN ACCOUNT </a>
        </div>


    </div>


</div>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scrollbarHome.php'; ?>

</body>
</html>



