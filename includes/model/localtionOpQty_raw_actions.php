<?php

require_once ("../../lib/stock.class.php");
$objStockItemInfo = new Stock();
require_once ("../../lib/raw_item.class.php");
$rawItem = new rawItem();
extract($_POST);

$StockItemId = $rawItem->getNewId();

for($i=0; $i<count($locationID) ; $i++)	
	{	
		$getData ="'null','$StockItemId',
						'$date_of_submit[i]',
						'$locationID[$i]',
						'$lot[$i]',
						'$lc[$i]',
						'$suplier[$i]',
						'$stkMName[$i]',
						$item_qty[$i],
						$item_rate[$i],
						$item_total[$i]
						
					";
					
		$objStockItemInfo->CreateLocWiseRawStockDetails($getData); 
	}	

		
		
		//echo "<b>Data Save Successsfull</b>";
		require_once("../contents/localtionRawOpQty.php");
		
	
?>	

