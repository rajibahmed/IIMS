<?php
session_start();


require_once('../../lib/mrr.class.php');
require_once('../../lib/raw_item.class.php'); 


	$MRR=new MRR;
	$stock= new rawItem;
	$num = $MRR->getMRRrawId();

	
	
	$userId=$_SESSION[userid];
	

	
	
	extract($_POST);
	$getData="'$num','$mrr_num','$date_of_submit','$userId','$PurchaseorderId','$selSupplier','$indentNo','','',1";
	
		extract($MRR->CreateMrrRawMaster($getData));
	
	$getData='';
	$counter=$id;
	

	for($i=0;$i<count($stock_item);$i++)
	{	
		$getData =	"'null',	$counter,
								'',
								$stock_item[$i],
								$item_qty[$i],
								$item_rate[$i],
								'',
								$item_total[$i]";
	
		$MRR->CreateMrrRawDetails($getData);
		$item_cl_balance_data=$stock->retriveStockItemByid($stock_item[$i]);
		$item_cl_balance=$item_cl_balance_data[0]["stock_item_cl_balance"];
		$stock->updateAddClBalance($stock_item[$i],$item_cl_balance,$item_qty[$i]);
		$prev_item_recieved_qty=$item_cl_balance_data[0]["stock_rejected_qty"];
		$current_recieved_qty=$prev_item_recieved_qty+$item_qty[$i];
		$stock->updateReceivedQty($stock_item[$i],	$current_recieved_qty);  
	}
	
	echo "Data Save Successfully ";




?>