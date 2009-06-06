<?php

require_once ("../../lib/staple_length.class.php");
$objSta_LenInfo = new Sta_Len();
extract($_POST);
		
		$Sta_Len_name =$_POST['sta_len_name'];
		$Sta_Lent_id =$_POST['sta_len_id'];
		
			$objSta_LenInfo->updateSta_len($Sta_Lent_id,$Sta_Len_name);
				echo "<b>Data Save Successsfull<b>"; 
			
		
	
?>	