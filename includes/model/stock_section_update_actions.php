<?php
require_once ("../../lib/stock.class.php");

$objStockDepartUpdate = new Stock();
	$stk_section_id = $_POST['stk_section_id'];
	$StkSectionName=$_POST['txtsectionName'];
	$stock_section_p_id=$_POST['select_stock_section'];
	$stock_section_depart_id=$_POST['StockCatUnderName'];		
	

		if($StkSectionName!=NULL)
		{
			$objStockDepartUpdate->updateStockSectionDepartment($stk_section_id,
																$StkSectionName,
																$stock_section_p_id,
																$stock_section_depart_id);
				echo "<b>Data Save Successsfull<b>"; 
		}	

		
	
?>	