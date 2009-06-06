<?php
require_once ("../../lib/stock.class.php");

$objStockGroupUpdate = new Stock();

	$StkGrpName=$_POST['txtStkGrpName'];
	$stock_group_parent_id=$_POST['grpID'];	
	$s_grp_id = $_POST['s_grp_id'];

		if($StkGrpName!=NULL)
		{
			$objStockGroupUpdate->updateStockGroup($s_grp_id,$StkGrpName,$stock_group_parent_id);
			echo "<b>Data Save Successsfull<b>";
		}	
		
?>