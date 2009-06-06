<?php 
require_once("dbconnection.class.php");

abstract class DbUtils { 	

	//to insert record into table
    function insertQuery($query) { 
		$objDbCon = new DbConnection();
		$result=array();
		$result['value']= @mysql_query($query) or die ("Error in data insertion: ".mysql_error());
		$result['id']=mysql_insert_id();

		$objDbCon->DbDisconnect();
		return $result;
  	} //end function
	
	
	/*-------------------------------------------------------
	| This function now can return mysql resource
	| and fetched result set
	|
	| @parameter string $query
	| return boolean
	|--------------------------------------------------------*/
	
	function selectQuery($query) {  
		$objDbCon = new DbConnection();

		$result = @mysql_query($query) or die("Error in Select Query: ".mysql_error());
		$num_rows = @mysql_num_rows($result);

		if($num_rows>0)
		{
		    $parent_array = array();
			$count_row = 0;
			while($row = @mysql_fetch_assoc($result)){	 
		 		$parent_array[$count_row]  = $row ;
			  	$count_row = $count_row + 1 ;
		  	 } //end while	  
			@mysql_free_result($result); // to free the result set
			
			$objDbCon = new DbConnection();		
		  	return $parent_array  ;
		}
		else
		{
			return false;
		}

	} //end function    
	
	// to update records
	function updateQuery($query){
		$objDbCon = new DbConnection();

		$result = @mysql_query($query) or die("Error in Update Query: ".mysql_error());

		$objDbCon->DbDisconnect();
		return $result;
	} //end function
	
	// to delete records
	function deleteQuery($query){
		$objDbCon = new DbConnection();
		$result = @mysql_query($query) or die("Error in Delete Query: ".mysql_error());
		$deleted_rows=mysql_affected_rows();
		$objDbCon->DbDisconnect();
		return $deleted_rows;
	} //end function
	
	// to get a new id: mainly used for primary key field
	function getNewId($tableName, $idFieldName){
		$sql = "SELECT MAX($idFieldName) FROM $tableName";

		$objDbCon = new DbConnection();
		$result = @mysql_query($sql) or die("Error in getting new Id: ".mysql_error());
		if(@mysql_num_rows($result) > 0){
			$row = @mysql_fetch_row($result);
			
			$objDbCon->DbDisconnect();
			return ($row[0]+1);
		}else{
			
			return 1;
		}
	}
	
	
	// to get a new id: mainly used for primary key field
	function getLastId($tableName, $idFieldName){
		$sql = "SELECT MAX($idFieldName) FROM $tableName";

		$objDbCon = new DbConnection();
		$result = @mysql_query($sql) or die("Error in getting new Id: ".mysql_error());
		if(@mysql_num_rows($result) > 0){
			$row = @mysql_fetch_row($result);
			
			$objDbCon->DbDisconnect();
			return ($row[0]);
		}
	}
	
	function getServerDataTime(){
		$objDbCon = new DbConnection();
		$sql = "SELECT now()";
		$result = @mysql_query($sql) or die("Error in getting server datatime: ".mysql_error());
		if(@mysql_num_rows($result)>0){
			$row = @mysql_fetch_row($result);

			$objDbCon = new DbConnection();
			return $row[0];
		}
	}
	

}  //end class
  
?> 

