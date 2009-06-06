<?php 
	require_once('../../lib/stock.class.php');
	$id = (int) $_GET[id];
	$stock = new Stock();
	$stock_depts = $stock->getPartNumberByMachineModel($id);
	
	if(!$stock_depts) return;
	
	$output='<option>Select ..</option>';
	foreach($stock_depts as $item){
		$output .="<option value='$item[stock_part_id]'>$item[stock_part]</option>";
	}
	echo $output;	
?>