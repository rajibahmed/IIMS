<?php  
require_once("dbutils.class.php");
/**
* 
*/
class Indent extends DbUtils
{
	

	public function CreateIndentDetails($getData)
 	{
 		$sql = "INSERT INTO indent_details VALUES(".$getData.")";
 		
 		return parent::insertQuery($sql);
 	}
	



 	function updateReqStatus($rm_id){
 		
 		$sql='UPDATE requisitions_master set status=3  WHERE rm_id='.$rm_id;	
 		
 		return parent::updateQuery($sql);
		
 	}
 	
 	
 	
 	 
 	public function CreateIndentMaster($getData)
	{
 		$sql = "INSERT INTO
 				indents_master( indent_id ,indent_code,indent_remarks,created_at) 
 				VALUES(".$getData.")";

		return parent::insertQuery($sql);		
	}	
	
	
	
	public function retriveIndendInfo(){
		
		$sql = "SELECT  indent_id,indent_code  
				FROM indents_master";
				
		return parent::selectQuery($sql);
	}
	
	
	
	public function RetriveIndentByMsId($indent_ms_id)
 	{
 		$sql = "SELECT i_d.*,st.* ,GROUP_CONCAT(scd.stock_code,' ') stock_code,
				GROUP_CONCAT(spd.stock_part,' ') stock_part 
 				FROM indent_details i_d,  stock_item st 
				, stock_code_details scd, stock_part_details spd
 				WHERE i_d.indent_master_id='$indent_ms_id' 
 				AND st.stock_item_id= i_d.stock_item_id
				AND st.stock_code_m_id = scd.stock_code_m_id 
				AND
					st.stock_part_m_id= spd.stock_part_m_id 	
				 GROUP BY st.stock_item_id
				
				 ";
 				
		return parent::selectQuery($sql);
 	}
	
	public function findIndentList()
	{
		$sql="	SELECT inm.*,ind.* ,GROUP_CONCAT(si.stock_item_name,' ') stock_item_name
				FROM  indents_master inm , 
					indent_details ind,
					stock_item si
				WHERE 
					inm.indent_id = ind.indent_master_id
					AND si.stock_item_id = ind.stock_item_id 
				
				GROUP BY ind.indent_master_id
				ORDER BY inm.created_at DESC
				";
				
	 	return parent::selectQuery($sql);
	}
 	
	public function FindDetailsOfIndent($id)
	{
		$sql="	SELECT ind.*, si.*, inm.*, siu.* ,
					GROUP_CONCAT(scd.stock_code,' ') stock_code,
					GROUP_CONCAT(spd.stock_part,' ') stock_part 
						
				FROM indents_master inm, indent_details ind, stock_item si,stock_item_units siu,
				 stock_code_details scd, stock_part_details spd
				
				WHERE 
					ind.stock_item_id = si.stock_item_id
				AND 
					si.stock_code_m_id = scd.stock_code_m_id 
				AND
					ind.indent_master_id=$id
				AND
					si.stock_part_m_id= spd.stock_part_m_id 
				AND 
					ind.indent_master_id =inm.indent_id
				AND
					si.stock_item_unit_id =siu.stock_item_unit_id
					
				 GROUP BY si.stock_item_id";
					
		return parent::selectQuery($sql);
	}
	
	public function PrintDetailsOfIndent($id)
	{
		$sql="	SELECT ind.*, si.*, inm.*, siu.* , req.*,
					GROUP_CONCAT(scd.stock_code,' ') stock_code,
					GROUP_CONCAT(spd.stock_part,' ') stock_part 
						
				FROM indents_master inm, indent_details ind, stock_item si,stock_item_units siu,
				 stock_code_details scd, stock_part_details spd , requisitions_master req
				
				WHERE 
					ind.stock_item_id = si.stock_item_id
				AND 
					si.stock_code_m_id = scd.stock_code_m_id 
				AND
					ind.indent_master_id=$id
				AND
					si.stock_part_m_id= spd.stock_part_m_id 
				AND 
					ind.indent_master_id =inm.indent_id
				AND
					si.stock_item_unit_id =siu.stock_item_unit_id
				AND
					ind.requisition_master_id =req.rm_id	
					
				 GROUP BY si.stock_item_id";
					
		return parent::selectQuery($sql);
	}
	

	
	
 	
	public function RetriveIndentInfoByIndendId($indent_ms_id)
 	{
 		$sql = "SELECT qum.quot_master_id, ind.indent_code ,sup.sup_name 
 				FROM indents_master ind,  supplier sup, quotation_master qum 
 				WHERE qum.indent_id='$indent_ms_id' 
 				AND ind.indent_id= qum.indent_id 
 				AND sup.sup_id=qum.sup_id ";
		return parent::selectQuery($sql);
 	}
	
 	
 	
 	
	public function RetriveQuotationDetailsInfoByIndendId($quot_ms_id)
 	{
 		$sql = "SELECT qud.*, stki.stock_item_name 
 				FROM quotation_details qud, quotation_master qum, stock_item stki 
 				WHERE qud.quot_master_id='$quot_ms_id' 
 				AND stki.stock_item_id= qud.stock_item_id 
 				GROUP BY qud.stock_item_id ";
		return parent::selectQuery($sql);
 	}
	
 	
 	function getNewIndentId(){
		return parent::getNewId("indents_master","indent_id");
	}
	

}


?>