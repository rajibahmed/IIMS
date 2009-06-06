<?php

require_once("dbutils.class.php");
class MRR extends DbUtils
{
	public function CreateMRRDetails($getData)
 	{
 		  $sql = "INSERT INTO  mrr_details VALUES(".$getData.")";
		return parent::insertQuery($sql);
 	}
	

 	
 	 
 	public function CreateMRRMaster($getData)
	{
 		  $sql = "INSERT INTO mrr_master VALUES(".$getData.")";
		return parent::insertQuery($sql);		
	}	
	
	function getNewId(){
		
		$id = parent::getLastId("mrr_master","mrr_id");
		return $id+1;
	}
	
	
}
  ?>