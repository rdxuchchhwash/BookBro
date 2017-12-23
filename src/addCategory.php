<?php
require_once '../db/db_init.php';
include 'admin_index.php';
?>

<head><title>Add Category | BookBro</title></head>
<script type="text/javascript">
    function validate(){
        var cat= document.getElementById('cat');
        var flag=true;
        if(cat.value.length==0){
            flag= false;
            alert("Insert Category  Name");
            cat.style.border= "solid 2px red";
            cat.focus();

        }
        return flag;
    }
</script>

<div class="new">

    <form action="addCategoryQuery.php" method="post">
        <div class="first_block">
            <h2>Add Category</h2>
            <hr>
            <p>Category Name</p>
            <input type="text" placeholder="Input Category name here" name="catName" id="cat">

            <input type="submit" onclick="return validate();" value="Submit" >




        </div>
    </form>



</div>