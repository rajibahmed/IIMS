<?php

require_once ("../../../lib/stock.class.php");
$objStockInfo = new Stock();


if(isset($_GET['delete']))
{
	
	$id=(int) $_GET['stc_itm_id'];
	if($objStockInfo->deleteStockEngineerItem($id)>0){
		echo "You have Deleted Succesfully";
		
	}
	else{
		echo "sorry record does not exists";
	}
	
}


?>