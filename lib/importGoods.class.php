
<?php
require_once("dbutils.class.php");
 /*-------------------------------------------------------
 | This is the Stock class
 |--------------------------------------------------------*/
class ImportGoods extends DbUtils
{

//// Stock Group ////////////////////////////////

	function CreateImportGoods($getData)
	{
		$sql = "INSERT INTO import_goods VALUES(".$getData.")";
		return parent::insertQuery($sql);
	}
	
	 function retriveImportGoods(){
 		$sql = "Select * from import_goods";
		return parent::selectQuery($sql);
	 }	
	 
	function retriveImportGoodsById($imp_gds_id){
		$sql = "select * FROM import_goods WHERE id = '$imp_gds_id'";
		return parent::selectQuery($sql);
	}		 
	
	
	function updateImportGoods($imp_gds_id,
													$initial_offer_date,
													$pi_num,
													$pi_date,
													$factory_indent_num,
													$ic_num,
													$ic_date,
													$goods_shipment_date,
													$port_arrival_date,
													$goods_deliv_date,
													$factory_rec_date,
													$short_supply_claim_date,
													$short_supply_recive_date,
													$remark){
		$sql = "UPDATE import_goods SET initial_offer_date='$initial_offer_date',pi_num='$pi_num',pi_date='$pi_date',
		
										factory_indent_num='$factory_indent_num',ic_num='$ic_num',ic_date='$ic_date',
										
										goods_shipment_date='$goods_shipment_date',port_arrival_date='$port_arrival_date',
										
										goods_deliv_date='$goods_deliv_date',factory_rec_date='$factory_rec_date',
										
										short_supply_claim_date='$short_supply_claim_date',
										
										short_supply_recive_date='$short_supply_recive_date',
										
										remark='$remark' WHERE id = '$imp_gds_id'";
		return parent::selectQuery($sql);
	}	
	 	
}	
	
?>