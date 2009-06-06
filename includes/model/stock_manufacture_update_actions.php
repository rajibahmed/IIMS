<?php
require_once ("../../lib/stock.class.php");

$objStockManuUpdate = new Stock();
	
	$s_manu_id=$_POST['s_manu_id'];	
	$stocManuNam=$_POST['txtMname'];
	$stockManufacturerYearID=$_POST['stockManufacturerYearID'];	
	$stockMachinNameID = $_POST['stockMachinNameID'];
	$stockSectionID = $_POST['stockSectionID'];
	$stockDepartmentID = $_POST['stockDepartmentID'];

		if($s_manu_id!=NULL)
		{
			$objStockManuUpdate->updateManufacture($s_manu_id,$stocManuNam,$stockManufacturerYearID,$stockMachinNameID,$stockSectionID,$stockDepartmentID);
			echo "<b>Data Save Successsfull<b>";
		}	
		
?>