<?php
require_once ("../../lib/stock.class.php");

$objStockLocationUpdate = new Stock();
	$stk_location_id = $_POST['stk_location_id'];

	$StkLocationName=$_POST['locationName'];
	$StkLocationPId=$_POST['underLocation'];
	$StkLocationAdd=$_POST['locationAdd'];
	$StkLocationCity=$_POST['LocationCity'];
	$StkLocationPhone=$_POST['LocationPhone'];
	$StkLocationFax=$_POST['LocationFax'];
		

		if($StkLocationName!=NULL)
		{
			$objStockLocationUpdate->updateStockLocation($stk_location_id,
														$StkLocationName,
														$StkLocationPId,
														$StkLocationAdd,
														$StkLocationCity,
														$StkLocationPhone,
														$StkLocationFax
														);
				echo "<b>Data Save Successsfull<b>"; 
		}	
		
?>