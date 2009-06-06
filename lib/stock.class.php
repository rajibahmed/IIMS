
<?php
require_once("dbutils.class.php");
 /*-------------------------------------------------------
 | This is the Stock class
 |--------------------------------------------------------*/
 class Stock extends DbUtils{
 
 
 	function deleteStockGrp($id){
		$sql = 'DELETE FROM stock_group WHERE stock_group_id='.$id;
		
		return parent::deleteQuery($sql);
	}
	
	function deleteStockMachine($id){
		$sql = 'DELETE FROM stock_machine WHERE m_id='.$id;
		
		return parent::deleteQuery($sql);
	}
	
	function deleteStockLocation($id){
		$sql = 'DELETE FROM stock_locations WHERE stock_location_id='.$id;
		
		return parent::deleteQuery($sql);
	}
	
	function deleteStockDep($id){
		$sql = 'DELETE FROM stock_department WHERE stock_dept_id='.$id;
		
		return parent::deleteQuery($sql);
	}
	
	function deleteStockManufac($id){
		$sql = 'DELETE FROM stock_manufacturer WHERE manu_id='.$id;
		
		return parent::deleteQuery($sql);
	}
	
	function deleteStockSection($id){
		$sql = 'DELETE FROM stock_department_section WHERE sec_id='.$id;
		
		return parent::deleteQuery($sql);
	}
	
	function deleteStockMacModel($id){
		$sql = 'DELETE FROM stock_machine_model WHERE machine_model_id='.$id;
		
		return parent::deleteQuery($sql);
	}
	
	function deleteMeasurUnit($id){
		$sql = 'DELETE FROM stock_item_units WHERE stock_item_unit_id='.$id;
		
		return parent::deleteQuery($sql);
	}
	
	function deleteStockEngineerItem($id){
		$sql = 'DELETE FROM stock_item WHERE stock_item_id='.$id;
		
		return parent::deleteQuery($sql);
	}
 	
 	/*-------------------------------------------------------
 	|  Comments about this function 
 	|
 	| @parameter list parameters
 	| return return type of function 
 	|--------------------------------------------------------*/
 	
 	function getStockGroupTreeView()
 	{
 		
 		$sql='SELECT * FROM stock_group order by stock_group_parent_id';
 		
 		return parent::SELECTQuery($sql);
 		
 	}
 	
	//// Stock Group ////////////////////////////////
	/*-------------------------------------------------------
	| Auto Compelte Code
	|
	| @parameter list parameters
	| return return type of function 
	|--------------------------------------------------------*/
	function getStockItemsManufacturerById($id)
	{
		$sql='SELECT * FROM stock_item si
			WHERE si.stock_manufacturer_id ='.$id;
			
		return parent::SELECTQuery($sql);
	}
	
	/*-------------------------------------------------------
	| INcomplete Query
	|
	| @parameter list parameters
	| return return type of function 
	|--------------------------------------------------------*/
	function getStockItemById($id){
		
		/*$sql='SELECT * FROM stock_item si
			WHERE si.stock_item_id ='.$id;*/
			
		$sql="	SELECT st.*,pt.*,cd.* 
				FROM `stock_item` st,stock_part_details pt,stock_code_details cd 
				WHERE st.`stock_part_m_id`=pt.stock_part_m_id 
				and st.`stock_code_m_id`=cd.stock_code_m_id 
				and st.stock_item_id='$id'";	
			
		return parent::SELECTQuery($sql);
	}
	
	/*-------------------------------------------------------
	|  Comments about this function 
	|
	| @parameter list parameters
	| return return type of function 
	|--------------------------------------------------------*/
	function getManufaturerByMachine($id){
		
		$sql="SELECT sm.* FROM stock_manufacturer sm
				WHERE sm.manu_id IN (SELECT si.stock_manufacturer_id 
									FROM stock_item si 
									WHERE stock_machine_id=$id)";
		
		return parent::SELECTQuery($sql);
	}
	
	/*-------------------------------------------------------
	| lists all the part numbers of stock item 
	| FROM the machine model id
	|
	| @parameter list parameters
	| return return type of function 
	|--------------------------------------------------------*/
	function getPartNumberByMachineModel($id)
	{
		$sql="	SELECT spd.* FROM stock_part_details spd
				WHERE spd.stock_part_m_id  IN (SELECT si.stock_part_m_id 	
							FROM stock_item si 
						WHERE stock_machine_id=$id) 
				ORDER BY 2";
		
		return parent::SELECTQuery($sql);
	}

	function getSectionByStockDept($id)
	{
		$sql="	SELECT * FROM stock_department_section 
				WHERE 	stock_dept_id=".$id;
		return parent::SELECTQuery($sql);
		
	}
	
	
	
	/*-------------------------------------------------------
	| Lists all the machine model 
	| FROM Manufacturer id 
	| 
	| @parameter list parameters
	| return return type of function 
	|--------------------------------------------------------*/
	function getMachineModelByManufaturer($id)
	{
		$sql="SELECT smm.* FROM stock_machine_model smm WHERE machine_model_id IN
					( SELECT si.stock_machine_model_id  FROM stock_item  si
					  WHERE si.stock_manufacturer_id =$id)";
			
		return parent::SELECTQuery($sql);
	}		
	
	
	
	function getItemByPartDetails($id)
	{
		$sql="	SELECT si.* FROM stock_item si
				WHERE stock_part_m_id = (SELECT spd.stock_part_m_id 
										FROM stock_part_details spd 
	            						WHERE stock_part_id='$id')";
			
		return parent::SELECTQuery($sql);
	}
	
	function getStockPartByID($id)
	{
		$sql='SELECT * FROM stock_part_details 
			WHERE stock_part_m_id='.$id;
		return parent::SELECTQuery($sql);
	}	
	
	
	function getMachineBySection($id)
	{
		$sql='SELECT * FROM stock_machine 
			WHERE section_id='.$id;
		return parent::SELECTQuery($sql);
	}
	
	

	
	function getManufacturerById($id)
	{
		$sql='SELECT * FROM stock_manufacturer WHERE manu_id='.$id;
		return parent::SELECTQuery($sql);
	}
	
	/*-------------------------------------------------------*/

	
	function getNewStockGrpId(){
		return parent::getNewId("stock_group","stock_group_id");
	}
 	
 	function CreateStockGroup($getData){
 		$sql = "INSERT INTO stock_group VALUES(".$getData.")";
		return parent::insertQuery($sql);
		
	 }
	 
	 function retriveStockGroupUnderInfo(){
		$sql = "SELECT  stock_group_name,stock_group_id FROM stock_group ";
		return parent::SELECTQuery($sql);
	}
	
	function retriveStockGroupListAll(){
		$sql = "SELECT * FROM stock_group";
		return parent::SELECTQuery($sql);
	}
	
	function retriveStockGroupParentName($parent_id){
		$sql = "SELECT * FROM stock_group WHERE stock_group_id = '$parent_id'";
		return parent::SELECTQuery($sql);
	}
	
	function retriveStockGroupById($st_grp_id){
		$sql = "SELECT * FROM stock_group WHERE stock_group_id = '$st_grp_id'";
		return parent::SELECTQuery($sql);
	}
		
	function updateStockGroup($s_grp_id,$st_grp_name,$parent_id){
		$sql = "UPDATE stock_group SET stock_group_name='$st_grp_name',stock_group_parent_id='$parent_id'  WHERE stock_group_id = '$s_grp_id'";
		return parent::SELECTQuery($sql);
	}
	
	function updateMachine($stocMacID,$stocMacNam,$stock_Section_id,$stock_dep_id){
		$sql = "UPDATE stock_machine SET m_name='$stocMacNam',section_id='$stock_Section_id',Department_id='$stock_dep_id'  WHERE m_id = '$stocMacID'";
		return parent::SELECTQuery($sql);
	}
	
	function updateManufacture($s_manu_id,$stocManuNam,$stockManufacturerYearID,$stockMachinNameID,$stockSectionID,$stockDepartmentID){
		$sql = "UPDATE stock_manufacturer SET manu_name='$stocManuNam',manu_year='$stockManufacturerYearID',machine_id='$stockMachinNameID',section_id='$stockSectionID' ,dept_id='$stockDepartmentID'  WHERE manu_id = '$s_manu_id'";
		return parent::SELECTQuery($sql);
	}
	
	function updateMachineMode($s_mac_mod_id,$txtMname,$stockMachinNameID,$stockMachinModeID,$stockSectionID,$stockDepartmentID){
		$sql = "UPDATE stock_machine_model SET machine_model_name='$txtMname',machine_id='$stockMachinNameID',Section_p_id='$stockSectionID',stock_dept_id='$stockDepartmentID' ,manufacturer_id='$stockMachinModeID'  WHERE machine_model_id = '$s_mac_mod_id'";
		return parent::SELECTQuery($sql);
	}
	
	
	//////////////////////////////////////////////////////////////
	
	//// Stock Catagory ////////////////////////////////
	
	function getNewStockCatId(){
		return parent::getNewId("stock_catagory","stock_cat_id");
	}
 	
 	function CreateStockCat($getData){
 		$sql = "INSERT INTO stock_catagory VALUES(".$getData.")";
		return parent::insertQuery($sql);
		
	 }
	 
	 function retriveStockCatUnderInfo(){
		$sql = "SELECT  stock_cat_name,stock_cat_id FROM stock_catagory ";
		return parent::SELECTQuery($sql);
	}
	
	//////////////////////////////////////////////////////////////
	
	//// Stock Item ////////////////////////////////
	
	function getNewStockItemId(){
		return parent::getNewId("stock_item","stock_item_id");
	}
 	
 	function CreateStockItem($getData){
 		 $sql = "INSERT INTO stock_item VALUES(".$getData.")";
		return parent::insertQuery($sql);
		
	 }
	 
	 function retriveStockItem(){
 		$sql = "SELECT * FROM stock_item 
 				ORDER BY stock_item_name";
		return parent::SELECTQuery($sql);
		
	 }
	 
	 
	  function retriveStockItemByPartByCode(){
 		$sql = "SELECT st.*,pt.*,cd.* 
	 			FROM `stock_item` st,stock_part_details pt,stock_code_details cd 
	 			WHERE st.`stock_part_m_id`=pt.stock_part_m_id 
	 			and st.`stock_code_m_id`=cd.stock_code_m_id  
	 			order by cd.stock_code ASC";
		return parent::SELECTQuery($sql);
		
	 }
	 
	  function retriveStockItembyGruopId($stock_group){
 		$sql = "SELECT * FROM stock_item 
 				WHERE stock_item_grp_id='$stock_group'";
		return parent::SELECTQuery($sql);
		
	 }
	 

	
	 
	 function retriveStockItemByIndendId($id){
 		$sql = "SELECT si.stock_item_id,si.stock_item_name FROM stock_item si, indent_details id WHERE id.indent_master_id='$id' AND si.stock_item_id=id.stock_item_id";
		return parent::SELECTQuery($sql);
	 }
	 
	
	//////////////////////////////////////////////////////////////
	
	//// Stock Item Unit ////////////////////////////////
	
	function getNewStockUnitId(){
		return parent::getNewId("stock_item_units","stock_item_unit_id");
	}
 	
 	function CreateStockUnit($getData){
 		 $sql = "INSERT INTO stock_item_units VALUES(".$getData.")";
		return parent::insertQuery($sql);
		
	 }
	 
	 function retriveStockUnit(){
 		$sql = "SELECT * FROM stock_item_units";
		return parent::SELECTQuery($sql);
		
	 }
	 
	
	//////////////////////////////////////////////////////////////
	
	//// Stock Location ////////////////////////////////
	
	function getNewStockLocationId(){
		return parent::getNewId("stock_locations","stock_location_id");
	}
 	
 	function CreateLocation($getData){
 		 $sql = "INSERT INTO stock_locations VALUES(".$getData.")";
		return parent::insertQuery($sql);
		
	 }
	 
	 function retriveLocation(){
 		$sql = "SELECT * FROM stock_locations";
		return parent::SELECTQuery($sql);
	 }
	
	function getItemByPart($number){
		
		$sql='	SELECT stock_item_id,stock_item_name 
				FROM stock_item 
				WHERE stock_item_part_id='.$number;
				
		return parent::SELECTQuery($sql);
	}
	
	/*By Wasif*/ 
	
	function retriveLocationPName($parent_id){
			$sql = "SELECT * FROM stock_locations WHERE stock_location_id = '$parent_id'";
			return parent::SELECTQuery($sql);
		}		
	 
	function retriveLocationById($stk_location_id){
		$sql = "SELECT * FROM stock_locations WHERE stock_location_id = '$stk_location_id'";
		return parent::SELECTQuery($sql);
	}		 
	
	function updateStockLocation($stk_location_id,$StkLocationName,$StkLocationPId,$StkLocationAdd,$StkLocationCity,$StkLocationPhone,$StkLocationFax){
		$sql = "UPDATE stock_locations SET stock_location_name='$StkLocationName',stock_location_p_id 	='$StkLocationPId',stock_location_address='$StkLocationAdd',stock_location_city='$StkLocationCity',stock_location_phone_no='$StkLocationPhone',stock_location_fax='$StkLocationFax' WHERE stock_location_id = '$stk_location_id'";
		return parent::SELECTQuery($sql);
	}		
	
	//////////////////////////////////////////////////////////////

	//// Stock Department ////////////////////////////////
	
	function getNewStockdeptId(){
		return parent::getNewId("stock_department","stock_dept_id");
	}
 	
 	function CreateStockDept($getData){
 		$sql = "INSERT INTO stock_department VALUES(".$getData.")";
		return parent::insertQuery($sql);	
	 }
	 
	function CreateSuppCat($getData){
 		$sql = "INSERT INTO tbl_supplier_cat VALUES(".$getData.")";
		return parent::insertQuery($sql);	
	 }
	 
	 function retriveStockDepartmentInfo($id=false){
	 	
	 	if(!$id){
			$sql = "SELECT *FROM  stock_department ";
		}
		else{
			$sql= "SELECT *FROM  stock_department WHERE stock_dept_id=".$id;
		}
		return parent::SELECTQuery($sql);	
	}
	
		
	function retriveStockDepartmentListAll(){
		$sql = "SELECT * FROM stock_department";
		return parent::SELECTQuery($sql);
	}

	function retriveStockDepartParentName($parent_id){
		$sql = "SELECT * FROM stock_department WHERE stock_dept_id = '$parent_id'";
		return parent::SELECTQuery($sql);
	}
	
	function retriveStockDepartById($stk_depart_id){
		$sql = "SELECT * FROM stock_department WHERE stock_dept_id = '$stk_depart_id'";
		return parent::SELECTQuery($sql);
	}	
	
	function updateStockDepartment($stk_depart_id,$stk_depart_name,$parent_id){
		$sql = "UPDATE stock_department SET stock_dept_name='$stk_depart_name',stock_dept_p_id='$parent_id' WHERE stock_dept_id = '$stk_depart_id'";
		return parent::SELECTQuery($sql);
	}	
	 
	


	 
/*
	 function retriveStockDepartmentsection(){
		$sql = "SELECT *FROM  stock_department_section ";
		return parent::SELECTQuery($sql);
	}*/
	
	/*-------------------------------------------------------
	| Block For Shojib
	|
	| @parameter 
	| return return type of function 
	|--------------------------------------------------------*/
	//// Stock section ////////////////////////////////
		function getNewStockSectId(){
		return parent::getNewId("stock_department_section","sec_id");
		}
		
		function CreateStockSection($getData){
		$sql = "INSERT INTO stock_department_section VALUES(".$getData.")";
		return parent::insertQuery($sql);	
		}
		
		function retriveStockSection(){
		$sql = "SELECT *FROM  stock_department_section ";
		return parent::SELECTQuery($sql);
		}
		/*By Wasif*/
		function retriveStockSectionName($parent_id){
			$sql = "SELECT * FROM stock_department_section WHERE sec_id = '$parent_id'";
			return parent::SELECTQuery($sql);
		}		
		
		function retriveStockSectionById($stk_section_id){
			$sql = "SELECT * FROM stock_department_section WHERE sec_id = '$stk_section_id'";
			return parent::SELECTQuery($sql);
		}			
		
		function updateStockSectionDepartment($stk_section_id,$stk_section_name,$section_parent_id,$department_parent_id){
			$sql = "UPDATE stock_department_section SET sec_name='$stk_section_name',Section_p_id='$section_parent_id',stock_dept_id='$department_parent_id' WHERE sec_id = '$stk_section_id'";
			return parent::SELECTQuery($sql);
		}		

		/*--------------------------------------------------------*/
		
		
	//////////////////////////////////////////////////////////////
	
	//// Stock machine name ////////////////////////////////
	
		function getNewMachineid(){
		return parent::getNewId("stock_machine","m_id");
		}
		
		function CreateNewMachine($getData){
		$sql = "INSERT INTO stock_machine VALUES(".$getData.")";
		return parent::insertQuery($sql);	
		}
		
		function retriveMachineName(){
		$sql = "SELECT *FROM  stock_machine ";
		return parent::SELECTQuery($sql);
	
		}
		
		
	/*--------------------------------------------------------*/
	//// Stock machine model ////////////////////////////////
	
		function CreateStockMachineModel($getData){
		$sql = "INSERT INTO stock_machine_model VALUES(".$getData.")";
		return parent::insertQuery($sql);
		 }
		function getNewMachinemodelid(){
		return parent::getNewId("stock_machine_model","machine_model_id");
		}
		
		function retriveMachineModelName(){
		$sql = "SELECT *FROM  stock_machine_model ";
		return parent::SELECTQuery($sql);
	
		}
		
		function retriveMachineModelNameById($id){
		$sql = "SELECT *FROM  stock_machine_model WHERE machine_model_id='$id'";
		return parent::SELECTQuery($sql);
	
		}
	
	/*--------------------------------------------------------*/

		function CreateStockmanufacturer($getData){
		$sql = "INSERT INTO stock_manufacturer VALUES(".$getData.")";
		return parent::insertQuery($sql);
		}
		function getNewmanufacturerid(){
		return parent::getNewId("stock_manufacturer","manu_id");
		}
		function retriveManufecturer(){
		$sql = "SELECT *FROM  stock_manufacturer ";
		return parent::SELECTQuery($sql);
	
		}

/*--------------------------------------------------------*/



		function Createtest($getData){
		$sql = "INSERT INTO test VALUES(".$getData.")";
		return parent::insertQuery($sql);
		}
		function gettestid(){
		return parent::getNewId("test","id");
		}



	/*-------------------------------------------------------
	| Block For Manam
	|
	| @parameter 
	| return return type of function 
	|--------------------------------------------------------*/
	
		function CreateManamTest($getData){
		$sql = "INSERT INTO manam_test VALUES(".$getData.")";
		return parent::insertQuery($sql);
		}
		function getManamid(){
		return parent::getNewId("manam_test","man_id");
		}
		function retriveManamTest(){
		$sql = "SELECT *FROM  manam_test";
		return parent::SELECTQuery($sql);
	}
	/*--------------------------------------------------------*/
	
	/*-------------------------------------------------------
	| Block For Update  Stock Closing Balance
	|--------------------------------------------------------*/
	
		function retriveStockItemByid($id){
		
			 $sql = "SELECT *FROM stock_item WHERE stock_item_id='$id'";
			return parent::SELECTQuery($sql);
		}	
		
		function updateClBalance($item_code,$prev_cl,$qty){
				
				 $current_clB=$prev_cl-$qty;
				 $sql= "Update stock_item set stock_item_cl_balance='$current_clB' WHERE stock_item_id='$item_code'";
				return parent::updateQuery($sql);
		}   
		
		
		function updateAddClBalance($item_code,$prev_cl,$qty){
				
				  $current_clB=$prev_cl+$qty; 
				 $sql= "Update stock_item set stock_item_cl_balance='$current_clB' WHERE stock_item_id='$item_code'";
				return parent::updateQuery($sql);
		}
		
		///// Update stock item issue/consumption qty ////////////////////
		
		function updateIssueQty($item_code,$currentIssueQty){
				
				
				  $sql= "Update stock_item set stock_issue_qty='$currentIssueQty' WHERE stock_item_id='$item_code'";
				return parent::updateQuery($sql);
		}
		
		
		///// Update stock item rejected qty ////////////////////
		
		function updateRejectedQty($item_code,$current_rejected_qty){
				
				
				  $sql= "Update stock_item set 	stock_rejected_qty='$current_rejected_qty' WHERE stock_item_id='$item_code'";
				return parent::updateQuery($sql);
		}
		
		
		////////////////////////////////////////////////////////////////////
		
		 ///// Update stock item received qty ////////////////////
		
		function updateReceivedQty($item_code,$current_recieved_qty){
				
				
				  $sql= "Update stock_item set 	stock_received_qty='$current_recieved_qty' WHERE stock_item_id='$item_code'";
				return parent::updateQuery($sql);
		}
		
		
		////////////////////////////////////////////////////////////////////
		 
		
		/////////////////// Insert Multiple Code No of a item///////////
		
		
		
		function CreateStockCode($getData){
		 $sql = "INSERT INTO stock_code_details VALUES(".$getData.")";
		return parent::insertQuery($sql);
		}
		////////////////////////////////////////////////////////////////
		
		/////////////////// Insert Multiple Part No of a item///////////
		
		
		
		function CreateStockPart($getData){
		 $sql = "INSERT INTO stock_part_details VALUES(".$getData.")";
		return parent::insertQuery($sql);
		}
		////////////////////////////////////////////////////////////////
		public function retriveGroupSpareStockItem($issueID)
		{	 
			$sql = "SELECT stk_grp . * , stk_itm . *  
					FROM stock_group stk_grp, stock_item stk_itm  
					WHERE  stk_itm.stock_item_grp_id= '$issueID'";
			return parent::SELECTQuery($sql);
		}	
		
		
		function retriveStockMachineListAll(){
				
			$sql = "SELECT * FROM stock_machine";
			return parent::SELECTQuery($sql);
		}
		
		
		function retriveStockDepartmentSectionName($depSecID){
			$sql = "SELECT * FROM stock_department_section WHERE sec_id = '$depSecID'";
			return parent::SELECTQuery($sql);
		}
		
		function retriveStockCodeDetails($id){
			$sql = "SELECT * FROM stock_code_details WHERE stock_code_m_id = '$id'";
			return parent::SELECTQuery($sql);
		}
		
		function retriveStockDepartmentName($depStockDepID){
			$sql = "SELECT * FROM stock_department WHERE stock_dept_id = '$depStockDepID'";
			return parent::SELECTQuery($sql);
		}
		
		function retriveStockMachineListByID($id){
			$sql = "SELECT * FROM stock_machine WHERE m_id='$id'";
			return parent::SELECTQuery($sql);
		}
		
		
		///// Location Wise stock report ///////////
		
		
		function CreateLocWiseStockDetails($getData){
			$sql = "INSERT INTO location_wise_stock_item VALUES(".$getData.")";
			return parent::insertQuery($sql);
		}
		
	  function retriveStockItemByMechine($stkMName){
 		$sql = "SELECT st.*,pt.*,cd.*,mt.*,ut.* FROM stock_item st,stock_part_details pt,stock_code_details cd,stock_machine mt,stock_item_units ut WHERE mt.m_id='$stkMName' and st.stock_machine_id=mt.m_id and st.stock_part_m_id=pt.stock_part_m_id and st.stock_code_m_id=cd.stock_code_m_id and st.stock_item_unit_id=ut.stock_item_unit_id order by cd.stock_code ASC";
		return parent::SELECTQuery($sql);
		
	 }		
		//////////////////////////////////////////////////////
		
		/// raw stock item//////////////
		
		function CreateRawStockItem($getData){
			 $sql = "INSERT INTO stock_item (stock_item_id,stock_item_name,stock_code_m_id,stock_item_grp_id,stock_item_unit_id,stock_alt_unit,unit_relation1,unit_relation2,stock_item_desc,length,stock_item_op_balance,stock_item_op_rate,stock_item_op_value,stock_item_cl_balance) VALUES(".$getData.")";
			return parent::insertQuery($sql);
			
	 	}
		//////////////////////////////////////////	
		
		
		/// raw stock item//////////////
		
		function CreateFinishStockItem($getData){
			 $sql = "INSERT INTO stock_item (stock_item_id,stock_item_name,stock_code_m_id,stock_item_grp_id,stock_item_unit_id,stock_alt_unit,unit_relation1,unit_relation2,stock_item_desc,stock_count,stock_item_op_balance,stock_item_op_rate,stock_item_op_value,stock_item_cl_balance) VALUES(".$getData.")";
			return parent::insertQuery($sql);
			
	 	}
		
		function updateStockItem($StockItemId,$txtStkName,$under_engi_item,$catalog_no,$stockGroup,$stockDepartment,$stockSection,$stockMachine,$machineModel,$manufecturer,$unit,$txtStkDesc,$minStock,$ReorderQty,$opQnty,$OpRate,$opValue)
		{
				  echo $sql= "Update stock_item SET stock_item_name='$txtStkName', stock_p_id='$under_engi_item', 
				  stock_catalog_no ='$catalog_no',	stock_item_grp_id ='$stockGroup', stock_dept_id='$stockDepartment',
				  stock_section_id='$stockSection',	stock_machine_id='$stockMachine', stock_machine_model_id ='$machineModel',
				  stock_manufacturer_id ='$manufecturer',stock_item_unit_id ='$unit',
				  stock_item_desc ='$txtStkDesc', stock_minimum_stock ='$minStock',	stock_reorder_qty='$ReorderQty',
				  stock_item_op_balance ='$opQnty',	stock_item_op_rate ='$OpRate', stock_item_op_value='$opValue' WHERE
				  stock_item_id='$StockItemId'";
				return parent::updateQuery($sql);
		}		
		//////////////////////////////////////////	
		
		function updateStockCodeNo($stcItmId,$txtStkcode)
		{
			$sql="UPDATE stock_code_details SET stock_code = '$txtStkcode' WHERE stock_code_m_id= '$stcItmId'";
			return parent::updateQuery($sql);
		}
		
			
		function updateStockPartNo($stcItmId,$txtStkPart)
		{
			$sql="UPDATE stock_part_details SET stock_part = '$txtStkPart' WHERE stock_part_m_id= '$stcItmId'";
			return parent::updateQuery($sql);
		}
}

?>