<?php

require_once ("../../lib/supplier.class.php");
$objSupplierInfo = new Supplier();
extract($_POST);
		
		$supplier_id =$_POST['supplier_id'];
		$name =$_POST['name'];
		$supplierCat =$_POST['select'];
		$email =$_POST['email'];
		$address =$_POST['address'];
		$phone =$_POST['phone'];
		$fax =$_POST['fax'];
		$tin =$_POST['tin'];
		$vat =$_POST['vat'];
		$tradelicance =$_POST['tradelicance'];
		$taxholiday=$_POST['taxholiday'];
		
		
			$objSupplierInfo->updateSupplier($supplier_id,$name,$supplierCat,$email,$address,$phone,$fax,$tin,$vat,$tradelicance,$taxholiday);
				echo "<b>Data Save Successsfull<b>"; 
			
		
	
?>	