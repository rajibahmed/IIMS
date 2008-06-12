<?php

require_once ("../../lib/finish_item.class.php");
$finishItem = new finishItem();

		extract($_POST);
		
		$finishItem->UpdateFinishItem($StockItemId,
										$stkName,
										$stkGrp,
										$unitId,
										$altUnitId,
										$unitRel1,
										$unitRel2,
										$count,
										$lot,
										$txtStkcode,
										$desc,
										$opQnty,
										$OpRate,
										$opValue,
										$opQnty
										);

		
		echo "<b>Data Save Successsfull</b>";
		require_once("../contents/list_all/list_all_finish_item.php");
		
	
?>	

