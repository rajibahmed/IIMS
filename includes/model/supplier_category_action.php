<?php

require_once ("../../lib/stock.class.php");
$objectStockdept = new Stock();
$btn_Supp_Cat=$_POST['btn_Supp_Cat'];
	
	


		
		//get a new id
		
		/////////////////////////////
		
		extract($_POST);
		
		$getData = "'','$txtSuppCatName','$deptPId'";
		
		
		$objectStockdept->CreateSuppCat($getData);

		echo "<b>Data Save Successsfull</b>";
	
		
	
?>	
