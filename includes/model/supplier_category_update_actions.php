<?php

require_once ("../../lib/supplier.class.php");
$objSupplierInfo = new Supplier();
extract($_POST);
		
		$supp_cat_id =$_POST['sup_cat_id'];
		$supp_cat_name =$_POST['txtSuppCatName'];
		$supp_cat_parent_id =$_POST['deptPId'];
	
		
			$objSupplierInfo->updateSupplierCategory($supp_cat_id,$supp_cat_name,$supp_cat_parent_id);
				echo "<b>Data Save Successsfull<b>"; 
			
		
	
?>	