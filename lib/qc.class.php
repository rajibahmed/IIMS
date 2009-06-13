<?php

require_once("dbutils.class.php");
class QC extends DbUtils
{
	public function CreateQCDetails($getData)
 	{
 		   $sql = "INSERT INTO  qc_details VALUES(".$getData.")";
		return parent::insertQuery($sql);
 	}
	

 	
 	 
 	public function CreateQCMaster($getData)
	{
 		   $sql = "INSERT INTO qc_master VALUES(".$getData.")";
		return parent::insertQuery($sql);		
	}	
	
	function getNewId(){
		
		$id = parent::getLastId("qc_master","qc_id");
		return $id+1;
	}
	
	public function findMrrList()
	{
		$sql="	SELECT mm.*,md.*, GROUP_CONCAT(si.stock_item_name,',')stock_item_name
				FROM mrr_master mm,mrr_details md,stock_item si
				WHERE mm.mrr_id=md.mrr_m_id
				AND si.stock_item_id= md.stock_item_id
				GROUP BY md.mrr_m_id
				";
		
		return parent::selectQuery($sql);
	}
	
	public function FindDetailsOfMrr($id)
	{
		$sql="	SELECT md.*,si.* ,GROUP_CONCAT(scd.stock_code,' ') stock_code,
				GROUP_CONCAT(spd.stock_part,' ') stock_part 
				FROM mrr_details md, stock_item si, stock_code_details scd, stock_part_details spd
				WHERE 
					md.stock_item_id = si.stock_item_id
				AND 
					si.stock_code_m_id = scd.stock_code_m_id 
				AND
					md.mrr_m_id=$id
				AND
					si.stock_part_m_id= spd.stock_part_m_id 	
				 GROUP BY si.stock_item_id";
					
		return parent::selectQuery($sql);
	}	
	
	public function PrintDetailsOfMrr($id)
	{
		$sql="	SELECT md.*,si.* ,mm.*,siu.*, GROUP_CONCAT(scd.stock_code,' ') stock_code
				,
				GROUP_CONCAT(spd.stock_part,' ') stock_part 
				FROM 
					mrr_details md,mrr_master mm, stock_item si, stock_code_details scd, stock_item_units siu, stock_part_details spd
				WHERE 
					md.stock_item_id = si.stock_item_id
				AND 
					si.stock_code_m_id = scd.stock_code_m_id 
				AND
					md.mrr_m_id=$id
				AND
					si.stock_item_unit_id =siu.stock_item_unit_id 	
				AND
					mm.mrr_id=md.mrr_m_id
				AND
					si.stock_part_m_id= spd.stock_part_m_id 	
				 GROUP BY si.stock_item_id";
					
		return parent::selectQuery($sql);
	}		
	
}
  ?>