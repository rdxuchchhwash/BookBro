<?php
session_start();

$tmp=1;
if(strlen($_POST["email"])==0){
	echo "No Input On Username field!";
	$tmp=0;
}
echo "<br>";

if(strlen($_POST["pass"])==0){
	echo "No Input On Password field!";
	$tmp=0;
}

	
echo "<br>";

		$_SESSION["email"] = $_POST["email"];
		$_SESSION["password"] = $_POST["pass"];	
		

if($tmp==1)
{
	header('Location:authentication.php');
}

?>