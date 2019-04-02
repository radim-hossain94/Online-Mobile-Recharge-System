<?php session_start();?>

<html>

<head><title> Recharge </title></head>
<br>
<body>
<form action="recharge.php" method="post">
<p><h2  align="middle">Recharge</h2></p>
<table align="center">
<tr>
<td>
<br>
<br>
<p>Operator Name:<input type="text" name="operator">
<div id="op_1">
        <?php if(!empty($_SESSION["op_1"])) { echo $_SESSION["op_1"]; } ?>
        <?php unset($_SESSION["op_1"]); ?>
</div>
<div id="op_2">
        <?php if(!empty($_SESSION["op_2"])) { echo $_SESSION["op_2"]; } ?>
        <?php unset($_SESSION["op_2"]); ?>
</div>
<p><input type="radio" name="paid" value="prepaid"/>Prepaid <input type="radio" name="paid" value="postpaid"/> Postpaid </p>
<div id="choice_1">
        <?php if(!empty($_SESSION["choice_1"])) { echo $_SESSION["choice_1"]; } ?>
        <?php unset($_SESSION["choice_1"]); ?>
</div>




<p>Mobile Number:<input type="text" name="mobile"></p>
<div id="mobile_1">
        <?php if(!empty($_SESSION["mobile_1"])) { echo $_SESSION["mobile_1"]; } ?>
        <?php unset($_SESSION["mobile_1"]); ?>
</div>
<div id="mobile_2">
        <?php if(!empty($_SESSION["mobile_2"])) { echo $_SESSION["mobile_2"]; } ?>
        <?php unset($_SESSION["mobile_2"]); ?>
</div>
<p>Card Number:<input type="text" name="account"></p>
<div id="account_1">
        <?php if(!empty($_SESSION["account_1"])) { echo $_SESSION["account_1"]; } ?>
        <?php unset($_SESSION["account_1"]); ?>
</div>

<p>Enter Amount:<input type="text" name="balance"></p>
<div id="balance_1">
        <?php if(!empty($_SESSION["balance_1"])) { echo $_SESSION["balance_1"]; } ?>
        <?php unset($_SESSION["balance_1"]); ?>
</div>
<div id="balance_2">
        <?php if(!empty($_SESSION["balance_2"])) { echo  $_SESSION["balance_2"]; } ?>
        <?php unset($_SESSION["balance_2"]); ?>
</div>
<p><input type="submit" value="Enter"> <a href="recharge.html">Back</a></p>
 </form>       
</td>

</tr>
<tr>

</tr>
</table>
</body>
</html>