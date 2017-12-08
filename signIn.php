<?php 

session_start();

?>
<?php 
require_once 'db/db_init.php' ; 
include 'includes/head.php'; 
include 'includes/navigation.php';

?>
<link rel="stylesheet" href="css/signin.css">


<div class="row">
    <div class="col-sm-4">
        <h3>Contact Us/Sign-Up</h3>
        <form role="form">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="name" class="form-control" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email Address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>    
    </div>
    <div class="col-sm-4">
    </div>

    <div class="col-sm-4">   
        <form role="form">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="name" class="form-control" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email Address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>    

    </div> 
</div>


<?php include 'includes/footer.php'; ?>
<?php include 'includes/scrollbarHome.php'; ?>

</body>
</html>



