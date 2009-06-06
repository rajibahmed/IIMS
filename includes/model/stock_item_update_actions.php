<?php

require_once ("../../lib/stock.class.php");
$objStockInfo = new Stock();
extract($_POST);

			$objStockInfo->updateStockItem($stcItmId,
			$txtStkName,
			$under_engi_item,
			$catalog_no,
			$stockGroup,
			$stockDepartment,
			$stockSection,
			$stockMachine,
			$machineModel,
			$manufecture,
			$unit,
			$txtStkDesc,
			$minStock,
			$ReorderQty,
			$opQnty,
			$OpRate,
			$opValue);
			
			//Update Code No
			$objStockInfo->updateStockCodeNo($stcItmId,$txtStkcode);
			
			//Update Part No
			$objStockInfo->updateStockPartNo($stcItmId,$txtStkPart);
			
			echo "<b>Data Updated Successsfully<b>"; 
	
?>	