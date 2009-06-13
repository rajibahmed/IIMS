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
		$sql="	SELECT cm.*,cd.* ,GROUP_CONCAT(si.stock_item_name,' ') stock_item_name
				FROM consumptions_master cm , 
					consumption_details cd,
					stock_item si
				WHERE 
					cm.cm_id = cd.consumptions_master_id
					AND si.stock_item_id = cd.stock_item_id 
				
				GROUP BY cd.consumptions_master_id
				ORDER BY cm.created_at DESC
				";
				
	 	return parent::selectQuery($sql);
	}
	
	 function retriveIssueMasterNo(){
		$sql = "select  * from consumptions_master";
		return parent::selectQuery($sql);
	}
	
	
	
	public function FindDetailsOfConsumption($id)
	{
		$sql="	SELECT cd.*, si.*, cm.*, siu.* ,
					GROUP_CONCAT(scd.stock_code,' ') stock_code,
					GROUP_CONCAT(spd.stock_part,' ') stock_part 
						
				FROM consumptions_master cm, consumption_details cd, stock_item si,stock_item_units siu,
				 stock_code_details scd, stock_part_details spd
				
				WHERE 
					cd.stock_item_id = si.stock_item_id
				AND 
					si.stock_code_m_id = scd.stock_code_m_id 
				AND
					cd.consumptions_master_id=$id
				AND
					si.stock_part_m_id= spd.stock_part_m_id 
				AND 
					cd.consumptions_master_id =cm.cm_id
				AND
					si.stock_item_unit_id =siu.stock_item_unit_id
					
				 GROUP BY si.stock_item_id";
					
		return parent::selectQuery($sql);
	}

}

?>