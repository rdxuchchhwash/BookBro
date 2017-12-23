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
    function checkLength(len,box){
        var fieldLength = box.value.length;
        if(fieldLength <= len){
            return true;
        }
        else
        {
            var str = box.value;
            str = str.substring(0, str.length - 1);
            box.value = str;
        }
    }


    function validate(){
        var flag = true;
        var name  = document.getElementById("name");
        var no  = document.getElementById("no");
        var mail  = document.getElementById("mail");
        var address  = document.getElementById("address");
        var pass  = document.getElementById("pass");
        var rpass  = document.getElementById("rpass");
        var check = document.getElementById("chk");
        
        
        
        if(name.value.length==0){
            alert("Insert Name");
            name.style.border= "solid 2px red";
            name.focus();
            flag= false;
        }
        if(no.value.length==0){
            alert("Insert Mobile No.");
            no.style.border= "solid 2px red";
            no.focus();
            flag= false;
        }
        if(address.value.length==0){
            alert("Insert Address");
            address.style.border= "solid 2px red";
            address.focus();
            flag= false;
        }
        if(pass.value.length==0){
            alert("Insert Password");
            pass.style.border= "solid 2px red";
            pass.focus();
            flag= false;
        }
        if(mail.value.length==0){
            alert("Insert Mail Address");
            mail.style.border= "solid 2px red";
            mail.focus();
            flag= false;
        }
        if(rpass.value.length==0){
            alert("Retype Password");
            rpass.style.border= "solid 2px red";
            rpass.focus();
            flag= false;
        }
        if(name.value.length!=0){
            name.style.border= "solid 2px steelblue";


        }
        if(mail.value.length!=0){
            mail.style.border= "solid 2px steelblue";


        }
        if(no.value.length!=0){
            no.style.border= "solid 2px steelblue";


        }
        if(pass.value.length!=0){
            pass.style.border= "solid 2px steelblue";


        }
        if(rpass.value.length!=0){
            rpass.style.border= "solid 2px steelblue";


        }
        if(address.value.length!=0){
            address.style.border= "solid 2px steelblue";


        }

        if(flag==true){
            if(check.checked){
                return flag;
            }
            else{
                alert("Check the terms and Condition")
            }
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
            <h1 class="text-center login-title">SIGN UP</h1>
            <div class="account-wall">

                <form class="form-signup" action=signupValidate.php method="POST">
                    <input type="text" name="fname" class="form-control" placeholder="Full Name" id="name">
                    <input type="email" name="email" class="form-control" placeholder="Email" id="mail">

                    <input type="text" name="mbNo" class="form-control" placeholder="Mobile No" id="no" oninput="checkLength(11,this)">

                    <input type="password" name="pass" class="form-control" placeholder="Password" id="pass">
                    <input type="password" name="confirmpass" class="form-control" placeholder="Retype Password" id="rpass">
                    <input type="date" name="date" class="form-control">

                    <input type="text" name="address" class="form-control" placeholder="Address" id="address">

                    <div class="buying-selling-group" id="buying-selling-group" data-toggle="buttons">
                        <input type="radio" name="gender" value="MALE" autocomplete="off">  MALE
                        <input type="radio" name="gender" value="FEMALE" autocomplete="off">  FEMALE
                    </div>

                    <input type="checkbox" id="chk" name=checkbx value=Agree>
                    I agree all your <a href="/BookBro/footer_policy.php">Terms of
                    Services</a>
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="signup" value="submit" onclick="return validate();">
                        SIGN UP</button>
                    <label class="checkbox pull-left">
                        <!--remember me
<input type="checkbox" value="remember-me">
Remember me -->
                    </label>
                    <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                    <?php 
                    if (isset($_SESSION["SignUpStatus"])){
                        if($_SESSION["SignUpStatus"]=="Complete")
                        {
                            echo"<center><p>Sign Up Completed Succesfully</p></center>";
                        }
                        $_SESSION["SignUpStatus"]="incomplete";
                    }
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



