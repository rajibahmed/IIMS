<?php

require_once("dbutils.class.php");

/**
 * 
 */
class Purchaseorder extends DbUtils
{
	public function CreatePurchaseOrderDetails($getData)
 	{
 		  $sql = "INSERT INTO  purchase_details VALUES(".$getData.")";
		return parent::insertQuery($sql);
 	}
	

 	
 	 
 	public function CreatePurchaseOrderMaster($getData)
	{
 		  $sql = "INSERT INTO purchase_master VALUES(".$getData.")";
		return parent::insertQuery($sql);		
	}	
	
	public function RetrivePurchaseOrder()
 	{
 		$sql = 'SELECT * FROM purchase_master';
		return parent::selectQuery($sql);
 	}
 	
	public function RetrivePurchaseOrderByMsId($purchase_ms_id)
 	{
 		$sql = "SELECT p_d.*,st.* FROM purchase_details p_d,  stock_item st where p_d.pm_id='$purchase_ms_id' And st.stock_item_id= p_d.stock_item_id ";
		return parent::selectQuery($sql);
 	}
 	
 	
 	
 	/*-------------------------------------------------------
 	| List view for purchase
 	|
 	| @parameter 
 	| return array
 	|--------------------------------------------------------*/
 	public function find()
 	{
 		
 		$sql='	SELECT pm.*,sup.*
 				FROM purchase_master pm ,supplier sup
 				WHERE pm.sup_id=sup.sup_id';
 				
 		return	parent::selectQuery($sql);
 	}


 	
 	public function FindDetailsOfPurchase($id)
 	{
 		$sql='	SELECT pd.*,si.* 
 				FROM purchase_details pd ,stock_item si
 				WHERE 
 					pd.pm_id = '.$id.' 
 				AND
 					pd.stock_item_id=si.stock_item_id ';

 		return	parent::selectQuery($sql);
 	}
	
}
  ?>