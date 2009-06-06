<?php  
	require_once('../../lib/stock.class.php');
	$part_number=(int) $_GET[part_number];
	$stock = new Stock();
	$items = $stock->retriveStockItem();
	
	$output='';
	foreach($items as $item)
	{
		$output.='<option value='.$item[stock_item_id].'>'.$item[stock_item_name].", ". $item[stock_item_cl_balance]. '</option>';
	}
	echo $output;
?>

