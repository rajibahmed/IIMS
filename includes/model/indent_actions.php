<?php
session_start();
require_once('../../lib/requisition.class.php');
require_once('../../lib/indent.class.php');


	extract($_POST);
	$indent=new Indent;
	$requisition= new Requisition;
	$num = $indent->getNewIndentId();
	$getData="'$num','$indent_code','$indent_remark','$date_of_submit'";
	
	extract($indent->CreateIndentMaster($getData));
	
	$getData='';
	$counter=$id;
	

	for($i=0;$i<count($indent_item_qty);$i++)
	{	
		$getData =	"'null',	$counter,
								$stock_item_id[$i],
								$indent_item_qty[$i],
								$requisition_id[$i]";
	
		$indent->CreateIndentDetails($getData);
		
		$indent->updateReqStatus($requisition_id[$i]);	
	}
	echo "<b> Indent Created</b>";


?>