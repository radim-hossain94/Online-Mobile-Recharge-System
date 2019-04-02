<?php
require("db_rw.php");
//echo "i am talking from server<br>";
//echo "Hello : ".$_REQUEST['uname'];

if(isset($_REQUEST["operator"])){
	$sql="select * from offers where Operator like '%".$_REQUEST["operator"]."%'";
	//echo $sql;
	$a=getDataFromDB($sql);?>
	
	<table align="center" border="4px" style="border:4px solid red;" >
	<tr>
	       
		   <th>Operator Name</th>
		   <th>Offer</th>
		   <th>Cost</th>
		   
	   </tr>
<?php
	foreach($a as $v){ ?>
	 <tr>
	        
			<td> <?php echo $v["Operator"];?> </td> 
		    <td> <?php echo $v["Offer"];?> </td>
		    <td> <?php echo $v["Cost"];?> </td>
     </tr>
	
<?php	
}
}
?>