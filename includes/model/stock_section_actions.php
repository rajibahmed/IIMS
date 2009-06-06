<?php
require_once('../../lib/defination.class.php');
require_once ("../../lib/stock.class.php");
$objectStockSection = new Stock();
$btn_StkDept=$_POST['btn_StkDept'];
	
	


		
		//get a new id
		$StocktId = $objectStockSection->getNewStockSectId();
		/////////////////////////////
		
		extract($_POST);
		
		$getData = "'$StocktId','$txtsectionName','$select','$StockCatUnderName'";
		
		
		$objectStockSection->CreateStockSection($getData);

		
		echo "<b>Data Save Successsfull</b>";
		
		include '../contents/create_stock_section.php';
		
	
?>	