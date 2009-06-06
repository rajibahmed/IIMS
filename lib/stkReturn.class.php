<?php

require_once("dbutils.class.php");
class StockReturn extends DbUtils
{
	public function CreateStockReturnDetails($getData)
 	{
 		 $sql = "INSERT INTO  stock_return_details VALUES(".$getData.")";
		return parent::insertQuery($sql);
 	}
	

 	
 	 
 	public function CreateStockReturnMaster($getData)
	{
 		  $sql = "INSERT INTO stock_return_master VALUES(".$getData.")";
		return parent::insertQuery($sql);		
	}	
	
	
	
	
}
	
		

  ?>