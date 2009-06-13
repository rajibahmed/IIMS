<?php
session_start();

require_once('../../lib/stkReturn.class.php'); 
require_once('../../lib/stock.class.php'); 



	extract($_POST);
	//print_r($_POST);
	$userId=$_SESSION[userid];
	
	$StockReturn=new StockReturn;
	$stock= new Stock;
	$getData="'','$return_num','$date_of_submit','','$userId'";
	
	extract($StockReturn->CreateStockReturnMaster($getData));
	
	$getData='';
	$counter=$id;
	

	for($i=0;$i<count($stock_item);$i++)
	{	
		$getData =	"'null',	$counter,
								$stock_item[$i],
								$item_qty[$i],
								$item_rate[$i],
								'',
								$item_total[$i]";
	
		$StockReturn->CreateStockReturnDetails($getData);
		$item_cl_balance_data=$stock->retriveStockItemByid($stock_item[$i]);
		$item_cl_balance=$item_cl_balance_data[0]["stock_item_cl_balance"];
		$stock->updateAddClBalance($stock_item[$i],$item_cl_balance,$item_qty[$i]);
		$prev_item_rejected_qty=$item_cl_balance_data[0]["stock_rejected_qty"];
		$current_rejected_qty=$prev_item_rejected_qty+$item_qty[$i];
		$stock->updateRejectedQty($stock_item[$i],	$current_rejected_qty);  
	}
echo "<b>Data Save Successsfull</b>";	

?>