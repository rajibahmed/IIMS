<?php
session_start();

require_once('../../lib/qc.class.php');
require_once('../../lib/stock.class.php');



	extract($_POST);
	//print_r($_POST);
	$userId=$_SESSION[userid];
	
	$QC=new QC;
	$stock= new Stock;
	
	$num=$QC->getNewId();
	$getData="'$num','$qc_num','$date_of_submit','$userId','$mrrNo','$purchase_no','$indentNo','$supllier_no'";
	
	extract($QC->CreateQCMaster($getData));
	
	$getData='';
	$counter=$id;
	
	
		for($i=0;$i<count($item_code);$i++)
		{	
			 $getData =	"'null',	'$counter',
									'$item_code[$i]',
									'$item_qty[$i]',
									'$item_rate[$i]',
									'',
									'$item_amount[$i]'";
		
			$QC->CreateQCDetails($getData);
			$item_cl_balance_data=$stock->retriveStockItemByid($item_code[$i]);
			$item_cl_balance=$item_cl_balance_data[0]["stock_item_cl_balance"];
			$stock->updateAddClBalance($item_code[$i],$item_cl_balance,$item_qty[$i]);
			$prev_item_recieved_qty=$item_cl_balance_data[0]["stock_rejected_qty"];
			$current_recieved_qty=$prev_item_recieved_qty+$item_qty[$i];
			$stock->updateReceivedQty($stock_item[$i],	$current_recieved_qty);  
		}
	
	
	echo "Save Successfully"	;
	

?>