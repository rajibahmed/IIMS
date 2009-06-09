
<?php
require_once("dbutils.class.php");
 /*-------------------------------------------------------
 | This is the Stock class
 |--------------------------------------------------------*/
 class Quotation extends DbUtils{
 	
	//// Stock Group ////////////////////////////////
	
	function getNewQuotationId(){
		return parent::getNewId("quotation","qut_id");
	}
 	
 	public function CreateQuotationDetails($getData)
 	{
 		  $sql = "INSERT INTO  quotation_details VALUES(".$getData.")";
		return parent::insertQuery($sql);
 	}
	

 	
 	 
 	public function CreateQuotationMaster($getData)
	{
 		  $sql = "INSERT INTO quotation_master VALUES(".$getData.")";
		return parent::insertQuery($sql);		
	}	
	 
	 function retriveSupplierInfo(){
		$sql = "select  * from supplier";
		return parent::selectQuery($sql);
	}
	
	 function retriveSupplierInfobyIndentId($id){
		$sql = "select  s.sup_name from supplier s, quotation q where q.indend_id = '$id' AND s.sup_id=q.sup_id group by q.sup_id ";
		return parent::selectQuery($sql);
	}
	
	
	
	function retriveQuotationInfoByIndendId($id){
		$sql = "select  si.stock_item_name,q.stock_item_id from stock_item si,quotation q where q.indend_id = '$id' AND si.stock_item_id=q.stock_item_id group by q.stock_item_id";
		return parent::selectQuery($sql);
	}
	
	function retriveSupplierInfoByIndendIdandItemId($id,$itemId){
		$sql = "select  q.*, s.sup_name from quotation q,supplier s  where q.indend_id = '$id' AND stock_item_id='$itemId' AND s.sup_id=q.sup_id group by q.sup_id";
		return parent::selectQuery($sql);
	}
	//////////////////////////////////////////////////////////////
	
	
	function findQuotaionList()		
	{
		$sql="	SELECT qm.* ,sup.sup_name,im.*, group_concat(si.stock_item_name,' ')  items 
				FROM quotation_master qm,
					quotation_details qd,
					supplier sup,
					indents_master im,
					stock_item si 
				WHERE 
					qd.quot_master_id= qm.quot_master_id 	
					AND qm.sup_id=sup.sup_id
					AND qm.indent_id = im.indent_id
					AND qd.stock_item_id=si.stock_item_id 
				GROUP BY qd.quot_master_id
				";
				
		return parent::selectQuery($sql);
	}
	
	
	
	function FindDetailsOfQoutation($id){
		
		$sql="SELECT qd.* , si.*   
				FROM 
					quotation_details qd,
					stock_item si 
				WHERE 
					qd.stock_item_id=si.stock_item_id 
					AND qd.quot_master_id = $id 
					";
		//echo $sql;			
		return parent::selectQuery($sql);
	}

}

?>