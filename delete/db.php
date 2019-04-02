<?php
$conn = mysqli_connect("localhost", "root", "","mobilereacharge");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>