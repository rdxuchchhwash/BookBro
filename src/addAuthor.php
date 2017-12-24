<?php
require_once '../db/db_init.php';
include 'admin_index.php';

?>
<head><title>Add Author | BookBro</title></head>

<script type="text/javascript">
    function validate(){
        var flag=true;
        var name = document.getElementById("name");
        var desc = document.getElementById("desc");

        if(name.value.length==0){
            alert("Insert Author Name");
            name.style.border= "solid 2px red";
            name.focus();
            flag=false;

        }
        if(desc.value.length==0){
            alert("Insert Author Details");
            desc.style.border= "solid 2px red";
            desc.focus();
            flag=false;
        }
   
        if(name.value.length!=0){
            name.style.border= "solid 2px steelblue";


        }if(desc.value.length!=0){
            desc.style.border= "solid 2px steelblue";


        }
        return flag;

    }
</script>


<div class="new">

    <form action="addAuthorQuery.php" method="post">
        <div class="first_block">
            <h2>Add Author</h2>
            <hr>

            <p>Author Name</p>
            <input type="text" placeholder="Input Author Name Here" name="authorName" id="name">
            <p>Author Details</p>
            <textarea placeholder="Write a small description about the author" name="authorDescription" id="desc"></textarea>
            <input type="submit" onclick="return validate()" value="Submit" >




        </div>
    </form>



</div>