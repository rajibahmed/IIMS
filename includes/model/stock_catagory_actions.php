<?php

require_once ("../../lib/stock.class.php");
$objStockCatInfo = new Stock();
$btn_StkCat=$_POST['btn_StkCat'];
	
	
	if(isset($btn_StkCat)){
		
		
		
		
		//get a new id
		$StockCatId = $objStockCatInfo->getNewStockCatId();
		/////////////////////////////
		
		$StkCatName=$_POST['txtStkCatName'];
		$StkCatAlias=$_POST['txtStkAlias'];
		$StockCatUnderName="";	
		
		
		$getData = "'$StockCatId','$StkCatName','$StkCatAlias','$StockCatUnderName'";
		
		
		$objStockCatInfo->CreateStockCat($getData);

		
		echo "<b>Data Save Successsfull</b>";
		
	}
?>	