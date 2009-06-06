<?php
require_once ("../../lib/stock.class.php");

$objStockDepartUpdate = new Stock();

	$StkDepartName=$_POST['txtStkdeptName'];
	$stock_depart_parent_id=$_POST['deptPId'];	
	$stk_depart_id = $_POST['stk_depart_id'];

		if($StkDepartName!=NULL)
		{
			$objStockDepartUpdate->updateStockDepartment($stk_depart_id,$StkDepartName,$stock_depart_parent_id);
				echo "<b>Data Save Successsfull<b>"; 
		}	
		
?>