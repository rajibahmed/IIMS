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
	
	public function findQCList()
	{
		$sql="	SELECT mm.*,md.*, GROUP_CONCAT(si.stock_item_name,',')stock_item_name
				FROM qc_master mm,qc_details md,stock_item si
				WHERE mm.qc_id=md.qc_m_id
				AND si.stock_item_id= md.stock_item_id
				GROUP BY md.qc_m_id
				";
		
		return parent::selectQuery($sql);
	}
	
	public function FindDetailsOfQC($id)
	{
		$sql="	SELECT md.*,si.* ,GROUP_CONCAT(scd.stock_code,' ') stock_code,
				GROUP_CONCAT(spd.stock_part,' ') stock_part 
				FROM qc_details md, stock_item si, stock_code_details scd, stock_part_details spd
				WHERE 
					md.stock_item_id = si.stock_item_id
				AND 
					si.stock_code_m_id = scd.stock_code_m_id 
				AND
					md.qc_m_id=$id
				AND
					si.stock_part_m_id= spd.stock_part_m_id 	
				 GROUP BY si.stock_item_id";
					
		return parent::selectQuery($sql);
	}	
	
	public function PrintDetailsOfQC($id)
	{
		 $sql="	SELECT qcd.*,si.* ,qcm.*, mrr.*,pr.* , sp.* 
				FROM 
					qc_details qcd,qc_master qcm, stock_item si, mrr_master mrr, 
					 purchase_master pr, supplier sp
				WHERE 
					qcd.stock_item_id = si.stock_item_id
				
				AND
					qcd.qc_m_id=$id
					
				AND
					qcm.qc_id=qcd.qc_m_id
				AND
					qcm.mrr_m_id=mrr.mrr_id 
				AND
					qcm.purchase_m_id=pr.pm_id 
				
				AND
					qcm.supplier_id=sp.sup_id			
					
				 GROUP BY si.stock_item_id";
					
		return parent::selectQuery($sql);
	}		
	
}
  ?>