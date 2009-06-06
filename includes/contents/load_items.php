<?php
	require_once('../../lib/defination.class.php');
	include('../../lib/stock.class.php');
	$stock=new Stock;
	
	if($stock->retriveStockItem())
	{
		
		$output=options_for_select(	$stock->retriveStockItem(),
									'stock_item_id',
									'stock_item_name'
									);
	}
	else
	{

	$output='<option selected> nothing to select</option>'	;
	}
?>
<select name=""> <?php echo $output; ?></select>