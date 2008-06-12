<?php
session_start();
require_once('../../lib/delivery.class.php');




	extract($_POST);
	//print_r($_POST);
	$Delivery=new Delivery;
	
	$num = $Delivery->getNewId();
	$userId=$_SESSION[userid];
	$getData="'$num','$delivery_num','$date_of_submit','$name','$con_ref','$our_ref', '$userId'";
	
	extract($Delivery->CreateDeliveryMaster($getData));
	
	$getData='';
	echo $counter=$id;
	

	for($i=0;$i<count($item_code);$i++)
	{	
		$getData =	"'null',	'$num',
								'$item_code[$i]',
								'$GatePassNo',
								'$item_qty[$i]',
								'$remark[$i]'
								";
	
		$Delivery->CreateDeliveryDetails($getData);
	}
	echo "Delivery Challan Save Successfully"	;

?>