<?php  
require_once("dbutils.class.php");

/**
* 
*/
class Office extends DbUtils
{
	/*-------------------------------------------------------
	| This get all the information about the office
	|
	| @parameter list parameters
	| return return type of function 
	|--------------------------------------------------------*/
	function GetOffices()
	{
		$sql='SELECT * FROM offices';
		return parent::selectQuery($sql);
	}	
	
	
	function Create($getData)
	{
		$sql = "INSERT INTO offices 
 		 		 VALUES (".$getData.")";
		 		 	
		return parent::insertQuery($sql);
	}	
	
	function GetOfficesByID($id)
	{
		$sql="SELECT * FROM offices WHERE office_id='$id'";
		return parent::selectQuery($sql);
	}
	
	function updateOfficeGroup($officeID,$officeName,$address,$phone,$mail){
		$sql = "UPDATE offices 
		SET office_name='$officeName',office_address='$address',office_phone='$phone',office_mail='$mail'  
		WHERE office_id = '$officeID'";
		return parent::selectQuery($sql);
	}
	
}


?>