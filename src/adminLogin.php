<?php
session_start();
require_once '../db/db_init.php';
include '../adminIncludes/head.php';

?>
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


        }
        return flag;


    }

</script>
<html>
    <header>
        <title>Login | BookBro</title>
        <link rel="stylesheet" href="../adminCss/login.css">

    </header>
    <body> <div class="new">
        <div class="col-xs-4 col-xs-offset-4" id="pad">

            <form action="adminLoginQuery.php" method="post">
                <table align="center">
                    <tr>
                        <th>
                            Welcome!
                        </th>
                    <tr><th>
                        Admin Login
                        <hr>
                        </th></tr>


                    <tr>
                        <td align="center">User Name</td>
                    </tr>
                    <tr>

                        <td><input type="text" name="name" placeholder="Name" id="name"></td>
                    </tr>
                    <tr>
                        <td align="center">Password:</td>
                    <tr>
                        <td><input type="password" name="pass" placeholder="********" id="pass" onInput="checkLength(8,this)"></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" onclick="return validate();" value="Login" >
                        </td>
                    </tr>
                </table>




            </form>
        </div>
        </div></body>


</html>
