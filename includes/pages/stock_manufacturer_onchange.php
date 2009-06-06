<?php 
	require_once('../../lib/stock.class.php');
	$id = (int) $_GET[id];
	$stock = new Stock();
	$stock_depts = $stock->getMachineModelByManufaturer($id);
	
	// if(!$stock_depts) 
	// {
	// 	$test=$stock->retriveStockItem($id);
	// 	
	// 	$output='<option>Select ..</option>';
	// 	foreach($test as $item){
	// 		$output .="<option value='$item[stock_item_id]'>
	// 					$item[stock_item_name]
	// 					</option>\n";
	// 	}
	// 	echo $output;
	// 	
	// return ;	
	// }
	
	$output='<option>Select ..</option>';
	foreach($stock_depts as $item){
		$output .="<option value='$item[machine_model_id]'>
					$item[machine_model_name]
					</option>\n";
	}
	echo $output;	
?>