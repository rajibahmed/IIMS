<?php

require_once ("../../lib/stock.class.php");
$objectStockSection = new Stock();
$btn_StkDept=$_POST['btn_StkDept'];
	
	
	if(isset($btn_StkDept)){

		
		//get a new id
		$StocktId = $objectStockSection->getNewStockSectId();
		/////////////////////////////
		
		extract($_POST);
		
		$getData = "'$StockDeptId','$txtStkdeptName','$deptPId'";
		
		
		$objStockSectInfo->CreateStockDept($getData);

		
		echo "<b>Data Save Successsfull</b>";
		require_once("../../includes/contents/create_stock_section.php");
		
	}
?>	