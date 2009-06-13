<?php

require_once("dbutils.class.php");
class GatePass extends DbUtils
{
	public function CreateGatePassDetails($getData)
 	{
 		  $sql = "INSERT INTO  gate_pass_details VALUES(".$getData.")";
		return parent::insertQuery($sql);
 	}
	

 	
 	 
 	public function CreateGatePassMaster($getData)
	{
 		  $sql = "INSERT INTO  gate_pass_master VALUES(".$getData.")";
		return parent::insertQuery($sql);		
	}	
	
	function getNewId(){
		
		$id = parent::getLastId("gate_pass_master","gate_pass_id");
		return $id+1;
	}
	
	 function retriveGatePassMasterNo(){
		$sql = "select  * from  gate_pass_master";
		return parent::selectQuery($sql);
	}
	
	public function findGatePass()
	{
		$sql="	SELECT gm.*,gpd.*, GROUP_CONCAT(si.stock_item_name,',')stock_item_name
				FROM gate_pass_master gm,gate_pass_details gpd,stock_item si
				WHERE gm.gate_pass_id=gpd.gate_pass_m_id
				AND si.stock_item_id= gpd.stock_item_id
				GROUP BY gpd.gate_pass_m_id
				";
		
		return parent::selectQuery($sql);
	}	
	
	public function FindDetailsOfGatePass($id)
	{
		 $sql="	SELECT cd.*,si.* ,gpm.*,cm.consumption_num,siu.* ,
	 			GROUP_CONCAT(scd.stock_code,' ') stock_code, 
				GROUP_CONCAT(spd.stock_part,' ') stock_part 
					
				FROM gate_pass_master gpm,gate_pass_details cd, 
				stock_item si, stock_code_details scd, stock_part_details spd,consumptions_master cm,stock_item_units siu
				WHERE 
					cd.stock_item_id = si.stock_item_id
				AND 
					si.stock_code_m_id = scd.stock_code_m_id 
				AND
					cd.gate_pass_m_id=1
				AND
					si.stock_part_m_id= spd.stock_part_m_id 
				AND 
					gpm.gate_pass_id = cd.gate_pass_m_id
				AND 
					cm.cm_id = gpm.ref_id 
				AND
					si.stock_item_unit_id =siu.stock_item_unit_id
					
					
						
				 GROUP BY si.stock_item_id";
					
		return parent::selectQuery($sql);
	}
	
	
	
	
}
  ?>