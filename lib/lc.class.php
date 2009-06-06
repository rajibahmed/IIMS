
<?php
require_once("dbutils.class.php");
 /*-------------------------------------------------------
 | This is the Stock class
 |--------------------------------------------------------*/
 class LC extends DbUtils{
 	
	//// LC ////////////////////////////////
	function deleteLc($id){
		$sql = 'DELETE FROM lc WHERE lc_id='.$id;
		
		return parent::deleteQuery($sql);
	}
	
	 function CreateLc($getData){
 		$sql = "INSERT INTO lc VALUES(".$getData.")";
		return parent::insertQuery($sql);
	}

	function retriveLcInfo(){
		$sql = "select  * from lc";
		return parent::selectQuery($sql);
	}
	
	function retriveLcById($id){
		$sql = "select  * from lc WHERE lc_id ='$id'";
		return parent::selectQuery($sql);
	}
	
	function updateLc($lc_id,$lc_name){
		$sql = "UPDATE lc SET lc_name='$lc_name' WHERE lc_id = '$lc_id'";
		return parent::selectQuery($sql);
	}
/*	
		
	


	 function retriveCountInfo(){
		$sql = "select  * from count";
		return parent::selectQuery($sql);
	}
	
	
*/
//////////////////////////////////////////////////////////////
	
}

?>