<?php 


	require_once("dbutils.class.php");
 
	/**
	* User class add/edit/delete/grantPrivilage
	*/
 class Section extends DbUtils{
 
 	function CreateUserSection($getData)
	{
 		$sql = "INSERT INTO user_section VALUES(".$getData.")";
		return parent::insertQuery($sql);
	}
	
	function GetUserSection()
	{
		$sql='SELECT * FROM user_section';
		return parent::selectQuery($sql);
	}
	
	function GetUserSectionById($id)
	{
		$sql="SELECT * FROM user_section WHERE sec_id='$id'";
		return parent::selectQuery($sql);
	}
	
	function GetSectionByID($id)
	{
		$sql = "SELECT usr_sec . * ,depmnt .* , ofic.* 
					FROM user_section usr_sec, departments depmnt, offices ofic 	
					WHERE  usr_sec.sec_id= '$id' 
					AND usr_sec.dep_id=depmnt.department_id	
					AND usr_sec.office_id=ofic.office_id ";
		return parent::selectQuery($sql);
	}
	
	function updateSection($secid,$section_name,$department,$officeName)
	{
			
		$sql = "UPDATE user_section  
				SET sec_name = '$section_name',dep_id='$department',office_id='$officeName'
				WHERE sec_id='$secid'";
	
		parent::updateQuery($sql);
	}
	
 
 }
 ?>