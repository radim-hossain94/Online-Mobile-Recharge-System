<?php session_start(); ?>
<html>

<head> <title>Update</title> </head>
<br>
<br>
<h2 align="middle"> Update Profile </h2>
<br>
<br>

<body>
<form action="edit.php" method="POST">
<p align="middle">Old name : <input type="text" name="oldname"/> </p>
<div align="middle" id="on_1">
        <?php if(!empty($_SESSION["on_2"])) { echo $_SESSION["on_2"]; } ?>
        <?php unset($_SESSION["on_2"]); ?>
</div>
<p align="middle">New name : <input type="text" name="newname"/> </p>
<div align="middle" id="nn_2">
        <?php if(!empty($_SESSION["nn_1"])) { echo $_SESSION["nn_1"]; } ?>
        <?php unset($_SESSION["nn_1"]); ?>
</div>
<div align="middle" id="message">
        <?php if(!empty($_SESSION["message"])) { echo $_SESSION["message"]; } ?>
        <?php unset($_SESSION["message"]); ?>
</div>


<p align="middle">Old Password : <input type="text" name="oldpass"/> </p>
<div align="middle" id="op_1">
        <?php if(!empty($_SESSION["op_2"])) { echo $_SESSION["op_2"]; } ?>
        <?php unset($_SESSION["op_2"]); ?>
</div>
<p align="middle">New Password : <input type="text" name="newpass"/> </p>
<div align="middle" id="np_2">
        <?php if(!empty($_SESSION["np_1"])) { echo $_SESSION["np_1"]; } ?>
        <?php unset($_SESSION["np_1"]); ?>
</div>
<p align="middle"><input type="submit" value="Update"></p>

</form>
<p align="middle"><a href="http://localhost/mobileRecharge/user/welcome.html" ><button > back  </button></a></p>
</body>

</html>