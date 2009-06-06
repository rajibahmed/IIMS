<?php

require_once ("../../../lib/count.class.php");
$objCountListAll = new Count();


if(isset($_POST['delete']))
{
	
	echo $id=(int) $_POST['id'];
	if($objCountListAll->deleteCount($id)>0){
		echo "U have Deleted Succesfully";
		
	}
	else{
		echo "sorry record does not exists";
	}
}


?>