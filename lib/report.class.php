<?php

require_once("dbutils.class.php");
require 'helper_functions.php';

/**
 * 
 */

class Reports extends DbUtils
{
	public function retriveDailyRecivedReports()
 	{	 
		$date=date("Y-m-d");
		$date_after = strtotime(" $date + 1 day" );
		$date_before = strtotime(" $date - 1 day" );
		
		$date_after=sql_date($date_after);
		$date_before=sql_date($date_before); 
		
 		$sql = "SELECT mmr_m . * , mrr_d . * , si . * ,siu.*,
 		 		GROUP_CONCAT(scd.stock_code, ' ' ) stock_code,
 		  		GROUP_CONCAT(spd.stock_part, ' ' ) stock_part, pm.*
 		  			
	 			FROM mrr_master mmr_m, mrr_details mrr_d,
	 				 stock_item si ,stock_part_details spd ,stock_item_units siu,
			 		 stock_code_details scd,
			 		 purchase_master pm
	 			WHERE mmr_m.mrr_id = mrr_d.mrr_m_id 
		 			AND mrr_d.stock_item_id = si.stock_item_id 
		 			AND mmr_m.mrr_create_date between '$date_before' AND '$date_after' 
			 		AND si.stock_part_m_id=spd.stock_part_m_id 
			 		AND si.stock_item_unit_id=	siu.stock_item_unit_id	 
			 		AND si.stock_code_m_id=scd.stock_code_m_id 
			 		AND si.stock_code_m_id=scd.stock_code_m_id  
		 		AND mmr_m.purchase_m_id = pm.pm_id  	 
				GROUP BY si.stock_item_id";  			 
	 		 			 
		return parent::selectQuery($sql);
 	}
	
	
	public function retriveDailyRecivedItemUnitReports($itemID)
 	{
 		$sql = "SELECT * FROM stock_item_units 
 				WHERE stock_item_unit_id=$itemID";
 				
		return parent::selectQuery($sql);
 	}
	
	public function retriveDailyIssueReports()
 	{	 
		$date=date("Y-m-d");
		$date_after = strtotime(" $date + 1 day" );
		$date_before = strtotime(" $date - 1 day" );
		
		$date_after=sql_date($date_after);
		$date_before=sql_date($date_before); 
		
 		 $sql = "	SELECT con_m . * , con_d . * , si. *, stk_mcin.* ,siu.*,
	 		 		GROUP_CONCAT(scd.stock_code, ' ' ) stock_code,
	 		  		GROUP_CONCAT(spd.stock_part, ' ' ) stock_part
	 		  			
			 		 FROM consumptions_master con_m, consumption_details con_d, 
			 		 stock_item si, stock_machine stk_mcin,
			 		 stock_item_units siu,stock_part_details spd ,
			 		 stock_code_details scd
			 		 
			 		 WHERE con_m.cm_id = con_d.consumptions_master_id
				 		 AND con_d.stock_item_id = si.stock_item_id  
				 		 AND si.stock_machine_id=stk_mcin.m_id 
				 		 AND si.stock_item_unit_id=	siu.stock_item_unit_id		 		 	 
				 		 AND (con_m.created_at between '$date_before' AND '$date_after')
						 AND si.stock_part_m_id=spd.stock_part_m_id 
						 AND si.stock_code_m_id=scd.stock_code_m_id 
			 		  	
			 		 GROUP BY si.stock_item_id";
			 		  	
			 		  	
		return parent::selectQuery($sql);
 	}
	
	public function retriveGroupIssueReports($groupID,$date_from,$date_to)
 	{	 
		
 		 $sql = "SELECT con_m . * , con_d . * , si . *, stk_mcin.*, stk_grp.* ,
	 		 		GROUP_CONCAT(scd.stock_code, ' ' ) stock_code,
	 		  		GROUP_CONCAT(spd.stock_part, ' ' ) stock_part
	 		  			
 		 		FROM consumptions_master con_m, consumption_details con_d, 
 		 			 stock_item si, stock_machine stk_mcin, stock_group stk_grp,
			 		 stock_item_units siu,stock_part_details spd ,
			 		 stock_code_details scd 		 			
	 		  			
 		 		WHERE con_m.cm_id = con_d.consumptions_master_id 
 		 		
	 		 		AND con_d.stock_item_id = si.stock_item_id 
	 		 		AND si.stock_machine_id=stk_mcin.m_id 
	 		 		AND stk_grp.stock_group_id='$groupID' 
	 		 		AND stk_grp.stock_group_id=si.stock_item_grp_id  
			 		AND si.stock_item_unit_id=	siu.stock_item_unit_id 		 		 	 
	 		 		AND  con_m.created_at between  '$date_from' AND '$date_to' 
					AND si.stock_part_m_id=spd.stock_part_m_id  
					AND si.stock_code_m_id=scd.stock_code_m_id  
					
					 GROUP BY si.stock_item_id";
	 		 		
		return parent::selectQuery($sql);
 	}
	
	
 	
 	public function retriveGroupReceivedReports($groupID,$date_from,$date_to)
 	{	 
		
 		 $sql = "SELECT mmr_m .*, mrr_d .*, si . *, stk_mcin.*, stk_grp.* ,
		 		  
	 		 		GROUP_CONCAT(scd.stock_code, ' ' ) stock_code,
	 		  		GROUP_CONCAT(spd.stock_part, ' ' ) stock_part	 
 		 		FROM mrr_master mmr_m, mrr_details mrr_d, stock_item si, 
 		 			stock_machine stk_mcin, stock_group stk_grp ,
					 stock_part_details spd ,
			 		 stock_code_details scd 
 		 		WHERE mmr_m.mrr_id = mrr_d.mrr_m_id  
	 		 		AND mrr_d.stock_item_id = si.stock_item_id 
	 		 		AND si.stock_machine_id=stk_mcin.m_id 
	 		 		AND stk_grp.stock_group_id='$groupID' 
	 		 		AND stk_grp.stock_group_id=si.stock_item_grp_id 
	 		 		AND  mmr_m.mrr_create_date between  '$date_from' AND '$date_to'
					AND si.stock_part_m_id=spd.stock_part_m_id  
					AND si.stock_code_m_id=scd.stock_code_m_id 
					 GROUP BY si.stock_item_id  ";
	 		 		
		return parent::selectQuery($sql);
 	}
	
	public function retriveFastMovingStockItemReports($date_from,$date_to)
 	{	 
		
 		 $sql = "SELECT con_m . * , con_d . * , si . *  
 		 		FROM consumptions_master con_m, consumption_details con_d, stock_item si 
 		 		WHERE con_m.cm_id = con_d.consumptions_master_id 
 		 		
 		 		AND con_d.stock_item_id = si.stock_item_id 
 		 		AND con_m.created_at between  '$date_from' AND '$date_to'  
 		 		GROUP BY con_d.stock_item_id ";
		return parent::selectQuery($sql);
 	}
 	
 	
 	public function retriveFinishedItemReport()
	{
		$sql='SELECT * FROM finish_item';
		
		return parent::selectQuery($sql);
	}	
	
	public function retriveRawItemReport()
	{
		$sql='SELECT * FROM raw_item';
		
		return parent::selectQuery($sql);
	}	
	
}
?>