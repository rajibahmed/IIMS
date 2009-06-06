<?php  
	require_once('../../lib/defination.class.php');
	require_once ("../../lib/department.class.php");
	$department=new Department();
	extract($_POST);
	
			
			
			$getData="'','$department_name','$office'";
			$department->Create($getData);	
			
			echo "Data Saved Successfully";	
			include('../contents/create_department.php');
		
?>