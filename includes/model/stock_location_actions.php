<?php

require_once ("../../lib/stock.class.php");
$objStockLocationInfo = new Stock();

	
	
	
		
		extract($_POST);
		
		
		//get a new id
		$StockLocationId = $objStockLocationInfo->getNewStockLocationId();
		/////////////////////////////
		
		$getData = "'$StockLocationId','$locationName','$underLocation','$locationAdd','$LocationCity','$LocationPhone','$LocationFax'";
		
		
		$objStockLocationInfo->CreateLocation($getData);

		
		echo "<b>Data Save Successsfull</b>";
		
		include '../contents/ca_create_locations.php';
		
	
?>	