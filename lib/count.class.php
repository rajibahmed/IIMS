
<?php
require_once("dbutils.class.php");
 /*-------------------------------------------------------
 | This is the Stock class
 |--------------------------------------------------------*/
 class Count extends DbUtils{
 	
	//// Lot ////////////////////////////////
	
	function deleteCount($id){
		$sql = 'DELETE FROM count WHERE count_id='.$id;
		
		return parent::deleteQuery($sql);
	}
	
	function retriveCountById($id){
		$sql = "select  * from count WHERE count_id ='$id'";
		return parent::selectQuery($sql);
	}	
	
 	function CreateCount($getData){
 		$sql = "INSERT INTO count VALUES(".$getData.")";
		return parent::insertQuery($sql);
	}

	 function retriveCountInfo(){
		$sql = "select  * from count";
		return parent::selectQuery($sql);
	}
	
	function updateCount($count_id,$count_name){
		$sql = "UPDATE count SET count_name='$count_name' WHERE count_id = '$count_id'";
		return parent::selectQuery($sql);
	}

//////////////////////////////////////////////////////////////
	
}

?>