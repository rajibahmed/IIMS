
<?php
require_once("dbutils.class.php");
 /*-------------------------------------------------------
 | This is the Stock class
 |--------------------------------------------------------*/
 class Lot extends DbUtils{
 	
	//// Lot ////////////////////////////////
	function deleteLot($id){
		$sql = 'DELETE FROM lot WHERE lot_id='.$id;
		
		return parent::deleteQuery($sql);
	}
	
	
	function getNewLotId(){
		return parent::getNewId("lot","lot_id");
	}
 	
 	function CreateLot($getData){
 		$sql = "INSERT INTO lot VALUES(".$getData.")";
		return parent::insertQuery($sql);
	}
 
	 function retriveLotInfo(){
		$sql = "select  * from lot";
		return parent::selectQuery($sql);
	}
	
	
	function retriveLotById($lot_id){
		$sql = "select  * from lot WHERE lot_id ='$lot_id'";
		return parent::selectQuery($sql);
	}	
	
/*	function retriveSupplierById($supplier_id){
		$sql = "select * FROM supplier WHERE sup_id = '$supplier_id'";
		return parent::selectQuery($sql);
	}	*/	
	
	function updateLot($lot_id,$lot_name){
		$sql = "UPDATE lot SET lot_name='$lot_name' WHERE lot_id = '$lot_id'";
		return parent::selectQuery($sql);
	}		

//////////////////////////////////////////////////////////////
	
}

?>