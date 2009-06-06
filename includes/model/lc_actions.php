<?php

require_once ("../../lib/lc.class.php");
$objLcInfo = new LC();
extract($_POST);
	
		//get a new id
		/////////////////////////////
		$lc_name =$_POST['lc_name'];
		
		$getData = "'','$lc_name'";
		
		$objLcInfo->CreateLc($getData);
	
		echo "<b>Data Save Successsfull</b>";
		include '../contents/create_lc.php';
?>