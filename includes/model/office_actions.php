<?php  
	require_once('../../lib/defination.class.php');
	require_once ("../../lib/office.class.php");
	
	$fields=array('name','address','phone','mail');
	
		$getData="'null',";	//for the primary key
		foreach($fields as $field)
		{
			$getData.= "'".mysql_insertion_check($_POST[$field])."',";
		}
		 
		$getData.="NOW(),NOW()";
		 $getData;
		
		$office = new Office;
		if($office->Create($getData))
		{
			echo "Data Saved Successfully ";
			include('../contents/create_office.php');

			
		}
	
	
		

?>