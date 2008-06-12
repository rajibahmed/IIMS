<?php
session_start();

require_once('../../lib/mrr.class.php');
require_once('../../lib/stock.class.php');



	extract($_POST);
	//print_r($_POST);
	$userId=$_SESSION[userid];
	
	$MRR=new MRR;
	$stock= new Stock;
	
	$num=$MRR->getNewId();
	$getData="'$num','$mrr_num','$locationId','$date_of_submit','$userId','$PurchaseorderId','$selSupplier','$indentNo','','',1";
	
	extract($MRR->CreateMRRMaster($getData));
	
	$getData='';
	$counter=$id;
	echo $check;
	if($check==1)
	{
		for($i=0;$i<count($item_code);$i++)
		{	
			 $getData =	"'null',	'$counter',
									'$item_code[$i]',
									'$item_qty[$i]',
									'$item_rate[$i]',
									'',
									'$item_amount[$i]'";
		
			$MRR->CreateMRRDetails($getData);
			
		}
	}
	
	else
	{
		for($i=0;$i<count($item_code);$i++)
		{	
			 $getData =	"'null',	'$counter',
									'$item_code[$i]',
									'$item_qty[$i]',
									'$item_rate[$i]',
									'',
									'$item_amount[$i]'";
		
			$MRR->CreateMRRDetails($getData);
			$item_cl_balance_data=$stock->retriveStockItemByid($item_code[$i]);
			$item_cl_balance=$item_cl_balance_data[0]["stock_item_cl_balance"];
			$stock->updateAddClBalance($item_code[$i],$item_cl_balance,$item_qty[$i]);
			$prev_item_recieved_qty=$item_cl_balance_data[0]["stock_rejected_qty"];
			$current_recieved_qty=$prev_item_recieved_qty+$item_qty[$i];
			$stock->updateReceivedQty($stock_item[$i],	$current_recieved_qty);  
		}
	
	}	
	echo "Save Successfully"	;
	

?>