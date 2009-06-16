<?php

require_once("dbutils.class.php");
class finishItem extends DbUtils
{
	public function CreateFinishItem($getData)
	{
 		$sql = "INSERT INTO finish_item VALUES(".$getData.")";
		return parent::insertQuery($sql);		
	}	
	
	function getNewFinishItemId(){
		
		$id = parent::getLastId("finish_item","stock_item_id");
		return $id+1;
	}
	
	function UpdateFinishItem($StockItemId,
								$stkName,
								$stkGrp,
								$unitId,
								$altUnitId,
								$unitRel1,
								$unitRel2,
								$count,
								$lot,
								$txtStkcode,
								$desc,
								$opQnty,
								$OpRate,
								$opValue)
	{
	$sql="UPDATE finish_item SET stock_item_name ='$stkName',stock_item_grp_id='$stkGrp',stock_item_unit_id='unitId',	stock_alt_unit ='$altUnitId',unit_relation1 ='$unitRel1',unit_relation2 ='$unitRel2',count='$count',lot='$lot',
	stock_code_m_id='$txtStkcode', stock_item_desc ='$desc',stock_item_op_balance='$opQnty',stock_item_op_rate ='$OpRate',	stock_item_op_value='$opValue' WHERE stock_item_id='$StockItemId'";
	return parent::SELECTQuery($sql);
	}
	
	function retriveFinishItem(){
 		$sql = "SELECT * FROM finish_item 
 				ORDER BY stock_item_name";
		return parent::SELECTQuery($sql);
		
	 }
	 
	function getStockItemById($id){
		
		$sql="	SELECT * FROM finish_item stock_item_id='$id'";	
			
		return parent::SELECTQuery($sql);
	}
	 
	function retriveStockItemByid($id){
		
			 $sql = "SELECT *FROM  finish_item WHERE stock_item_id='$id'";
			return parent::SELECTQuery($sql);
		}	
		function updateAddClBalance($item_code,$prev_cl,$qty){
				
				  $current_clB=$prev_cl+$qty; 
				 $sql= "Update  finish_item set stock_item_cl_balance='$current_clB' WHERE stock_item_id='$item_code'";
				return parent::updateQuery($sql);
		}
		
		function updateReceivedQty($item_code,$current_recieved_qty){
				
				
				  $sql= "Update finish_item  set 	stock_received_qty='$current_recieved_qty' WHERE stock_item_id='$item_code'";
				return parent::updateQuery($sql);
		}
		
	
}
  ?>
