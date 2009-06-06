<?php
require_once ("../../lib/department.class.php");

$objDepartmentUpdate = new Department();
	$depid=$_POST['depid'];
	$depOfficeID=$_POST['officeName'];
	$department_name=$_POST['department_name'];
	
	
			$objDepartmentUpdate->updateDepartment($depid,$depOfficeID,$department_name);
			echo "<b>Data Save Successsfull<b>";
		
?>