<?php

require_once ("../../lib/stock.class.php");
$objStockItemInfo = new Stock();
$btn_StkItem=$_POST['btn_StkItem'];
	
	
	
		
		
		extract($_POST);
		
		//get a new id
		$StockItemId = $objStockItemInfo->getNewStockItemId();
		/////////////////////////////
		
		//get stock code Id
		
		
		
		
		$getData = "'$StockItemId','$txtStkName','$UnderStock','$StockItemId','$catalog_no','$stkGrp','$stockDept','$stkSection','$stkMName','$stkMModel','$manufecturer','$unitId','','','','','$StockItemId','$txtStkDesc','','$minStock','$ReorderQty','','$opQnty','$OpRate','$opValue','$opQnty','','',''";
		
		
		$objStockItemInfo->CreateStockItem($getData);

		// Insert Multiple Code No //////////////////
		
		for($i=0;$i<count($txtStkcode);$i++)
		{
			
			$getCodevalue="'','$txtStkcode[$i]','$StockItemId'";
			$objStockItemInfo->CreateStockCode($getCodevalue);
		
		}
		/////////////////////////////////////////
		
		// Insert Multiple part  No //////////////////
		
		for($i=0;$i<count($txtStkPart);$i++)
		{
			
			$getPartvalue="'','$txtStkPart[$i]','$StockItemId'";
			$objStockItemInfo->CreateStockPart($getPartvalue);
		
		}
		/////////////////////////////////////////
		
		
		
		//onClick="history.go()
		
		///////////////////////////////
		
		
		echo "<b>Data Save Successsfull</b>";
		require_once("../contents/create_engn_item.php");
		
	
?>	

