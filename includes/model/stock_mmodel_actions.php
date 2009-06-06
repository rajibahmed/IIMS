<?php
require_once('../../lib/defination.class.php');
require_once ("../../lib/stock.class.php");
$objStockMachineModelInfo = new Stock();
$btn_StkDept=$_POST['btn_StkDept'];

	
	
	
		
	
		//get a new id
		$mmid=$objStockMachineModelInfo->getNewMachinemodelid();
		/////////////////////////////
		extract($_POST);
		
		//$getData = "'$mmid','$txt_MModel_name','$select2','$select','$StockCatUnderName'";
		$getData = "'$mmid','$stockManufacturerID','$txtMname','$stockMachinNameID','$stockSectionID','$stockDepartmentID'";
		
		$objStockMachineModelInfo->CreateStockMachineModel($getData);

		
		echo "<b>Data Save Successsfull</b>";
		//require_once("../../includes/contents/create_machine_model.php");
		include '../contents/create_machine_model.php';
		
	
?>	