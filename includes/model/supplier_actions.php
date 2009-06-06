<?php

require_once ("../../lib/supplier.class.php");
$objSupplierInfo = new Supplier();
extract($_POST);
	
	
	
		//get a new id
		$supplierId = $objSupplierInfo->getNewSupplierId();
		/////////////////////////////
		$name =$_POST['name'];
		$email =$_POST['email'];
		$address =$_POST['address'];
		$phone =$_POST['phone'];
		$tin =$_POST['tin'];
		$vat =$_POST['vat'];
		$tradelicance =$_POST['tradelicance'];
		$taxholiday=$_POST['taxholiday'];
		
		$getData = "'$supplierId','$name','$supplierCat','$email','$address','$phone','$fax','$tin','$vat','$tradelicance','$taxholiday'";
		
		$objSupplierInfo->CreateSupplier($getData);
	
		echo "<b>Data Save Successsfull</b>";
		
	
?>	