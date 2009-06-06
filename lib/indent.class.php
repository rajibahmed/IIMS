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
 				indents_master(indent_code,indent_remarks,created_at) 
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
 		$sql = "SELECT i_d.*,st.* 
 				FROM indent_details i_d,  stock_item st 
 				WHERE i_d.indent_master_id='$indent_ms_id' 
 				AND st.stock_item_id= i_d.stock_item_id ";
 				
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