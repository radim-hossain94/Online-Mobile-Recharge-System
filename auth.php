<?php
session_start();
$_SESSION["id"]=$_POST["id"];
$_SESSION["name"]=$_POST["operator"];
$_SESSION["offer"]=$_POST["offer"];
$_SESSION["cost"]=$_POST["cost"];
$n=0;
if(strlen($_POST["id"])==0){
	echo "id is not provided";
	$n=$n+1;
}

	
if(strlen($_POST["operator"])==0){
	echo "operator name is not provided";
	$n=$n+1;
}

if(strlen($_POST["offer"])==0){
	echo "offer is not provided";
	$n=$n+1;
}
if(strlen($_POST["cost"])==0){
	echo "cost is not provided";
	$n=$n+1;
}
	



if($n==0){

	header("Location:addoffer.php");
}
else{
	header("Location:error.php");
}

