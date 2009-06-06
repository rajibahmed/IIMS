<?php

require_once ("../../../lib/staple_length.class.php");
$objSta_LenListAll = new Sta_Len();


if(isset($_POST['delete']))
{
	
	echo $id=(int) $_POST['id'];
	if($objSta_LenListAll->deleteStaple_len($id)>0){
		echo "U have Deleted Succesfully";
		
	}
	else{
		echo "sorry record does not exists";
	}
}


?>