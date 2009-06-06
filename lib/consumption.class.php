<?php  


require_once("dbutils.class.php");

/**
 * 
 */
class Consumption extends DbUtils
{
	
 	public function CreateConsumptionMaster($getData)
	{
 		 $sql = "INSERT INTO
 					consumptions_master
 					VALUES(".$getData.")";
		#echo $sql;		
		return parent::insertQuery($sql);		
	}
	
		
	
	public function CreateConsumptionDetails($getData)
	{
	  $sql = "INSERT INTO
 					consumption_details 
 					VALUES($getData)";

		return parent::insertQuery($sql);		
		
	}	
	
	
	function getNewId(){
		
		$id = parent::getLastId("consumptions_master","cm_id");
		return $id+1;
	}
	
	
	
	public function find()
	{
		$sql='	SELECT * 
				FROM consumptions_master cm , consumption_details cd,stock_item 				 si
				WHERE cm.cm_id=cd.consumptions_master_id
				AND si.stock_item_id = cd.stock_item_id 	
				ORDER BY cm.created_at DESC
				';
				
	 	return parent::selectQuery($sql);
	}

	
}

?>