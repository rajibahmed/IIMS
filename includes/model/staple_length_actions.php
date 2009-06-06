<?php

require_once ("../../lib/staple_length.class.php");
$objSta_LenInfo = new Sta_Len();
extract($_POST);
	
		//get a new id
		/////////////////////////////
		$sta_len_name =$_POST['sta_len_name'];
		
		$getData = "'','$sta_len_name'";
		
		$objSta_LenInfo->CreateSta_Len($getData);
	
		echo "<b>Data Save Successsfull</b>";
		include '../contents/create_staple_length.php';
?>