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
 		$sql = "SELECT mmr_m . * , mrr_d . * , stc_itm . * 
	 			FROM mrr_master mmr_m, mrr_details mrr_d, stock_item stc_itm 
	 			WHERE 
	 			mmr_m.mrr_id = mrr_d.mrr_m_id 
	 			AND
	 			mrr_d.stock_item_id = stc_itm.stock_item_id 
	 			AND
	 			 mmr_m.mrr_create_date between '$date_before' AND '$date_after'";
 			 
		return parent::selectQuery($sql);
 	}
	
	
	public function retriveDailyRecivedItemUnitReports($itemID)
 	{
 		$sql = "SELECT * FROM stock_item_units WHERE stock_item_unit_id=$itemID";
		return parent::selectQuery($sql);
 	}
	
	public function retriveDailyIssueReports()
 	{	 
		$date=date("Y-m-d");
		$date_after = strtotime(" $date + 1 day" );
		$date_before = strtotime(" $date - 1 day" );
		
		$date_after=sql_date($date_after);
		$date_before=sql_date($date_before); 
		
 		 $sql = "SELECT con_m . * , con_d . * , stc_itm . *, stk_mcin.* 
 		 FROM consumptions_master con_m, consumption_details con_d, 
 		 stock_item stc_itm, stock_machine stk_mcin WHERE 
 		 con_m.cm_id = con_d.consumptions_master_id AND con_d.stock_item_id = stc_itm.stock_item_id  AND stc_itm.stock_machine_id=stk_mcin.m_id AND  con_m.created_at between '$date_before' AND '$date_after'";
		return parent::selectQuery($sql);
 	}
	
	public function retriveGroupIssueReports($groupID,$date_from,$date_to)
 	{	 
		
 		 $sql = "SELECT con_m . * , con_d . * , stc_itm . *, stk_mcin.*, stk_grp.*  FROM consumptions_master con_m, consumption_details con_d, stock_item stc_itm, stock_machine stk_mcin, stock_group stk_grp WHERE con_m.cm_id = con_d.consumptions_master_id AND con_d.stock_item_id = stc_itm.stock_item_id AND stc_itm.stock_machine_id=stk_mcin.m_id AND stk_grp.stock_group_id='$groupID' AND stk_grp.stock_group_id=stc_itm.stock_item_grp_id AND  con_m.created_at between  '$date_from' And '$date_to' ";
		return parent::selectQuery($sql);
 	}
	
	 public function retriveGroupReceivedReports($groupID,$date_from,$date_to)
 	{	 
		
 		 $sql = "SELECT mmr_m .*, mrr_d .*, stc_itm . *, stk_mcin.*, stk_grp.*  FROM mrr_master mmr_m, mrr_details mrr_d, stock_item stc_itm, stock_machine stk_mcin, stock_group stk_grp WHERE mmr_m.mrr_id = mrr_d.mrr_m_id  AND mrr_d.stock_item_id = stc_itm.stock_item_id AND stc_itm.stock_machine_id=stk_mcin.m_id AND stk_grp.stock_group_id='$groupID' AND stk_grp.stock_group_id=stc_itm.stock_item_grp_id AND  mmr_m.mrr_create_date between  '$date_from' And '$date_to' ";
		return parent::selectQuery($sql);
 	}
	
	public function retriveFastMovingStockItemReports($date_from,$date_to)
 	{	 
		
 		 $sql = "SELECT con_m . * , con_d . * , stc_itm . *  FROM consumptions_master con_m, consumption_details con_d, stock_item stc_itm WHERE con_m.cm_id = con_d.consumptions_master_id AND con_d.stock_item_id = stc_itm.stock_item_id AND con_m.created_at between  '$date_from' And '$date_to' group by con_d.stock_item_id ";
		return parent::selectQuery($sql);
 	}	
	
}
?>