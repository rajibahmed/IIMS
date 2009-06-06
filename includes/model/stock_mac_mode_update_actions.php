<?php
require_once ("../../lib/stock.class.php");

$objStockMachineModeUpdate = new Stock();
	
	$s_mac_mod_id=$_POST['s_mac_mod_id'];
		
	$txtMname=$_POST['txtMname'];
	$stockMachinNameID=$_POST['stockMachinNameID'];	
	$stockMachinModeID = $_POST['stockMachinModeID'];
	$stockSectionID = $_POST['stockSectionID'];
	
	$stockDepartmentID = $_POST['stockDepartmentID'];

		if($s_mac_mod_id!=NULL)
		{
			$objStockMachineModeUpdate->updateMachineMode($s_mac_mod_id,$txtMname,$stockMachinNameID,$stockMachinModeID,$stockSectionID,$stockDepartmentID);
			echo "<b>Data Save Successsfull<b>";
		}	
		
?>