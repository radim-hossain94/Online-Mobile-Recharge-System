<?php
include "dbconn.php";
require("db_rw.php");
session_start();
$newname=$_POST["newname"];
$newpass=$_POST["newpass"];
$oldname=$_POST["oldname"];
$oldpass=$_POST["oldpass"];
$n=0;
if(strlen($_POST["newname"])==0){
	$_SESSION["nn_1"] = "new name is not given"."<br>";
	$n=$n+1;
}
if(strlen($_POST["newpass"])==0){
	$_SESSION["np_1"] = "new password is not given"."<br>";
	$n=$n+1;
}
if(strlen($_POST["oldname"])==0){
	$_SESSION["on_2"] = "old name is not given"."<br>";
	$n=$n+1;
}
if(strlen($_POST["oldpass"])==0){
	$_SESSION["op_2"] = "old password is not given"."<br>";
	$n=$n+1;
}

if($n>0){
	//print_r($GLOBALS);
	header("Location:updateerror.php");
}
else{
	$query=mysqli_query($conn,"SELECT * FROM user WHERE username='$newname'");
    if(mysqli_num_rows($query)>0){
		$_SESSION["message"] ="your new user name is already exist. Please try another name";
	    header("Location:updateerror.php");
		
    }
	else{
		$query=mysqli_query($conn,"SELECT * FROM history WHERE username='$oldname'");
    if(mysqli_num_rows($query)>0){
		$sql="UPDATE history SET username='$newname'  WHERE username='$oldname'";
		$k=updateDB($sql);
		
    }
		
		
		unset($_SESSION["uname"]);
		session_start();
		$_SESSION["uname"]=$newname;
		//echo "hello";
		$sql="UPDATE user SET username='$newname' , password='$newpass' , confirmpass='$newpass' WHERE username='$oldname'";
		$k=updateDB($sql);
		header("Location:welcome.html");
	}
}




?>

