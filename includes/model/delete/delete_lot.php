<?php

require_once ("../../../lib/lot.class.php");
$objLotListAll = new Lot();


if(isset($_POST['delete']))
{
	
	echo $id=(int) $_POST['id'];
	if($objLotListAll->deleteLot($id)>0){
		echo "U have Deleted Succesfully";
		
	}
	else{
		echo "sorry record does not exists";
	}
}


?>