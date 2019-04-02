<?php
session_start();
include "dbconn.php";


if(strlen($_POST["uname"])==0){
	echo "name field is empty"."<br>";
}
if(strlen($_POST["pass"])==0){
	echo "password field is empty"."<br>";
}

if($_POST["uname"]=="admin"){
	if($_POST["pass"]=="1234"){
		header("Location:welcome.html");
	}
	else{
		echo "password is incorrect"."<br>";
	}
}
else{
	$_SESSION["uname"]=$_POST["uname"];
	$uname=$_POST["uname"];
    $upass=$_POST["pass"];
	
	$query=mysqli_query($conn,"SELECT * FROM user WHERE username='$uname' and password='$upass'");
    if(mysqli_num_rows($query)>0){
	    header("Location:user/welcome.html");
    }
	else{
		echo "check your user name and password..........or you need to sign up";
	}
}



?>
<br>
<br>
<a href="http://localhost/mobileRecharge/useregform.html"><button> Go to sign up page</button></a>
<a href="http://localhost/mobileRecharge/login.html"><button> Back </button></a>