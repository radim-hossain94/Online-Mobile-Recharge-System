<?php
session_start();
include "dbconn.php";
//$conn=mysqli_connect("localhost","root","","mobilereacharge");
$operator=$_SESSION["operator"];
$mobile=$_SESSION["mobile"];
$account=$_SESSION["account"];
$amount=$_SESSION["balance"];
$time=$_SESSION["time"];
$sql= "INSERT INTO history (Username , Operator, Mobile , Account , Amount , Time)
VALUES ('$_SESSION[uname]','$_SESSION[operator]','$_SESSION[mobile]','$_SESSION[account]','$_SESSION[balance]','$_SESSION[time]')";


if (mysqli_query($conn,$sql)) {
    echo "Recharge successfully done";
}
else {
    echo "error";
}

mysqli_close($conn);


?>
<p align="middle"> <a href="http://localhost/mobileRecharge/user/welcome.html" ><button> back </button></a></p>