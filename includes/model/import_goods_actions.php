<?php

require_once ("../../lib/importGoods.class.php");
$objImportGoodsInfo = new ImportGoods();
extract($_POST);
	

		/////////////////////////////
		$initial_offer_date =$_POST['initial_offer_date'];
		$pi_num =$_POST['pi_num'];
		$pi_date =$_POST['pi_date'];
		$factory_indent_num =$_POST['factory_indent_num'];
		$ic_num =$_POST['ic_num'];
		$ic_date =$_POST['ic_date'];
		$goods_shipment_date =$_POST['goods_shipment_date'];
		$port_arrival_date=$_POST['port_arrival_date'];
		$goods_deliv_date =$_POST['goods_deliv_date'];
		$factory_rec_date =$_POST['factory_rec_date'];
		$short_supply_claim_date =$_POST['short_supply_claim_date'];
		$short_supply_recive_date =$_POST['short_supply_recive_date'];
		$remark=$_POST['remark'];
		
		$getData = "'','$initial_offer_date','$pi_num','$pi_date','$factory_indent_num','$ic_num','$ic_date','$goods_shipment_date','$port_arrival_date','$goods_deliv_date','$factory_rec_date','$short_supply_claim_date','$short_supply_recive_date','$remark'";
		
		$objImportGoodsInfo->CreateImportGoods($getData);
	
		echo "<b>Data Save Successsfull</b>";
		
	
?>	