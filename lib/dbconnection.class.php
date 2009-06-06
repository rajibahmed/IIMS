<?php 
#include 'dbconfig.xml';
class DbConnection{ 
	var $user;
	var $password;
	var $host;
	var $database;
	

	var $linkId;						//database link identifier
 	var $db;							//database  identifier
	var $close;							//database close
	
	//to connect host and database
	function DbConnection() {   
		/*if(file_exists('../lib/dbconfig.xml')){
			
		    $xml = simplexml_load_file('../lib/dbconfig.xml');
			$this->user =$xml->user;
			$this->password =$xml->password;
			$this->host =$xml->host;
			$this->database =$xml->name;
		    
		} 
		else{
			
		    exit('Failed to open :database_configuration.xml');
		    
		}*/
		$this->host='localhost';
		$this->user='root';
		$this->database='iims';
		$this->password='';
		
		
		 $this->linkId = @mysql_connect($this->host, $this->user,$this->password)or die("Error in connecting to db server: ".mysql_error()); 
		$this->db = @mysql_select_db($this->database,$this->linkId)or die("Error in connecting to database: ".mysql_error()); 
	} //end function
	

	//to disconnect database
	function DbDisconnect() { 
  		$this->close = @mysql_close($this->linkId) or die ("Error in disconnecting to server: ".mysql_error()); 
	} //end function 
    
}  //end class
  
?> 

