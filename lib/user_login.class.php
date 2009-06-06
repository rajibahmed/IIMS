<?php
//search key class
require_once("dbutils.class.php");

class user_login extends DbUtils {

	/*function insertBankInfo($getData){
		$sql = "INSERT INTO tbl_banks VALUES(".$getData.")";
		return parent::insertQuery($sql);
	}
	
	function getNewBankId(){
		return parent::getNewId("tbl_banks","bank_id");
	}
	
	function retriveBankInfo(){
		$sql = "select  *from tbl_banks ";
		return parent::selectQuery($sql);
	}*/
	
	function retriveUserInfoByUsernamePassword($username, $password, $selresellerType){
		 $sql = "select  * from users where user_login ='$username' AND user_pass_digest=MD5('$password')";
		return parent::selectQuery($sql);
	}
	
	/*function retriveReseller2InfoByUsernamePassword($username, $password){
		$sql = "select  * from resellers2 where login ='$username' AND password='$password'";
		return parent::selectQuery($sql);
	}
	
	function retriveReseller1InfoByUsernamePassword($username, $password){
		$sql = "select  * from resellers1 where login ='$username' AND password='$password'";
		return parent::selectQuery($sql);
	}*/
	/*function UpdateBankInfoById($updateData){
	    $sql = "Update tbl_banks $updateData ";
		return parent::selectQuery($sql);
	}*/
	
	public function userBelongsToDept($id)
	{
		$sql = "SELECT department_name FROM departments WHERE department_id=".$id;
		return parent::selectQuery($sql);
	}
	


	
}
?>
