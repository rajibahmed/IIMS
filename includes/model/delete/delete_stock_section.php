<?php

require_once ("../../../lib/stock.class.php");
$objStockInfo = new Stock();


if(isset($_POST['delete']))
{
	
	echo $id=(int) $_POST['id'];
	if($objStockInfo->deleteStockSection($id)>0){
		echo "U have Deleted Succesfully";
		
	}
	else{
		echo "sorry record does not exists";
	}
}


?>