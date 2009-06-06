<?php

require_once ("../../lib/stock.class.php");
$objStockItemInfo = new Stock();
$StockItemId = $objStockItemInfo->getNewStockItemId();
extract($_POST);

for($i=0; $i<count($locationID) ; $i++)	
	{	
		$getData ="'null',$StockItemId,
						$locationID[$i],
						$item_qty[$i],
						$item_rate[$i],
						$item_total[$i],
						'',
						$item_qty[$i]
					";
					
		$objStockItemInfo->CreateLocWiseStockDetails($getData); 
	}	

		
		
		//echo "<b>Data Save Successsfull</b>";
		require_once("../contents/localtionRawOpQty.php");
		
	
?>	

