<?php

session_start();

unset($_SESSION["operator"]);
unset($_SESSION["mobile"]);
unset($_SESSION["account"]);
unset($_SESSION["balance"]);
unset($_SESSION["time"]);
unset($_SESSION["uname"]);
//unset();
header("Location:http://localhost/mobileRecharge/login.html");





?>