<?php

require_once '../db/db_init.php';
include 'admin_index.php';

?>



<head>
    <title>Add Admin | BookBro</title>
</head>

<script type="text/javascript">
    //stackoverflow
    /*function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}*/

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
        var name= document.getElementById('name');
        var pass= document.getElementById('pass');
        var flag=true;
        if(name.value.length==0|| pass.value.length==0){
            if(name.value.length==0){
                alert("Insert User Name");
                name.style.border= "solid 2px red";
                name.focus();

            }
            if(pass.value.length==0){
                alert("Insert Password!");

                pass.style.border= "solid 2px red";
                pass.focus();
            }
            flag=false;
        }

        if(name.value.length!=0){
            name.style.border= "solid 2px steelblue";


        }
        if(pass.value.length!=0){
            pass.style.border= "solid 2px steelblue";
            if(pass.value.length<8){

                alert("Password must be of 8 character!");
                pass.style.border= "solid 2px red";
                pass.focus();
                flag=false;
            }


        }
        return flag;

    }
</script>

<div class="new">

    <form action="addAdminQuery.php"  method="post" >
        <div class="first_block">
            <h2>Add Admin</h2>
            <hr>
            <!--<p id="id">Admin ID</p>
<input type="text"  placeholder="Input Admin Id here(Max-4)" name="adminID" onkeypress="return isNumber(event)" maxlength="4">
-->
            <p >Name</p>
            <input type="text" id="name" placeholder="Input Admin Name Here" name="adminName">
            <p>Password</p>
            <input id="pass" type="text" placeholder="Password Has to be of 8 character" name="adminPass" onInput="checkLength(8,this)" >

            <input type="submit"  onclick="return validate()" value="Submit" >


        </div>
    </form>



</div>