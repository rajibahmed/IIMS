<?php  
session_start();
require_once('../../lib/consumption.class.php');
require_once('../../lib/raw_item.class.php'); 


	extract($_POST);
	
		
		$consumption= new Consumption;
		$stock= new rawItem;
		
		$user_id=$_SESSION[userid];
		$num = $consumption->getissueRawNewId();	
		
		
		$getData="'$num','$con_num','','$date_of_submit','$user_id'";
		
		extract($consumption->CreateConsumptionRaeMaster($getData));
		$getData='';	
		$counter=$id;
		
		for($i=0; $i<count($item_code) ; $i++)	
		{	
			$getData ="'null','$counter',
							'$item_code[$i]',
							'',
							'$item_qty[$i]',
							'$item_rate[$i]',
							'$item_total[$i]'
							
						";
			#echo "<br />".$getData;						
			$consumption->CreateConsumptionRawDetails($getData); 
			 $item_data=$stock->retriveStockItemByid($item_code[$i]);
			 $item_cl_balance=$item_data[0]["stock_item_cl_balance"];
			  $prev_item_issue_qty=$item_data[0]["stock_issue_qty"];
			 
			 $stock->updateClBalance($item_code[$i],$item_cl_balance,$item_qty[$i]);
			 
			  $currentIssueQty=$prev_item_issue_qty+$item_qty[$i];
			 $stock->updateIssueQtyANDlocation($item_code[$i],	$currentIssueQty,$ConlocationId[$i]);  
			 
		}			
		
	
	
	echo " Save Successfully"	;


?>