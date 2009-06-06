<?php   
	
require_once("dbutils.class.php");

 class Department extends DbUtils{
 
	 var $id;
	 var $name;
	 var $user_count;
	 var $office_id;
	 var $parent_id;
	 var $created_at;
	 var $updated_at;
 	
	/*-------------------------------------------------------
	| Fetches all the Department info
	|
	| return array 
	|--------------------------------------------------------*/ 	
 	function GetDepartments()
	{
		$sql = 'SELECT * FROM departments';
		return parent::selectQuery($sql);
	} 
	
	function GetDepartmentsByID($id)
	{
		$sql = "SELECT * FROM departments WHERE department_id='$id'";
		return parent::selectQuery($sql);
	}

	/*-------------------------------------------------------
	| Department Create 
	|
	| @parameter string	
	| return resource link
	|--------------------------------------------------------*/
	function Create($getData)
	{
		$sql = "INSERT INTO departments  
				 VALUES (".$getData.")";
			 	
		return parent::insertQuery($sql);
	}
	
	/*-------------------------------------------------------
	| Updates the user under department
	|
	| @parameter integer
	| @return void
	|--------------------------------------------------------*/
	function UpdateCounterCache($department_id)
	{
		$sql='SELECT count(*) FROM USER WHERE user_department='.$department_id;
		$count = parent::selectQuery($sql);
		
		$sql = "UPDATE departments  
				SET department_user_count = $count 
				WHERE department_id=$department_id";
	
		parent::updateQuery($sql);
	}
	
	function updateDepartment($depid,$depOfficeID,$department_name)
	{
			
		$sql = "UPDATE departments  
				SET department_name = '$department_name',department_office_id='$depOfficeID' 
				WHERE department_id='$depid'";
	
		parent::updateQuery($sql);
	}
	
}	

?>