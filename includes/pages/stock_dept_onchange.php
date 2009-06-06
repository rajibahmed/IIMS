<?php

	require_once('../../lib/stock.class.php');
	$id = (int) $_GET[id];
	$stock = new Stock();
	$stock_depts = $stock->getSectionByStockDept($id);
	
	if(!$stock_depts) return;
	
	$output='<option>Select ..</option>';
	foreach($stock_depts as $dept){
		$output .="<option value='$dept[sec_id]'>$dept[sec_name]</option>";
	}
	echo $output;	
?>
