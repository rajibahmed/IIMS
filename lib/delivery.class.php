<?php

require_once("dbutils.class.php");
class Delivery extends DbUtils
{
	public function CreateDeliveryDetails($getData)
 	{
 		  $sql = "INSERT INTO  delivery_challan_details VALUES(".$getData.")";
		return parent::insertQuery($sql);
 	}
	

 	
 	 
 	public function CreateDeliveryMaster($getData)
	{
 		  $sql = "INSERT INTO  delivery_challan_master VALUES(".$getData.")";
		return parent::insertQuery($sql);		
	}	
	
	function getNewId(){
		
		$id = parent::getLastId("delivery_challan_master","delivery_challan_id");
		return $id+1;
	}
	
	public function findDeliveryChalanList()
	{
		$sql="	SELECT dcm.*,dcd.*,gpm.gate_pass_id,gpm.gate_pass_no, GROUP_CONCAT(si.stock_item_name,',')stock_item_name
				FROM delivery_challan_master dcm, delivery_challan_details dcd, stock_item si, gate_pass_master gpm
				WHERE dcm.delivery_challan_id=dcd.delivery_challan_m_id
				AND si.stock_item_id= dcd.stock_item_id
				AND dcd.gate_pass_no=gpm.gate_pass_id
				GROUP BY dcd.delivery_challan_m_id
				";
		
		return parent::selectQuery($sql);
	}	
	
	public function FindDetailsOfDelivery($id)
	{
		echo $sql="	SELECT dcd.*,si.* ,siu.stock_item_unit_id, siu.stock_item_unit_name, gpm.gate_pass_id,gpm.gate_pass_no, GROUP_CONCAT(scd.stock_code,' ') stock_code
				FROM 
					delivery_challan_details dcd, stock_item si, stock_code_details scd, 
					gate_pass_master gpm, stock_item_units siu
				WHERE 
					dcd.stock_item_id = si.stock_item_id
				AND 
					si.stock_code_m_id = scd.stock_code_m_id 
				AND
					dcd.delivery_challan_m_id=$id
				AND
					dcd.gate_pass_no=gpm.gate_pass_id	
				AND
					si.stock_item_unit_id = siu.stock_item_unit_id
				 GROUP BY si.stock_item_id
				";
					
		return parent::selectQuery($sql);
	}	
	
	public function PrintDetailsOfDelivery($id)
	{
		$sql="	SELECT dcd.*,dcm.*,si.* ,siu.stock_item_unit_id, siu.stock_item_unit_name, gpm.gate_pass_id,gpm.gate_pass_no, GROUP_CONCAT(scd.stock_code,' ') stock_code
				FROM 
					delivery_challan_details dcd, stock_item si, stock_code_details scd, 
					gate_pass_master gpm, stock_item_units siu,delivery_challan_master dcm
				WHERE 
					dcm.delivery_challan_id=dcd.delivery_challan_m_id
				AND
					dcd.stock_item_id = si.stock_item_id
				AND 
					si.stock_code_m_id = scd.stock_code_m_id 
				AND
					dcd.delivery_challan_m_id=$id
				AND
					dcd.gate_pass_no=gpm.gate_pass_id	
				AND
					si.stock_item_unit_id = siu.stock_item_unit_id
				 GROUP BY si.stock_item_id
				";
					
		return parent::selectQuery($sql);
	}		
	
	
}
  ?>