<?php

require_once ("../../../lib/lc.class.php");
$objLcListAll = new LC();


if(isset($_POST['delete']))
{
	
	echo $id=(int) $_POST['id'];
	if($objLcListAll->deleteLc($id)>0){
		echo "U have Deleted Succesfully";
		
	}
	else{
		echo "sorry record does not exists";
	}
}


?>