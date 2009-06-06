<?php
//search key class
require_once("dbutils.class.php");



 class DatabaseCreation extends DbUtils{
 	
 	function createDatabaseFromXml()
 	{
 		return parent::createDatabase()	;
 	}//end of database creation class
}

?>
