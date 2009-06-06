<?php

require_once ("../../lib/stock.class.php");
$objStockGroupInfo = new Stock();


		//get a new id
		$StockGrpId = $objStockGroupInfo->getNewStockGrpId();
		/////////////////////////////
		
		 $StkGrpName=$_POST['txtStkGrpName'];
		
		 $stock_group_parent_id=$_POST['grpID'];	
		
		
		 $getData = "'$StockGrpId','$StkGrpName','$stock_group_parent_id'";
		
		 /// Check Duplicate Stock Grp ///
		 	
		 $grpData=$objStockGroupInfo->retriveStockGroupUnderInfo();
		 
		 $duplicateGrp='';
		 for($i=0;$i<count($grpData);$i++)
		 {
		 	if($StkGrpName==$grpData[$i]["stock_group_name"])
			{
				echo "<b>Duplicate Group Name<b>";
				 $duplicateGrp=1;
			}
		 
		 } 
		 
		 /////////////////////////////////////
		if($duplicateGrp!=1)
		{
			$objStockGroupInfo->CreateStockGroup($getData);
				echo "<b>Data Save Successsfull<b>";
		}	
		
		include '../contents/ca_create_stock_group.php';
		
		
	
?>	