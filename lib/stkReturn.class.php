<?php

require_once("dbutils.class.php");
class StockReturn extends DbUtils
{
	public function CreateStockReturnDetails($getData)
 	{
 		 $sql = "INSERT INTO  stock_return_details VALUES(".$getData.")";
		return parent::insertQuery($sql);
 	}
	

 	
 	 
 	public function CreateStockReturnMaster($getData)
	{
 		  $sql = "INSERT INTO stock_return_master VALUES(".$getData.")";
		return parent::insertQuery($sql);		
	}	
	
	function getNewId(){
		
		$id = parent::getLastId("stock_return_master","stock_retun_m_id");
		return $id+1;
	}
	
	public function findStockReturnList()
	{
		$sql="	SELECT srm.*,srd.*, GROUP_CONCAT(si.stock_item_name,',')stock_item_name
				FROM 
					stock_return_master srm,stock_return_details srd,stock_item si
				WHERE 
					srm.stock_retun_m_id = srd.stk_return_m_id
				AND 
					si.stock_item_id= srd.stock_item_id
				GROUP BY srm.stock_retun_m_id
				";
		
		return parent::selectQuery($sql);
	}
	
	public function FindViewOfStockReturn($id)
	{
		$sql="	SELECT srd.*,si.* ,GROUP_CONCAT(scd.stock_code,' ') stock_code
				FROM 
					stock_return_details srd, stock_item si, stock_code_details scd
				WHERE 
					srd.stock_item_id = si.stock_item_id
				AND 
					si.stock_code_m_id = scd.stock_code_m_id 
				AND
					srd.stk_return_m_id=$id
				GROUP BY si.stock_item_id";
					
		return parent::selectQuery($sql);
	}	
	
	public function PrintDetailsOfStockReturn($id)
	{
		$sql="	SELECT srd.*,si.* ,srm.*,siu.*, GROUP_CONCAT(scd.stock_code,' ') stock_code
				FROM 
					stock_return_details srd,stock_return_master srm, stock_item si, 
					stock_code_details scd, stock_item_units siu
				WHERE 
					srd.stock_item_id = si.stock_item_id
				AND 
					si.stock_code_m_id = scd.stock_code_m_id 
				AND
					srd.stk_return_m_id=$id
				AND
					si.stock_item_unit_id =siu.stock_item_unit_id 	
				AND
					srm.stock_retun_m_id=srd.stk_return_m_id
				 GROUP BY si.stock_item_id";
					
		return parent::selectQuery($sql);
	}			
}
	
		

  ?>