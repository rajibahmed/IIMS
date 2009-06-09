<?php

require_once("dbutils.class.php");
class rawItem extends DbUtils
{
	public function CreateRawStockItem($getData)
	{
 		  $sql = "INSERT INTO raw_item VALUES(".$getData.")";
		return parent::insertQuery($sql);		
	}	
	
	function getNewId(){
		
		$id = parent::getLastId("raw_item","stock_item_id");
		return $id+1;
	}
	
	
	
}
  ?>
