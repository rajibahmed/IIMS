<?php

require_once ("../../lib/stock.class.php");
$objectStockdept = new Stock();
$btn_StkDept=$_POST['btn_StkDept'];
	
	


		
		//get a new id
		$StocktId = $objectStockdept->getNewStockdeptId();
		/////////////////////////////
		
		extract($_POST);
		
		$getData = "'$StocktId','$txtStkdeptName','$deptPId'";
		
		
		$objectStockdept->CreateStockDept($getData);

		echo "<b>Data Saved Successsfully<b>";
	
		include '../contents/create_stock_department.php';
	
?>	