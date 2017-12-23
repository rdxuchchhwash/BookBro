<?php
require_once '../db/db_init.php';
include 'admin_index.php';


?>
<head><title>Remove Admin | BookBro</title></head>
<script type="text/javascript">
    //https://stackoverflow.com/questions/7295843/allow-only-numbers-to-be-typed-in-a-textbox
    function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
    function validate(){
        var id = document.getElementById("id");
        var flag = true;
        if(id.value.length == 0){
            flag = false;
            alert("Input ID to remove");
            id.style.border= "solid 2px red";
            id.focus();
        }
        return flag;
    }
</script>

<div class="new">

    <form action="removeAdminQuery.php" enctype="multipart/form-data" method="post">
        <div class="first_block">
            <h2>Remove Admin by ID</h2>
            <hr>
            <p>Admin ID</p>
            <input type="text" placeholder="Input Admin Username here" name="adminID" id="id" onkeypress="return isNumber(event);">


            <input type="submit" class="" value="Remove" style="background-color:#cc4128" onclick="return validate()">




        </div>
    </form>



</div>