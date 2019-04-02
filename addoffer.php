<?php
session_start();
include "dbconn.php";
//$conn=mysqli_connect("localhost","root","","mobilereacharge");
$id=$_SESSION["id"];
$operator_name=$_SESSION["name"];
$offer=$_SESSION["offer"];
$cost=$_SESSION["cost"];

$sql= "INSERT INTO offers (Id, Operator, Offer , Cost)
VALUES ('$_SESSION[id]','$_SESSION[name]','$_SESSION[offer]','$_SESSION[cost]')";


if (mysqli_query($conn,$sql)) {
    echo "New record created successfully";
}
else {
    echo "error";
}

mysqli_close($conn);


?>
<p align="middle"> <a href="http://localhost/mobileRecharge/welcome.html" ><button> back </button></a></p>