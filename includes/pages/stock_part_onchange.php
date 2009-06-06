<?php

	require_once('../../lib/stock.class.php');
	$id = (int) $_GET[id];
	$stock = new Stock();
	$stock_depts = $stock->getItemByPartDetails($id);
	
	if(!$stock_depts) return;
	
	$output='';
	foreach($stock_depts as $dept){
		$output .= $dept[stock_item_id]."#".$dept[stock_item_name]."#".$dept[last_purchase_rate]."#".$dept[stock_item_cl_balance];
	}
	echo $output;	
?>
