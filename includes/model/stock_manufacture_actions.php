<?php
require_once('../../lib/defination.class.php');
require_once ("../../lib/stock.class.php");
$objectManufacture = new Stock();
$btn_StkDept=$_POST['btn_StkDept'];
	
	
	

		
		//get a new id
		$manufacId = $objectManufacture->getNewmanufacturerid();
		/////////////////////////////
		
		extract($_POST);
		
		$getData = "'$manufacId ','$txtMname','$mfg_year','$machName','$Section','$dept'";
		
		
		$objectManufacture->CreateStockmanufacturer ($getData);
			echo "<b>Data Save Successsfull</b>";
		
		
		include '../contents/create_stock_manufacture.php';
		
	
?>	
