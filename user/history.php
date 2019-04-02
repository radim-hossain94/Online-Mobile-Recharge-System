<br>
<br>
<p><h2 align="middle" style="color : blue"> History </h2></p>
<br>
<br>
<br>
<?php
session_start();
require("db_rw.php");
echo "<p align='middle'>"."Name : ".$_SESSION["uname"]."</p>";
//echo "i am talking from server<br>";
//echo "Hello : ".$_REQUEST['uname'];


	$sql="select * from history where username = '".$_SESSION["uname"]."'";
	//echo $sql;
	$a=getDataFromDB($sql);?>
	
	<table align="center" border="4px" style="border:4px solid red;" >
	<tr>
	       
		   <th>Operator Name</th>
		   <th>Mobile</th>
		   <th>Account Number</th>
		   <th>Amount</th>
		   <th>Time</th>
		   
	</tr>
<?php
	foreach($a as $v){ ?>
	<tr>
	        
		    <td> <?php echo $v["Operator"];?> </td> 
		    <td> <?php echo $v["Mobile"];?> </td>
		    <td> <?php echo $v["Account"];?> </td>
			<td> <?php echo $v["Amount"];?> </td>
			<td> <?php echo $v["Time"];?> </td>
    </tr>
	
<?php	
}

?>
</table>
	<br>
	<br>
	<p align="middle"><a href="http://localhost/mobileRecharge/user/welcome.html" ><button > back  </button></a></p>