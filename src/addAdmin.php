<?php

session_start();
require_once '../db/db_init.php';
include 'admin_index.php';
?>

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
        flag=true;

        //m1 = document.getElementById("id");
        m2 = document.getElementById("name");
        m3 = document.getElementById("pass");

        /*if(document.forms[0].elements[0].value.length==0){
		m1.style.color="#e00000";
		m1.innerHTML="<br>Enter  ID";
		flag=false;
	}*/
        if(document.forms[0].elements[0].value.length==0){     

            m2.style.color="#e00000";
            m2.innerHTML="<br>Enter  Name";



            flag=false;
        }
        if(document.forms[0].elements[1].value.length==0){


            m3.style.color="#e00000";
            m3.innerHTML="<br>Enter  Password";

            flag=false;


        }
        if(document.forms[0].elements[1].value.length<8){

            alert("Password must be of 8 character!");
            document.getElementById("tpass").focus();
            flag=false;
        }
        /*if(document.forms[0].elements[0].value.length!=0){
		m1.style.color="#555555";
		m1.innerHTML="<br>Admin  ID";

	}*/
        if(document.forms[0].elements[0].value.length!=0){

            m2.style.color="#555555";
            m2.innerHTML="<br>Name";

        }
        if(document.forms[0].elements[1].value.length!=0){
            m3.style.color="#555555";
            m3.innerHTML="<br>Password";

        }

        return flag;
    }
</script>

<div class="new">

    <form action="addAdminQuery.php"  method="post">
        <div class="first_block">
            <h2>Add Admin</h2>
            <hr>
            <!--<p id="id">Admin ID</p>
<input type="text"  placeholder="Input Admin Id here(Max-4)" name="adminID" onkeypress="return isNumber(event)" maxlength="4">
-->
            <p id="name">Name</p>
            <input type="text" placeholder="Input Admin Name Here(Max-10)" name="adminName" onInput="checkLength(10,this)">
            <p id="pass">Password</p>
            <input id="tpass" type="text" placeholder="Password Has to be of 8 character" name="adminPass" onInput="checkLength(8,this)" >

            <input type="submit" onclick="return validate();" value="Submit" >


        </div>
    </form>



</div>