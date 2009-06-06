<?php

	require_once('../../lib/stock.class.php');
	$id = (int) $_GET[id];
	$stock = new Stock();
	$stock_item = $stock->getStockItemById($id);
	
	
	// foreach ($stock_item as $item) {	
	// 	echo "$item[stock_item_desc]";
	// }
	foreach($stock_item as $item){
		echo json_encode($item);
	}

?>
