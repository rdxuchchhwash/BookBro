<?php 
session_start();
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
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">SIGN IN</h1>
            <div class="account-wall">

                <form class="form-signin" action="signinss.php" method="POST">
                    <input type="text" name="email" class="form-control" placeholder="Email" required autofocus>
                    <input type="password" name="pass" class="form-control" placeholder="Password" required>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                        Sign in</button>
                    <?php
                    if($_SESSION["login_status"]== "failed")
                    {   echo '
                        <script>alert("Invalid Username/Password. Please try again!");</script>';
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



