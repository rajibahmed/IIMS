<?php

require_once ("../../lib/count.class.php");
$objCountInfo = new Count();
extract($_POST);
		
		$count_name =$_POST['count_name'];
		$count_id =$_POST['count_id'];
		
			$objCountInfo->updateCount($count_id,$count_name);
				echo "<b>Data Save Successsfull<b>"; 
			
		
	
?>	