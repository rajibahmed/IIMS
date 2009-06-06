<?php
	///////////// STOCK GROUP//////////////////////
	if($_GET[page] == "Create Stock Group"){ 		
        require_once("ca_create_stock_group.php");
	}else if($_GET[page] == "Display Stock Group"){
		require_once("display_stock_group.php");
	}	
		
	//////////////////////////////////////////////
	/*else if($_GET[page] == "Inventory"){
		require_once("ca_inventory_home.php");
	}*/else if($_GET[page] == "Create Stock Catagory"){
		require_once("ca_create_stock_catagory.php");
	}else if($_GET[page] == "Create Stock Item"){
		require_once("create_engn_item.php");
	}else if($_GET[page] == "Create Unit"){
		require_once("ca_create_unit.php");
	}			
	else if($_GET[page] == "Create Company"){
		require_once("create_company.php");
	}
	else if($_GET[page] == "Create User"){
		require_once("create_user.php");
	}
	else if($_GET[page] == "Create Department"){
		require_once("create_department.php");
	}
	else if($_GET[page] == "Update Company"){
		require_once("update_company.php");
	}
	
	else if($_GET[page] == "Create Supplier"){
		require_once("create_Supplier.php");
	}
	else if($_GET[page] == "Create Quotation"){
		require_once("create_quotation.php");
	}
	else if($_GET[page] == "Create Purchase Order"){
		require_once("create_purchase_order.php");
	}

	/*else if($_GET[page] == "Create location"){
		require_once("quotation_comparizon_report.php");
	}*/
	
	else if($_GET[page] == "Create location"){
		require_once("ca_create_locations.php");
	}
	else if($_GET[page] == "Create Stock Dept"){
		require_once("create_stock_department.php");
	} 
	
	
	// section
	else if($_GET[page] == "Create stock section"){
		require_once("create_stock_section.php");
	} 
	else if($_GET[page] == "Create machine model"){
		require_once("create_machine_model.php");
	} 
	else if($_GET[page] == "Create stock manufacturer"){
		require_once("create_stock_manufacture.php");
	} 
	
	else if($_GET[page] == "Create test"){
		require_once("create_test.php");
	} 
		else if($_GET[page] == "Create Manam Section"){
		require_once("manam_test.php");
	} 

?>