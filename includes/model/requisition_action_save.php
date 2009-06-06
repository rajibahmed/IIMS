<?php
	session_start();
	require_once('../../lib/requisition.class.php');
	require_once('../../lib/helper_functions.php');
	$requisition= new Requisition;
	
	
	$fields=array();
	extract($_POST);
	
	
	$getData="$user_id,$status,$dept_id,$office_id,'$required_within','$submit_date','$req_num'";
	
	extract($requisition->CreateRequisitionMaster($getData));
	
	
	$requisition_master_id = $id;
	
	$getData='';
	
	for($i=0;$i<count($stock_item);$i++)
	{	
		$getData =	"'null',	$requisition_master_id,
								$stock_item[$i],
								$item_qty[$i],
								$item_total[$i],
								'$item_remark[$i]'";
								
		$requisition->CreateRequisitionDetails($getData);
	}
	
?>
<b> Requisition is saved</b>