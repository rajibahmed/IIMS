<?php

require_once("dbutils.class.php");

/**
 * 
 */
class Requisition extends DbUtils
{
	public function CreateRequisitionDetails($getData)
 	{
 		$sql = "INSERT INTO requisition_details VALUES(".$getData.")";
 		//echo $sql;
		return parent::insertQuery($sql);
		
 	}
	
 	 
 	public function CreateRequisitionMaster($getData)
	{
 		$sql = 'INSERT INTO 
 				requisitions_master 
				(user_id,status,dept_id,office_id,required_within,created_at,requisition_number)  
 				VALUES('.$getData.')';
 		//echo $sql;
		return parent::insertQuery($sql);		
	}
	
	
	function FindRequisitionMaster($id)
	{
		$sql="	SELECT * FROM requisitions_master 
				WHERE rm_id=".$id;
		
		return parent::selectQuery($sql);		
	}	
	
	
	/**
	 * This function will find all requisition corresponding to its parameter 
	 *  
	 * @param int id,int status, int dept
	 * @return result
	 * @author Ahmed Rajib
	 **/
	
	public function FindAll($user_id,$user_level=false,$user_dept=false,$user_office=false)
	{
		/*-------------------------------------------------------
		| this condition checks for user who are
		| not store incharge 
		| because the store incharge can view all the requisitions
		|
		|--------------------------------------------------------*/

		 if(($user_level>0) && $user_dept && $user_office ){
		 	// for pending requisitoins
			$sql="	SELECT * 
					FROM requisitions_master r_m,users u 
					WHERE 
					r_m.user_id = u.user_id 
					AND r_m.office_id=".$user_office." 
					AND r_m.status=".$user_level." 
					AND r_m.user_id !=".$user_id." 
					AND r_m.dept_id =".$user_dept ." 
					ORDER BY requisition_number DESC
					";
		}
		
		/*-------------------------------------------------------
		| this is for store incharge
		| it will list all the pending requisition for creating indent
		| 
		| @parameter list parameters
		| return return type of function 
		|--------------------------------------------------------*/
		// elseif($user_level == 2){
		// 	$sql = "SELECT * FROM requisitions_master 
		// 			WHERE status=".$user_level."   
		// 			ORDER BY required_within asc";
		// 	
		// }
		/*-------------------------------------------------------
		| This will list all the requisitions
		| of current logged in user
		|
		| @parameter list parameters
		| return return type of function 
		|--------------------------------------------------------*/
		else{
			//for all my requisitions
			$sql="	SELECT rm.*,u.* FROM requisitions_master rm ,users u
					WHERE rm.user_id=".$user_id."  AND rm.user_id = u.user_id
					ORDER BY requisition_number DESC";
		 }

		
		return parent::selectQuery($sql);
	}
	
	
	
	
	function getNewId(){
		
		$id = parent::getLastId("requisitions_master","rm_id");
		return $id+1;
	}
	
	/*-------------------------------------------------------
	| Recursive Requisition Report Find
	|
	| @parameter int
	| return array
	|--------------------------------------------------------*/
	public function FindDetailsOfRequisition($rm_id)
	{
		$sql = "SELECT * FROM requisition_details rd, stock_item si  
				WHERE 
				si.stock_item_id = rd.stock_item_id  
				AND 
				rd.requisition_master_id=".$rm_id;
		
		return parent::selectQuery($sql);
	}
	
	
	public function updateRequisitionDetails($data=array())
	{
		$sql="UPDATE requisition_details SET
				stock_item_id = $data[stock_item_id],
				required_stock_item_qty = $data[item_qty],
				approx_value 	= $data[item_total],
				description = '$data[item_remark]'
				WHERE rd_id= ".$data[id];
				
		return parent::updateQuery($sql);	
	}
	
	public function deleteDetailById($id)
	{
		$sql ="DELETE FROM requisition_details WHERE rd_id=".$id;
		return parent::deleteQuery($sql);
	}
	
	public function FindAllByGroup()
	{
		$sql="	SELECT r_m.* ,r_d.*,s_i.*,pt.*,cd.*,unit.*, sum(required_stock_item_qty) total
				FROM requisitions_master r_m, requisition_details r_d,stock_item s_i ,stock_part_details pt,stock_code_details cd , stock_item_units unit
				WHERE r_m.rm_id=r_d.requisition_master_id 
				and s_i.stock_part_m_id=pt.stock_part_m_id 
				and s_i.stock_code_m_id=cd.stock_code_m_id
				and r_d.stock_item_id=s_i.stock_item_id
				and s_i.stock_item_unit_id=unit.stock_item_unit_id 
				And r_m.status=2
				group by r_d.stock_item_id ";	
		
		return parent::selectQuery($sql);
	}	
	
	public function ReqByuserId($user_id)
	{
		 $sql="	SELECT * 
				FROM requisitions_master r_m, requisition_details r_d,stock_item s_i 
				WHERE r_m.rm_id=r_d.requisition_master_id 
				and r_d.stock_item_id=s_i.stock_item_id And r_m.user_id='$user_id'
";
		
		return parent::selectQuery($sql);
	}
	
	public function ReqByPower($user_level)
	{
		 
		 if($user_level==1)
		 {
		 	 $sql="	SELECT * 
				FROM requisitions_master r_m, requisition_details r_d,stock_item s_i 
				WHERE r_m.rm_id=r_d.requisition_master_id 
				and r_d.stock_item_id=s_i.stock_item_id And  r_m.status=1 ";
		 }
		 if($user_level==2)
		 {
		 	 $sql="	SELECT * 
				FROM requisitions_master r_m, requisition_details r_d,stock_item s_i 
				WHERE r_m.rm_id=r_d.requisition_master_id 
				and r_d.stock_item_id=s_i.stock_item_id And  r_m.status=2 ";
		 }
		 
		return parent::selectQuery($sql);
	}
	
	
	function updateReqStatus($user_level,$rm_id){
		
		if($user_level==0)
		{
			$sql='UPDATE requisitions_master set status=1  WHERE rm_id='.$rm_id;	
		}
		if($user_level==1)
		{	
			$sql='UPDATE requisitions_master set status=2  WHERE rm_id='.$rm_id;	
		}
		
		return parent::updateQuery($sql);
	}
	
	function deleteRequisitionById($id)		
	{
		/*------------------------------------------
		| this is a cascading delete by mysql 
		|-------------------------------------------*/
		$sql='	DELETE rm.*,rd.* FROM requisitions_master rm 
				INNER JOIN requisition_details rd ON 
				rm.rm_id=rd.requisition_master_id
				WHERE rm.rm_id='.$id;

		return parent::deleteQuery($sql);
	}
	
	
}
  ?>