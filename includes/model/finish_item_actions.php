<?php

require_once ("../../lib/finish_item.class.php");
$finishItem = new finishItem();
require_once ("../../lib/stock.class.php");
$objStockItemInfo = new Stock();
		extract($_POST);
		
		//get a new id
		$StockItemId = $finishItem->getNewFinishItemId();
		/////////////////////////////
		
		//get stock code Id
		
		$getData = "'$StockItemId','$stkName','$stkGrp','$unitId','$altUnitId','$unitRel1','$unitRel2','$count','$txtStkcode','$desc','','','','$opQnty','$OpRate','$opValue','$opQnty','','',''";
		
		
		$finishItem->CreateFinishItem($getData);

		
		
		echo "<b>Data Save Successsfull</b>";
		require_once("../contents/create_raw_item.php");
		
	
?>	

