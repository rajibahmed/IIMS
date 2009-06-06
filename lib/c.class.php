
<?php
require_once("dbutils.class.php");
 /*-------------------------------------------------------
 | This is the Stock class
 |--------------------------------------------------------*/
 class Stock extends DbUtils{
 	
	//// Stock Group ////////////////////////////////
	
	function getNewStockGrpId(){
		return parent::getNewId("stock_group","stock_group_id");
	}
 	
 	function CreateStockGroup($getData){
 		$sql = "INSERT INTO stock_group VALUES(".$getData.")";
		return parent::insertQuery($sql);
		
	 }
	 
	 function retriveStockGroupUnderInfo(){
		$sql = "select  stock_group_name,stock_group_id from stock_group ";
		return parent::selectQuery($sql);
	}
	
	//////////////////////////////////////////////////////////////
	
	//// Stock Catagory ////////////////////////////////
	
	function getNewStockCatId(){
		return parent::getNewId("stock_catagory","stock_cat_id");
	}
 	
 	function CreateStockCat($getData){
 		$sql = "INSERT INTO stock_catagory VALUES(".$getData.")";
		return parent::insertQuery($sql);
		
	 }
	 
	 function retriveStockCatUnderInfo(){
		$sql = "select  stock_cat_name,stock_cat_id from stock_catagory ";
		return parent::selectQuery($sql);
	}
	
	//////////////////////////////////////////////////////////////
	


}

?>