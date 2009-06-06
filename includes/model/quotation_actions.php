<?php

require_once ("../../lib/quotation.class.php");
$objQuotationInfo = new Quotation();
extract($_POST);

$getData="'','$indentNo','$selSupplier'";
	
	extract($objQuotationInfo->CreateQuotationMaster($getData));
	
	$getData='';
	$counter=$id;
	

	for($i=0;$i<count($item_code);$i++)
	{	
		$getData =	"'null',	'$counter',
								'$item_code[$i]',
								'$qty[$i]',
								'$origin[$i]',
								'$band[$i]',
								'$deliverytime[$i]',
								'$price[$i]',
								'$warranty[$i]'";
	
		$objQuotationInfo->CreateQuotationDetails($getData);
		
	}	
	
	echo "Quotation Save successfully";
	
?>	