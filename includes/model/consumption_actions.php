<?php  
session_start();
require_once('../../lib/consumption.class.php');
require_once('../../lib/stock.class.php');


	extract($_POST);
	

		$consumption= new Consumption;
		$stock= new Stock;
		
		$user_id=$_SESSION[userid];
		$num = $consumption->getNewId();	
		
		
		$getData="'$num','$con_num','$locationId','$date_of_submit','$user_id'";
		
		extract($consumption->CreateConsumptionMaster($getData));
		$getData='';	
		$counter=$id;
		
		for($i=0; $i<count($item_code) ; $i++)	
		{	
			$getData ="'null','$counter',
							'$item_code[$i]',
							'$ConlocationId[$i]',
							'$item_qty[$i]',
							'$item_rate[$i]',
							'$item_total[$i]'
							
						";
			#echo "<br />".$getData;						
			$consumption->CreateConsumptionDetails($getData); 
			$item_data=$stock->retriveStockItemByid($item_code[$i]);
			$item_cl_balance=$item_cl_balance_data[0]["stock_item_cl_balance"];
			$prev_item_issue_qty=$item_cl_balance_data[0]["stock_issue_qty"];
			 
			 $stock->updateClBalance($item_code[$i],$item_cl_balance,$item_qty[$i]);
			 
			 $currentIssueQty=$prev_item_issue_qty+$item_qty[$i];
			 $stock->updateIssueQty($item_code[$i],	$currentIssueQty);  
			 
		}			
		
	
	
	echo " Save Successfully"	;


?>