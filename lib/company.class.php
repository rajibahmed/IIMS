<?php  
require_once("dbutils.class.php");

 /*-------------------------------------------------------
 | This is the Company class
 |--------------------------------------------------------*/
 class Company extends DbUtils{
 	
 	var $name;
 	var $mailing_name;
 	var $email;
 	var $phone;
 	var $address;
 	var $financial_year_start;
 	var $financial_year_end;
 	
 	
 	function Create($getData){
 		$sql = "INSERT INTO companies VALUES(".$getData.")";
		return parent::insertQuery($sql);
	 }//end of company class
	
	 
	/*-------------------------------------------------------
	|  Comments about this function 
	|
	| @parameter list parameters
	| return array
	|--------------------------------------------------------*/
	 
	function Select($id,$name='')
	{
		if(is_numeric($id))
		{
			$sql='select * from company where id='.$id;
			$value = parent::selectQuery($sql);	
		}
		elseif(!isset($id) and isset($name) )
		{
			$sql="SELECT * FROM company WHERE name LIKE '%".$name."%'";
			$value = parent::selectQuery($sql);
		}
		return $value;
	}
	
	 
	/*-------------------------------------------------------
	| Boolean method to check company alredy created or not
	|
	| return boolean
	|--------------------------------------------------------*/	
	function CheckCreated()
	{	
		$sql="SELECT * FROM companies";
		return	parent::selectQuery($sql);
	}
	
	function Update(){
		
		$sql= 
		"UPDATE companies SET
		company_name='$this->name',
		company_mailing_name='$this->mailing_name',
		company_address='$this->address',
		company_phone='$this->phone',
		company_email='$this->email',
		company_financial_year_start='$this->financial_year_start',
		company_financial_year_end ='$this->financial_year_end',
		updated_at=NOW()	
		";
		 parent::updateQuery($sql);
	}
	
}
	

?>