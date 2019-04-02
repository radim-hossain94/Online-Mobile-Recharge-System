<?php

session_start();

unset($_SESSION["name"]);
unset($_SESSION["id"]);
unset($_SESSION["offer"]);
unset($_SESSION["balance"]);
unset($_SESSION["cost"]);
//unset($_SESSION["uname"]);

header("Location:http://localhost/mobileRecharge/login.html");



print_r($GLOBALS);
?>