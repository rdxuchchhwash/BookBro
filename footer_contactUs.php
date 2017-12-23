<?php 
require_once 'db/db_init.php' ; 
include 'includes/head.php'; 
include 'includes/navigation.php';

?>

<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="../BookBro/adminCss/style.css">

<div id="headerWrapper">
    <div id="back-flower"></div>
    <div id="logotext"></div>
    <div id="fore-flower"></div>
</div>

<script type="text/javascript">

    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
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
        var flag=true;
        var name=document.getElementById("name");
        var email=document.getElementById("email");
        var no=document.getElementById("no");

        var msg=document.getElementById("message");

        if(name.value.length==0){
            alert("Insert Name");
            name.style.border= "solid 2px red";
            name.focus();
            flag=false;
        }
        if(email.value.length==0){
            alert("Insert Email");
            email.style.border= "solid 2px red";
            email.focus();
            flag=false;
        }
        if(no.value.length==0){
            alert("Insert Mobile No.");
            no.style.border= "solid 2px red";
            no.focus();
            flag=false;
        }
        if(msg.value.length==0){
            alert("Insert Your Message");
            msg.style.border= "solid 2px red";
            msg.focus();
            flag=false;
        }
        if(name.value.length!=0){
            name.style.border= "solid 2px steelblue";}
        if(email.value.length!=0){
            email.style.border= "solid 2px steelblue";}
        if(no.value.length!=0){
            no.style.border= "solid 2px steelblue";}
        if(msg.value.length!=0){
            msg.style.border= "solid 2px steelblue";}
        return flag;

    }


</script>
<h2 style="text-align:center">Contact us<hr></h2>

<p>Welcome to BookBro.com. BookBro.com provides website features and other products and services to you when you visit or shop at BookBro.com.

    By using Rokomari Services, you agree to these conditions. Please read them carefully.

    By subscribing to or using any of our services you agree that you have read, understood and are bound by the Terms, regardless of how you subscribe to or use the services.

    In these Terms, references to "you", "User" shall mean the user end, "Service Providers" mean independent third party service providers, and "we", "us" and "our" shall mean Onnorokom Web Services8Limited, its franchisor, affiliates and partners.</p>



<div align="center" class="new">
    <table >
        <tr>
            <form class="form-report" action=submitReport.php method="POST">
                <input name="name" id="name" placeholder="Name..." value="" validation="required" type="text" size="50">
               

                <input name="email" id="email"  placeholder="Email..." validation="email" value="" type="text"
                       size="50">

                <input name="mobileNo" id="no"  placeholder="Mobile Number..." validation="mobileNo" value="" type="text" onInput="checkLength(11,this);"  onkeypress="return isNumber(event)"
                       size="50">


                <textarea cols="48" rows="5" name="message" id="message" class="message" placeholder="Message..." validation="required" ></textarea>

                <input type="submit"  class="btn btn-info" onclick="return validate();"  value="Send" size="25">
            </form>

        </tr>
    </table>
</div>


<?php include 'includes/footer.php'; ?>
<?php include 'includes/scrollbarHome.php'; ?>

</body>
</html>



