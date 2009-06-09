<?php

require_once("dbutils.class.php");
class finishItem extends DbUtils
{
	public function CreateFinishItem($getData)
	{
 		  $sql = "INSERT INTO finish_item VALUES(".$getData.")";
		return parent::insertQuery($sql);		
	}	
	
	function getNewFinishItemId(){
		
		$id = parent::getLastId("finish_item","stock_item_id");
		return $id+1;
	}
	
	
	
}
  ?>
