<?php

require_once ("../../../lib/stock.class.php");
$objStockMachineInfo = new Stock();


if(isset($_POST['delete']))
{
	
	echo $id=(int) $_POST['id'];
	if($objStockMachineInfo->deleteStockMachine($id)>0){
		echo "U have Deleted Succesfully";
		
	}
	else{
		echo "sorry record does not exists";
	}
}


?>