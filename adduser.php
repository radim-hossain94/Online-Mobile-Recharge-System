<?php
session_start();
include "dbconn.php";
//$conn=mysqli_connect("localhost","root","root","mobilereacharge");
$uname=$_SESSION["uname"]; 
$mobile=$_SESSION["mobile"];
$acn=$_SESSION["acn"];
$email=$_SESSION["email"];
$pass=$_SESSION["pass"];
$cpass=$_SESSION["cpass"];
//$selected=mysqli_select_db("mobilereacharge",$conn);
$query=mysqli_query($conn,"SELECT * FROM user WHERE username='$uname'");
if(mysqli_num_rows($query)>0){
	echo "Sorry!User Name is exist!";
	echo "<a href='useregform.html'>Signup</a>";
}
else{
	$sql= "INSERT INTO user (username,mobile,email,account,password,confirmpass)
    VALUES ('$_SESSION[uname]','$_SESSION[mobile]','$_SESSION[email]','$_SESSION[acn]','$_SESSION[pass]','$_SESSION[cpass]')";
	if (mysqli_query($conn,$sql)) {
    echo "New record successfully";
	echo "<a href='login.html'>Log in</a>";
}
else {
    echo "error";
}
}

/*

*/
mysqli_close($conn);
?>