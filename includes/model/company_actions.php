<?php  
	require_once('../../lib/defination.class.php');
	require_once ("../../lib/company.class.php");
	
	$fields=array(	'name',
					'mailing_address',
					'address',
					'phone',
					'email',
					'f_date_start',
					'f_date_end'
				);
	
	$errors=array();
	
	if(isset($_POST['submit']))
	{
		$getData="'null',";	//for the primary key

		foreach($fields as $field )
		{
			if( !isset($_POST[$field]) or empty($_POST[$field]))
			{
				$errors[]='You have an error on this field :'. $field;	
			}
		}
		
		if(empty($errors))
		{
			foreach($fields as $field)
			{	
				$getData.="'".mysql_insertion_check($_POST[$field])."',";
			}
			
			$getData.= 'NOW(),NOW()'; 	//mysql now() is for created_at and updted_at
			$company= new Company();

			$company->Create($getData);		//Inserts the company info
		}
		else
		{
			foreach($errors as $error)
			{
				e( $error.' <br />');	
			}
		}
	}//end of sumbit
	
	/*-------------------------------------------------------
	| Update Actions
	|
	| @parameter submit
	| return 
	|--------------------------------------------------------*/
	elseif(isset($_POST['update']))
	{
		$company= new Company();
		$company->id = 				$_POST['id'];
		$company->name=				$_POST['name'];
		$comapny->mailing_name =	$_POST['mailing_address'];
		$company->address =			$_POST['address'];
		$company->phone =			$_POST['phone'];
		$company->email =			$_POST['email'];
		$company->financial_year_start=$_POST['f_date_start'];
		$company->financial_year_end =$_POST['f_date_end'];
		
		#print_r($company->id);
		$company->Update();

	}
?>