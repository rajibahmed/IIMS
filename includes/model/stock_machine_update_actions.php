<?php
require_once ("../../lib/stock.class.php");

$objStockMachineUpdate = new Stock();
	
	$stocMacID=$_POST['s_mac_id'];	
	$stocMacNam=$_POST['txtMname'];
	$stock_Section_id=$_POST['stockSectionID'];	
	$stock_dep_id = $_POST['stockDepartmentID'];

		if($stocMacID!=NULL)
		{
			$objStockMachineUpdate->updateMachine($stocMacID,$stocMacNam,$stock_Section_id,$stock_dep_id);
			echo "<b>Data Save Successsfull<b>";
		}	
		
?>