<?php

require_once ("../../lib/stock.class.php");
$objectManamTest = new Stock();

$btn_StkDept=$_POST['btn_StkDept'];
	
	
	if(isset($btn_StkDept)){

		
		//get a new id
		$getNewId= $objectManamTest->getManamid();
		/////////////////////////////
		
		extract($_POST);
		
		$getData = "$getNewId,'$txt_nam','$txt_age'";
		
		
		$objectManamTest->CreateManamTest($getData);

		
		echo "<b>Data Save Successsfull</b>";
		require_once("../../includes/contents/manam_test.php");
		
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
