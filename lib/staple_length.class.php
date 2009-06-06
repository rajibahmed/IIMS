<?php
require_once("dbutils.class.php");
 /*-------------------------------------------------------
 | This is the staple class
 |--------------------------------------------------------*/
 class Sta_Len extends DbUtils{
 
 	function deleteStaple_len($id){
		$sql = 'DELETE FROM staple_length WHERE sta_len_id='.$id;
		
		return parent::deleteQuery($sql);
	}
 	
	 function CreateSta_Len($getData){
 		$sql = "INSERT INTO staple_length VALUES(".$getData.")";
		return parent::insertQuery($sql);
	}
	
	function retriveSta_LenInfo(){
		$sql = "select  * from staple_length";
		return parent::selectQuery($sql);
	}

	function retriveSta_LenById($id){
		$sql = "select  * from staple_length WHERE sta_len_id ='$id'";
		return parent::selectQuery($sql);
	}
	
	function updateSta_len($Sta_Lent_id,$Sta_Len_name){
		$sql = "UPDATE staple_length SET sta_len_name='$Sta_Len_name' WHERE sta_len_id = '$Sta_Lent_id'";
		return parent::selectQuery($sql);
	}
	
}

?>