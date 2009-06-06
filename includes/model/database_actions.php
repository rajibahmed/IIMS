<?php  
	require_once('../../lib/defination.class.php');
	require_once ("../../lib/forms.class.php");
	
	$fields=array('host','user','database');
	$errors=array();
	
	if(isset($_POST['submit']))
	{
			
		foreach($fields as $field )
		{
			if( !isset($_POST[$field]) or empty($_POST[$field]))
			{
				$errors[]='You have an error on this field :'. $field;	
			}
		}
		
		if(empty($errors))
		{
			print_r($_POST);
		}
		else{
			foreach($errors as $error)
			{
				e('You have an error on this field :'. $error.' <br />');	
			}
		}

	$databaseObj=new DatabaseCreation();
	$databaseObj->createDatabaseFromXml();
	}//end of submit
?>