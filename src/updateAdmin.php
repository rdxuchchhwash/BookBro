<?php
require_once '../db/db_init.php';
include 'admin_index.php';


?>
<head><title>Update Admin | BookBrp</title></head>
<script type="text/javascript">


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
        var oName = document.getElementById("oldName");
        var newName =document.getElementById("newName");
        var pass = document.getElementById("pass");
        if(oName.value.length ==0 ){
            alert("You must enter Admin Name to Update");
            oName.style.border= "solid 2ps red";
            oName.focus();
            return false;
        }
        if(newName.value.length == 0){
            alert("Input New Admin Name");
            newName.style.border= "solid 2px red";
            newName.focus();
            flag=false;
        }
        if(pass.value.length == 0){
            alert("Input New Password");
            pass.style.border= "solid 2px red";
            pass.focus();
            flag=false;
        }
        if(newName.value.length!=0){
            newName.style.border= "solid 2px steelblue";


        }
        if(oName.value.length!=0){
            oName.style.border= "solid 2px steelblue";


        }
        if(pass.value.length!=0){
            pass.style.border= "solid 2px steelblue";
            if(pass.value.length<8){

                alert("Password must be of 8 character!");
                pass.focus();
                flag=false;
            }




        }

        return flag;
    }

</script>
<div class="new">

    <form action="updateAdminQuery.php" enctype="multipart/form-data" method="post">
        <div class="first_block">
            <h2>Update Admin</h2>
            <hr>
            <p>Admin Name</p>
            <input type="text" placeholder="Input Admin Username here" name="oldName" id="oldName">
            <p>New Admin Name</p>
            <input type="text" placeholder="Input New Username here" name="newAdminName" id="newName" >

            <p>New Password</p>
            <input type="text" placeholder="Input New Password  here" name="newAdinPass" id="pass" onInput="checkLength(8,this)">

            <input type="submit" onclick="return validate();" value="Update" style="background-color:#08ad19">




        </div>
    </form>



</div>