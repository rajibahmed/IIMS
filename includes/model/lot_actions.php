<?php

require_once ("../../lib/lot.class.php");
$objLotInfo = new Lot();
extract($_POST);
	
		//get a new id
		$lotId = $objLotInfo->getNewLotId();
		/////////////////////////////
		$lot_name =$_POST['lot_name'];
		
		$getData = "'$lotId','$lot_name'";
		
		$objLotInfo->CreateLot($getData);
	
		echo "<b>Data Save Successsfull</b>";
		
		include '../contents/create_lot.php';
?>	