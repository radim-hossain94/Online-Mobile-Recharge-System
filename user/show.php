<?php 

include ("db_rw.php");

$sql="select * from user";
$a=getDataFromDB($sql);
?>


<html>

<head><title> SHOW </title></head>
<br>
<br>
<body> <marquee><h2 style="color : Red"> Show User Account </h2></marquee>  

<table align="center" border="4px" style="border:4px solid red;" >
	<tr>
	       
		   <th>User Name</th>
		   <th>Mobile</th>
		   <th>Email</th>
		   <th>Account Number</th>
		   
		   
	</tr>
 
	
	<?php
	foreach($a as $v){ ?>
	<tr>
	        
		    <td> <?php echo $v["username"];?> </td> 
		    <td> <?php echo $v["mobile"];?> </td>
		    <td> <?php echo $v["email"];?> </td>
			<td> <?php echo $v["account"];?> </td>
    </tr>
	
<?php	
	}
?>
</table>
<br>
<br>
<center><a align="middle" href="http://localhost/mobileRecharge/welcome.html"><button align="middle">Back</button></a></center>
</body>
</html>