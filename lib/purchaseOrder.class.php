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
 		$sql = "SELECT p_d.*,st.*,
				GROUP_CONCAT(scd.stock_code,' ') stock_code, 
				GROUP_CONCAT(spd.stock_part,' ') stock_part  
		FROM purchase_details p_d,  stock_item st ,
	    stock_code_details scd, stock_part_details spd
		where p_d.pm_id='$purchase_ms_id' And st.stock_item_id= p_d.stock_item_id
		AND 
			st.stock_code_m_id = scd.stock_code_m_id 
		AND
			st.stock_part_m_id= spd.stock_part_m_id
			 GROUP BY st.stock_item_id 	
		 ";
		return parent::selectQuery($sql);
 	}
 	
	function getNewId(){
		
		$id = parent::getLastId("purchase_master","pm_id");
		return $id+1;
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
	
	public function PrintPurchaseOrderById($id)
 	{
 		$sql = "SELECT p_d.*,st.*,pm.*,im.indent_id, im.indent_code,
				sup.sup_id,	sup.sup_name, sup.sup_address,
				siu.stock_item_unit_id,	siu.stock_item_unit_name,
				GROUP_CONCAT(scd.stock_code,' ') stock_code, 
				GROUP_CONCAT(spd.stock_part,' ') stock_part  
		FROM 
			purchase_details p_d,  stock_item st , purchase_master pm, supplier sup,
			stock_code_details scd, stock_part_details spd,indents_master im,stock_item_units siu
		where 
			p_d.pm_id='$id' 
		AND
			p_d.pm_id=pm.pm_id
		AND 
			im.indent_id=pm.indent_id
		AND
			sup.sup_id=pm.sup_id
		AND
			siu.stock_item_unit_id=st.stock_item_unit_id
		And 
			st.stock_item_id= p_d.stock_item_id
		AND 
			st.stock_code_m_id = scd.stock_code_m_id 
		AND
			st.stock_part_m_id= spd.stock_part_m_id
		
		GROUP BY st.stock_item_id 	
		 ";
		return parent::selectQuery($sql);
 	}

	
}
  ?>