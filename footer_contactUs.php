<?php 
require_once 'db/db_init.php' ; 
include '/includes/head.php'; 
include '/includes/navigation.php';
?>

<link rel="stylesheet" href="css/footer.css">

<div id="headerWrapper">
    <div id="back-flower"></div>
    <div id="logotext"></div>
    <div id="fore-flower"></div>
</div>

<h2 style="text-align:center">Contact us<hr></h2>

<p>Welcome to BookBro.com. BookBro.com provides website features and other products and services to you when you visit or shop at BookBro.com.

    By using Rokomari Services, you agree to these conditions. Please read them carefully.

    By subscribing to or using any of our services you agree that you have read, understood and are bound by the Terms, regardless of how you subscribe to or use the services.

    In these Terms, references to "you", "User" shall mean the user end, "Service Providers" mean independent third party service providers, and "we", "us" and "our" shall mean Onnorokom Web Services8Limited, its franchisor, affiliates and partners.</p>



<div align="center">
    <table >
        <tr>
            <input name="name" id="name" placeholder="Name..." value="" validation="required" type="text" size="50">
            <br /><br />

            <input name="email" id="email"  placeholder="Email..." validation="email" value="" type="text"
            size="50"><br /><br />
            
            
            <textarea cols="48" rows="5" name="message" id="message" class="message" placeholder="Message..." validation="required" ></textarea><br /><br />
            
            <input type="submit"  class="btn btn-info"  value="Send" size="25">
            
        </tr>
    </table>
</div>


<?php include 'includes/footer.php'; ?>
<?php include 'includes/scrollbarHome.php'; ?>

</body>
</html>



