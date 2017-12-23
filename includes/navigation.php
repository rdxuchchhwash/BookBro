
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if( !isset($_SESSION["login_status"]) ){
    $_SESSION["login_status"]="reset";
}
$sql = "select * from category";
$catquery=mysqli_query($conn,$sql);

$sql = "select * from authors";
$authorquery=mysqli_query($conn,$sql);

?>

<script>
    $(document).ready(function(){
        $('#livesearch').keyup(function(){
            var query = $(this).val();
            if(query != '')
            {
                $.ajax({
                    url:"liveSearch.php",
                    method:"POST",
                    data:{query:query},
                    success:function(data)
                    {
                        $('#results').fadeIn();
                        $('#results').html(data);
                    }

                });
            }
        });

        $(document).on('click','li',function(){
            $('#livesearch').val($(this).text());
            $('#results').fadeOut();
        });

    });


</script>



<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <a href="home.php" class="navbar-brand">BookBro</a>

        <ul class="nav navbar-nav">
            <li><a href="home.php">HOME</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">CATEGORIES<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <?php while($S=mysqli_fetch_assoc($catquery)):?>
                    <?php $catName=$S["category_name"]; ?>
                    <?php echo "<li><a href=reSearchCategory.php?cat=",urlencode($catName),">$catName</a></li>";
                    ?>
                    <?php endwhile; ?>

                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">AUTHORS<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <?php while($S=mysqli_fetch_assoc($authorquery)):?>
                    <?php $v=$S["author_name"]; ?>
                    <?php echo "<li><a href=reSearchAuthor.php?page=",urlencode($v),">$v</a></li>";
                    ?>
                    <?php endwhile; ?>
                </ul>
            </li>

            <li><a href="new_books.php">NEW BOOKS</a></li>

            <li><a href="reSearchOldBooks.php">OLD BOOKS</a></li>

            <?php
            if($_SESSION["login_status"]=="success"){echo '
                <li><a href="sellBook.php">SELL BOOK</a></li> ';} ?>

            <form action="submitSearch.php" method="POST" class="navbar-form navbar-left">
                <div class="input-group">
                    <input type="text" class="form-control" name="livesearch" id="livesearch" placeholder="Search" autocomplete="off"><div id="results"></div>
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>

        </ul>

        <ul class="nav navbar-nav navbar-right">

            <?php
            if($_SESSION["login_status"]=="success"){echo '
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">MY PROFILE <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="myOrders.php">MY ORDERS</a></li>
                    <li class="divider"></li>
                    <li><a href="wishlist.php">MY WISHLIST</a></li>
                    <li class="divider"></li>
                    <li><a href="myReviews.php">MY REVIEWS</a></li>
                    <li class="divider"></li>
                    <li><a href="myprofile.php">PROFILE</a></li>


                </ul>
            </li>
                ';} ?>
            <button class="btn btn-primary navbar-btn  btn-md" id=cartButton onClick="document.location.href='orderDetails.php?bk_id=1'" >CART(0)</button>



            <?php
            if($_SESSION["login_status"]=="success")
            { 
                echo "
                <button class=\"btn btn-primary navbar-btn  btn-md\" id=loginRedirect onClick=\"document.location.href='logout.php?'\">LOGOUT</button>; ";

            }
            else
            {
                echo "
                <button class=\"btn btn-primary navbar-btn  btn-md\" id=loginRedirect onClick=\"document.location.href='signIn.php?'\">LOGIN</button>; ";


            }
            ?>
        </ul>

        <!--/nv 

<div class=mybtn>
<button class="btn btn-primary navbar-btn  btn-md"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</button>
<button class="btn btn-success navbar-btn  btn-md">  Login  </button>
</div></div>-->
    </div>
</nav>

<!--Ajax CART Start -->
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

<!--Ajax CART END -->
<!--Search Bar
<div class="container">
    <div class="row">
        <center><h2></h2></center>
        <div id="custom-search-input">
            <div class="input-group col-md-12">
                <input type="text" name="livesearch" class="search-query form-control" placeholder="Search" id=livesearch /><div id="results"></div>
                <span class="input-group-btn">
                    <button class="btn btn-danger" type="button">
                        <span class=" glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </div>
    </div>
</div>
-->
