<?php

require_once ("../../lib/count.class.php");
$objCountInfo = new Count();
extract($_POST);
	
		//get a new id
		/////////////////////////////
		$count_name =$_POST['count_name'];
		
		$getData = "'','$count_name'";
		
		$objCountInfo->CreateCount($getData);
	
		echo "<b>Data Save Successsfull</b>";
		
		include '../contents/create_count.php';
?>