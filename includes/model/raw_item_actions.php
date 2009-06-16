<?php

require_once ("../../lib/raw_item.class.php");
$rawItem = new rawItem();
require_once ("../../lib/stock.class.php");
$objStockItemInfo = new Stock();
		extract($_POST);
		
		//get a new id
		$StockItemId = $rawItem->getNewId();
		/////////////////////////////
		
		//get stock code Id
		
		
		
		
		$getData = "'$StockItemId','$stkName','$stkGrp','$unitId','$altUnitId','$unitRel1','$unitRel2','$length','$date','$lc','$suplier','$lot','','$locationID','$qa','$txtStkcode','$desc','','','','$opQnty','$OpRate','$opValue','$opQnty','','',''";
		
		
		$rawItem->CreateRawStockItem($getData);

		
		
		echo "<b>Data Save Successsfull</b>";
		require_once("../contents/create_raw_item.php");
		
	
?>	

