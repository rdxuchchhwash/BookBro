<?php 
require_once 'db/db_init.php' ; 
include 'includes/head.php'; 
include 'includes/navigation.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

?>
<link rel="stylesheet" href="css/signup.css">


<?php
$email = $_SESSION['email'];
$sql = "select * from user_info where email='$email'";
$showInfo=mysqli_query($conn,$sql);
?> 
<?php $S=mysqli_fetch_assoc($showInfo);

?>

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
            <h1 class="text-center login-title">MY PROFILE</h1>
            <div class="account-wall">

                <form class="form-signup" action=myprofileUpdate.php method="POST">
                    <input type="text" name="fname" class="form-control" placeholder="Full Name" required autofocus  value="<?php echo htmlentities($S['full_name']); ?>">
                    <input type="text" name="email" class="form-control" placeholder="Email" required autofocus readonly value="<?php echo htmlentities($S['email']); ?>">

                    <input type="text" name="mbNo" class="form-control" placeholder="Mobile No" required autofocus value="<?php echo htmlentities($S['mobile_no']); ?>">

                    <input type="password" name="pass" class="form-control" placeholder="New Password" required >

                    <input type="password" name="confirmpass" class="form-control" placeholder="Confirm New Password" required>

                    <input type="date" name="date" class="form-control" value="<?php echo htmlentities($S['dob']); ?>">

                    <input type="text" name="address" class="form-control" placeholder="Address" required autofocus value="<?php echo htmlentities($S['address']); ?>">

                    <div class="buying-selling-group" id="buying-selling-group" data-toggle="buttons" >
                        <input type="radio" name="gender" value="MALE" autocomplete="off" <?php if($S['gender']=="MALE"){echo " checked";}?>>  MALE
                        <input type="radio" name="gender" value="FEMALE" autocomplete="off" <?php if($S['gender']=="FEMALE"){echo " checked";}?>>  FEMALE
                    </div>

                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="signup" value="submit">
                        UPDATE PROFILE</button>  
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scrollbarHome.php'; ?>

</body>
</html>



