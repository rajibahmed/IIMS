<?php  
	require_once('../../lib/defination.class.php');
	require_once ("../../lib/user.class.php");
	$user= new User();
	
	
	$fields=array(	
					'login',
					'password',
					'name',					
					'email',
					'address',
					'contact',
					'section',
					'department',
					'office',					
					'designation',
					'role',
					'visible',
					'level'	
				);


	$errors=array();
	#print_r($_POST);
	
	
		$getData="'null',";	//for the primary key

		foreach($fields as $field)
		{	
			if($field=='password')
			{
				$getData.="'".md5($_POST[$field])."',";
			}
			else
			{
				$getData.="'".mysql_insertion_check($_POST[$field])."',";
			}
		}
		
		$getData.= 'NOW(),NOW()'; 	//mysql now() is for created_at and updted_at
		
		#echo $getData;
		$user->Create($getData);		//Inserts the company info

			echo "Data Saved Successfully ";
			include('../contents/create_user.php');
		
	
?>