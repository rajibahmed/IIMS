<?php

require_once ("../../lib/lot.class.php");
$objLotInfo = new Lot();
extract($_POST);
		
		$lot_name =$_POST['lot_name'];
		$lot_id =$_POST['lot_id'];
		
			$objLotInfo->updateLot($lot_id,$lot_name);
				echo "<b>Data Save Successsfull<b>"; 
			
		
	
?>	