<?php
require_once('../../lib/defination.class.php');
require_once ("../../lib/stock.class.php");
$objectMachine = new Stock();
$btn_StkDept=$_POST['btn_StkDept'];
	
	


		
		//get a new id
		$mId = $objectMachine->getNewMachineid();
		/////////////////////////////
		
		extract($_POST);
		
		$getData = "'$mId ','$txtMname','$stockSectionID','$stockDepartmentID'";
		
		
		$objectMachine->CreateNewMachine($getData);

		
		echo "<b>Data Save Successsfull</b>";
		include '../contents/create_stock_machine.php';
		
		
	
?>	
