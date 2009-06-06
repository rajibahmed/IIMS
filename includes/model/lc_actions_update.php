<?php

require_once ("../../lib/lc.class.php");
$objLcInfo = new LC();
extract($_POST);
		
		$lc_name =$_POST['lc_name'];
		$lc_id =$_POST['lc_id'];
		
			$objLcInfo->updateLc($lc_id,$lc_name);
				echo "<b>Data Save Successsfull<b>"; 
			
		
	
?>	