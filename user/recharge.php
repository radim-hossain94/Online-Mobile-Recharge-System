<?php
session_start();
$_SESSION["operator"]=$_POST["operator"];
$_SESSION["mobile"]=$_POST["mobile"];
$_SESSION["account"]=$_POST["account"];
$_SESSION["balance"]=$_POST["balance"];


    // Then call the date functions
    $date = date('Y-m-d');
$_SESSION["time"]=$date;


$n=0;
if(strlen($_POST["operator"])==0){
	$_SESSION["op_1"] = "<span style='color:red'>*</span>operator name is not given"."<br>";
	$n=$n+1;
}
if(ctype_alpha($_POST["operator"])==false){
	$_SESSION["op_2"] = "invalid input"."<br>";
	$n=$n+1;
}
if(strlen($_POST["mobile"])==0){
	$_SESSION["mobile_1"] = "<span style='color:red'>*</span>Mobile Number is not given"."<br>";
	$n=$n+1;
}

if(strlen($_POST["mobile"])<=10){
	$_SESSION["mobile_1"] = "<span style='color:red'>*</span>Mobile Number is invalid"."<br>";
	$n=$n+1;
}

if(!preg_match('/^[0-9]+$/', $_POST["mobile"])){
	$_SESSION["mobile_2"] = "invalid mobile number"."<br>";
	$n=$n+1;
}


if(strlen($_POST["account"])==0){
	$_SESSION["account_1"] = "<span style='color:red'>*</span>Account number is not given"."<br>";
	$n=$n+1;
}


if(strlen($_POST["balance"])==0){
	$_SESSION["balance_1"] = "<span style='color:red'>*</span>Balance is not given"."<br>";
	$n=$n+1;
}
if(!preg_match('/^[0-9]+$/', $_POST["balance"])){
	$_SESSION["balance_2"] = "<span style='color:red'>*</span>Balance should be a number"."<br>";
	$n=$n+1;
}

if(isset($_POST["paid"])){
	
}
else{
	$_SESSION["choice_1"] = "<span style='color:red'>*</span>Choice isn't given";
	$n=$n+1;
}


if($n<=0){
	
	header("Location:success.php");
}
else{
	header("Location:error.php");  
}


?>