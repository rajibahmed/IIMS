<?php

	require_once('../../lib/finish_item.class.php');
	$id = (int) $_GET[id];
	$finishItem = new finishItem();
	$stock_item = $finishItem->getStockItemById($id);
	
	
	// foreach ($stock_item as $item) {	
	// 	echo "$item[stock_item_desc]";
	// }
	foreach($stock_item as $item){
		echo json_encode($item);
	}

?>
