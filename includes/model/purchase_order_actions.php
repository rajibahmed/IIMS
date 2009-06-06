<?php
session_start();
require_once('../../lib/requisition.class.php');
require_once('../../lib/indent.class.php');
require_once('../../lib/purchaseOrder.class.php');



	extract($_POST);
	//print_r($_POST);
	$Purchaseorder=new Purchaseorder;
	$getData="'','$selSupplier','$date_of_submit','$naration','$delivery', '$termsofpayment','$support','$others'";
	
	extract($Purchaseorder->CreatePurchaseOrderMaster($getData));
	
	$getData='';
	$counter=$id;
	

	for($i=0;$i<count($item_code);$i++)
	{	
		$getData =	"'null',	$counter,
								$item_code[$i],
								$item_qty[$i],
								$item_rate[$i],
								'',
								$item_amount[$i]";
	
		$Purchaseorder->CreatePurchaseOrderDetails($getData);
	}
	echo "Purchase Order Save Successfully"	;

?>