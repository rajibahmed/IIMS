<?php

require_once ("../../lib/stock.class.php");
$objStockItemInfo = new Stock();

	
	
	
		
		
		extract($_POST);
		
		//get a new id
		$StockItemId = $objStockItemInfo->getNewStockItemId();
		/////////////////////////////
		
		//get stock code Id
		
		
		
		
		$getData = "'$StockItemId','$stkName','$StockItemId','$stkGrp','$unitId','$altUnitId','$unitRel1','$unitRel2','$desc','$count','$opQnty','$OpRate','$opValue','$opQnty'";
		
		
		$objStockItemInfo->CreateFinishStockItem($getData);

		for($i=0;$i<count($txtStkcode);$i++)
		{
			
			$getCodevalue="'','$txtStkcode[$i]','$StockItemId'";
			$objStockItemInfo->CreateStockCode($getCodevalue);
		
		}
		
		
		echo "<b>Data Save Successsfull</b>";
		require_once("../contents/create_raw_item.php");
		
	
?>	

