
<?php
require_once("dbutils.class.php");
 /*-------------------------------------------------------
 | This is the Stock class
 |--------------------------------------------------------*/
 class Supplier extends DbUtils{
 	
	//// Stock Group ////////////////////////////////
	
	function getNewSupplierId(){
		return parent::getNewId("supplier","sup_id");
	}
 	
 	function CreateSupplier($getData){
 		$sql = "INSERT INTO supplier VALUES(".$getData.")";
		return parent::insertQuery($sql);
		
	 }
	 
	 function retriveSupplierInfo(){
		$sql = "select  * from supplier";
		return parent::selectQuery($sql);
	}
	
	function CreateSupplierCategory($getData){
			echo $sql = "INSERT INTO tbl_supplier_cat VALUES(".$getData.")";
			return parent::insertQuery($sql);
		}
		
		function retriveSupplierCategoryInfo($id=false){
			if(!$id){
				$sql = "select *from  tbl_supplier_cat ";
			}
			else{
				$sql= "select *from  tbl_supplier_cat where supp_cat_id=".$id;
			}
			return parent::selectQuery($sql);	
		}	
	
	 function retriveSupplierCategoryById($sup_cat_id){
		$sql = "select  * from tbl_supplier_cat WHERE supp_cat_id ='$sup_cat_id'";
		return parent::selectQuery($sql);
	}	
	
	function retriveSupplierById($supplier_id){
		$sql = "select * FROM supplier WHERE sup_id = '$supplier_id'";
		return parent::selectQuery($sql);
	}	
	
	function updateSupplier($supplier_id,$name,$supplierCat,$email,$address,$phone,$fax,$tin,$vat,$tradelicance,$taxholiday){
		$sql = "UPDATE supplier SET sup_name='$name',sup_cat_id ='$supplierCat',sup_email='$email',sup_address='$address',sup_phone='$phone',sup_fax='$fax',sup_tin='$tin',sup_vat='$vat',sup_trade='$tradelicance',sup_tax_validity='$taxholiday' WHERE sup_id = '$supplier_id'";
		return parent::selectQuery($sql);
	}		
	//////////////////////////////////////////////////////////////
	
	//Supplier Category
	
	function retriveSupplierCategoryInfoListView(){
		$sql = "select  * from tbl_supplier_cat";
		return parent::selectQuery($sql);
	}
	
	function retriveSupplierCategoryParentName($parent_id){
		$sql = "select * FROM tbl_supplier_cat WHERE supp_cat_id = '$parent_id'";
		return parent::selectQuery($sql);
	}
	
	function retriveSupplierCatById($supplier_cat_id){
		$sql = "select * FROM tbl_supplier_cat WHERE supp_cat_id = '$supplier_cat_id'";
		return parent::selectQuery($sql);
	}		
	
	function updateSupplierCategory($sup_cat_id,$sup_cat_name,$sup_cat_parent_id){
		$sql = "UPDATE tbl_supplier_cat SET supp_cat_name='$sup_cat_name',supp_cat_p_id ='$sup_cat_parent_id' WHERE supp_cat_id = '$sup_cat_id'";
		return parent::selectQuery($sql);
	}		


}

?>