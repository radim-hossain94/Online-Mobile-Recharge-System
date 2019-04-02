<?php
session_start();

$_SESSION["uname"]=$_POST["uname"];
$_SESSION["mobile"]=$_POST["mobile"];
$_SESSION["acn"]=$_POST["acn"];
$_SESSION["email"]=$_POST["email"];
$_SESSION["pass"]=$_POST["pass"];
$_SESSION["cpass"]=$_POST["cpass"];
$n=0;

	
if(strlen($_POST["uname"])==0){
	echo " user name is not provided";
	$n=$n+1;
}

if(strlen($_POST["mobile"])==0){
	echo "mobile is not provided";
	$n=$n+1;
}
if(strlen($_POST["acn"])==0){
	echo "Bank account is not provided";
	$n=$n+1;
}
if(strlen($_POST["email"])==0){
	echo "Email is not provided";
	$n=$n+1;
}	
if(strlen($_POST["pass"])==0){
	echo "Password is not provided";
	$n=$n+1;
}
if(strlen($_POST["cpass"])==0){
	echo "Password is not confirmed";
	$n=$n+1;
}

if($n==0){

	header("Location:adduser.php");
}
else{
	header("Location:error.php");
}

?>