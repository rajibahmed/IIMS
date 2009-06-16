<?php

require_once ("../../lib/raw_item.class.php");
$rawItem = new rawItem();
require_once ("../../lib/stock.class.php");
$objStockItemInfo = new Stock();

		extract($_POST);
		$rawItem->UpadteRawItemByID($stock_item_id,
									$stkName,
									$stkGrp,
									$unitId,
									$altUnitId,
									$unitRel1,
									$unitRel2,
									$length,
									$txtStkcode,
									$desc,
									$opQnty,
									$OpRate,
									$opValue
									);
		
		echo "<b>Data Save Successsfull</b>";
		//require_once("../contents/list_all/list_all_raw_item.php");
		
	
?>	

