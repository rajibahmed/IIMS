<?php 


	require_once("dbutils.class.php");
 
	/**
	* User class add/edit/delete/grantPrivilage
	*/
 class User extends DbUtils{
 	
 	
 	var $uid;
  	var $properties= array();
	
 	function __construct()
 	{
 		$uid=null;
 		$properties = array(
	 				'name'=>'',
	 				'login'=>'',
	 				'email'=>'',
	 				'password'=>'',
	 				'address'=>'',
	 				'contact'=>'',
	 				'department'=>null,
	 				'designation'=>'',
	 				'role'=>null,
	 				'visible'=>1
	 			);	
 	}
 	
	function __set($field, $value)
   	{
       if (array_key_exists($field, $this->properties))
       {
           $this->properties[$field] = $value;
       }
   	}
	
	function __get($field)
    {
        if ($field == ‘userId’)
        {
            return $this->uid;
        }
        else 
        {
            return $this->properties[$field];
        }
    }
	
   	function GetById($id)
	{
		$sql='SELECT * FROM users WHERE user_id='.$id;
		$val = parent::selectQuery($sql);
		print_r($val);
		if(isset($val))
		{
			$this->name  	= $val['user_name'];
			$this->email 	= $val['user_email'];
			$this->address	= $val['user_address'];
			$this->password = $val['user_pass_digest'];
			$this->contact	= $val['user_contact'];
			$this->department=$val['user_department'];
			$this->visible	 = $val['visible'];
			$this->phone 	= $val['user_phone'];
			$this->login 	= $val['user_login'];
			$this->designation = $val['user_designation'];
		}	
		return $this;

	}
     	
 	
	/*-------------------------------------------------------
	| Create user by an admin
	|
	| @parameter string sql
	| return boolean
	|--------------------------------------------------------*/
	function Create($getData)
	{
 		$sql = "INSERT INTO users VALUES(".$getData.")";
		return parent::insertQuery($sql);
	}
	
	
	/*-------------------------------------------------------
	| Checks admin has put same password twice
	|
	| @parameters string pass,string conf
	| @return boolean
	|--------------------------------------------------------*/
	function ConfirmPassword($pass,$confirm_pass)
	{
		return ($pass == $confirm_pass) ? true : false;
	} 


	/*-------------------------------------------------------
	| Login name Taken
	|
	| @parameter string
	| return boolean
	|--------------------------------------------------------*/
	function CheckLoginUniqueness($login)
	{
		$sql="SELECT * FROM users WHERE user_login='$login' ";
		return parent::selectQuery($sql);
	}
	
	
	/*-------------------------------------------------------
	| Email Taken
	|
	| @parameter String
	| return boolean
	|--------------------------------------------------------*/
	function CheckEmailUniqueness($email)
	{
		$sql="SELECT * FROM users WHERE user_email='$email'";
		return parent::selectQuery($sql);
	}
	
	function UserLogin($login)
	{
		$sql='SELECT * FROM users WHERE user_login='.$login.'  LIMIT 1';
		return parent::selectQuery($sql);
	}
	
	function CreateUserSection($getData)
	{
 		$sql = "INSERT INTO user_section VALUES(".$getData.")";
		return parent::insertQuery($sql);
	}
	
	function GetUserSection()
	{
		$sql='SELECT * FROM user_section';
		return parent::selectQuery($sql);
	}
	
	function GetUserList()
	{
		$sql='SELECT * FROM users';
		return parent::selectQuery($sql);
	}
	
	function GetUserListByID($id)
	{
		$sql="SELECT * FROM users WHERE user_id='$id'";
		return parent::selectQuery($sql);
	}
	
	function retriveUserInfoByID($id){
	{	 
		$sql = "SELECT usr . * , usr_sec . * ,depmnt .* , ofic.* 
				FROM users usr, user_section usr_sec, departments depmnt, offices ofic 
				WHERE  usr.user_id= '$id' 
					AND usr.user_sec=usr_sec.sec_id 
					AND usr.user_dept=depmnt.department_id 
					AND usr.user_office=ofic.office_id ";
		return parent::selectQuery($sql);
	}

}
		
}//end of User class

?>