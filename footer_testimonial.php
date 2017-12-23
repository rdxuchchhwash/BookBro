
<?php 
require_once 'db/db_init.php' ; 
include 'includes/head.php'; 
include 'includes/navigation.php';

?>
<link rel="stylesheet" href="css/footer.css">

<div id="headerWrapper">
    <div id="back-flower"></div>
    <div id="logotext"></div>
    <div id="fore-flower"></div>
</div>

<h2 style="text-align:center">Testimonial<hr></h2>
<h3 style="text-align:center">Tell us what you feel about our service<hr></h3>

<div align="center">
<textarea name="userComment" id="userComment" cols="50" rows="4" placeholder="Say about us..." validation="required"></textarea><br /><br />
    <input type="submit" value="Submit">
</div>




<?php include 'includes/footer.php'; ?>
<?php include 'includes/scrollbarHome.php'; ?>

</body>
</html>



