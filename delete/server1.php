<?php
require("db_rw.php");
if(isset($_REQUEST["id"])){
	$sql="DELETE FROM offers WHERE id='".$_REQUEST["id"]."'";
	$sql1="select * from offers";
	//echo $sql;
	$k=updateDB($sql);
	$a=getDataFromDB($sql1);?>
	
	<table align="center" border="4px" style="border:4px solid red;" >
	<tr>
	       <th>Id</th>
		   <th>Operator Name</th>
		   <th>Offer</th>
		   <th>Cost</th>
		   
	   </tr>
<?php
	foreach($a as $v){ ?>
	 <tr>
	        <td> <?php echo $v["Id"];?> </td> 
			<td> <?php echo $v["Operator"];?> </td> 
		    <td> <?php echo $v["Offer"];?> </td>
		    <td> <?php echo $v["Cost"];?> </td>
     </tr>
	
<?php	
}
}

?>



