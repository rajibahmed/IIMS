<?php

require_once("dbutils.class.php");
class rawItem extends DbUtils
{
	public function CreateRawStockItem($getData)
	{
 		  $sql = "INSERT INTO raw_item VALUES(".$getData.")";
		return parent::insertQuery($sql);		
	}	
	
	function getNewId(){
		
		$id = parent::getLastId("raw_item","stock_item_id");
		return $id+1;
	}
	
	function retriveRawItem()
	{
		$sql="SELECT * FROM raw_item";
		return parent::SELECTQuery($sql);
	}	
	
	function retriveRawItemByID($stc_itm_id)
	{
		$sql="SELECT * FROM raw_item WHERE stock_item_id='$stc_itm_id'";
		return parent::SELECTQuery($sql);
	}		
	
	function UpadteRawItemByID($stock_item_id,
									$stkName,
									$stkGrp,
									$unitId,
									$altUnitId,
									$unitRel1,
									$unitRel2,
									$length,
									$txtStkcode,
									$desc,
									$opQnty,
									$OpRate,
									$opValue
									)
	{
		$sql="UPDATE raw_item 
		SET stock_item_name='$stkName',
		stock_item_grp_id ='$stkGrp',
		stock_item_unit_id='$unitId',
		 stock_alt_unit='$altUnitId',
		 unit_relation1='$unitRel1',
		 unit_relation2 ='$unitRel2',
		 length='$length',
		 stock_code_m_id='$txtStkcode',
		 stock_item_desc ='$desc',
		 stock_item_op_balance='$opQnty', 
		 stock_item_op_rate='$OpRate',
		 stock_item_op_value='$opValue' 
		 WHERE stock_item_id='$stock_item_id'";
		return parent::selectQuery($sql);
	}
	
	
	function getStockItemById($id){
		
		$sql="	SELECT * FROM finish_item stock_item_id='$id'";	
			
		return parent::SELECTQuery($sql);
	}
	 
	function retriveStockItemByid($id){
		
			 $sql = "SELECT *FROM  raw_item WHERE stock_item_id='$id'";
			return parent::SELECTQuery($sql);
		}	
		function updateAddClBalance($item_code,$prev_cl,$qty){
				
				  $current_clB=$prev_cl+$qty; 
				 $sql= "Update  raw_item set stock_item_cl_balance='$current_clB' WHERE stock_item_id='$item_code'";
				return parent::updateQuery($sql);
		}
		
		function updateReceivedQty($item_code,$current_recieved_qty){
				
				
				  $sql= "Update raw_item  set 	stock_received_qty='$current_recieved_qty' WHERE stock_item_id='$item_code'";
				return parent::updateQuery($sql);
		}
		
		function updateClBalance($item_code,$prev_cl,$qty){
				
				 $current_clB=$prev_cl-$qty;
				 $sql= "Update raw_item set stock_item_cl_balance='$current_clB' WHERE stock_item_id='$item_code'";
				return parent::updateQuery($sql);
		}   
		
		function updateIssueQtyANDlocation($item_code,$currentIssueQty,$issueLocation){
				
				
				  $sql= "Update raw_item set stock_issue_qty='$currentIssueQty' , issue_location='$issueLocation' WHERE stock_item_id='$item_code'";
				return parent::updateQuery($sql);
		}
		
	
	
	
	
}
  ?>
