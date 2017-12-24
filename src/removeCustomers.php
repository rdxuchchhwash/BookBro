<?php
require_once '../db/db_init.php';
include 'admin_index.php';


?>
<head><title>Remove Customer | BookBro</title></head>
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
        var flag = true;
        var cID = document.getElementById("cID");

        if(cID.value.length == 0 ){
            flag = false;
            alert("Input ID to remove");
            cID.style.border= "solid 2px red";
            cID.focus();
        }
        return flag;
    }


</script>
<div class="new">

    <form action="removeCustomerQuery.php"  method="post">
        <div class="first_block">
            <h2>Remove Customer by ID</h2>
            <hr>
            <p>Customer ID</p>
            <input type="text" placeholder="Input Customer ID here" name="customerID" id="cID" onkeypress="return isNumber(event);" autofocus>     
            <input type="submit" class="" value="Remove" style="background-color:#cc4128" onclick="return validate()">

        </div>
    </form>



</div>