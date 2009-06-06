<?php

require_once ("../../lib/stock.class.php");
$objStockUnitInfo = new Stock();

	
	
		
		
		extract($_POST);
		
		
		//get a new id
		$StockUnitId = $objStockUnitInfo->getNewStockUnitId();
		/////////////////////////////
		
		
		
		
		$getData = "'$StockUnitId','$stockUnitSymbol','$stockUnitFormalName','$stockUnitDecimalPlace'";
		
		
		$objStockUnitInfo->CreateStockUnit($getData);

		
		echo "<b>Data Save Successsfull</b>";
		require_once("../../includes/contents/ca_create_unit.php");
		
	
?>	