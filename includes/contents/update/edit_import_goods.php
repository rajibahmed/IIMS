<?php
require_once ("../../../lib/importGoods.class.php");

$objImportGoodsInfo = new ImportGoods();
$imp_gds_id = $_GET['imp_gds_id'];

$ImportGoodsById=$objImportGoodsInfo->retriveImportGoodsById($imp_gds_id);
$rowImportGoodsById=count($ImportGoodsById);
for($j=0;$j<$rowImportGoodsById;$j++)
{
	$initial_offer_date=$ImportGoodsById[$j]['initial_offer_date'];
	$pi_num=$ImportGoodsById[$j]['pi_num'];
	$pi_date=$ImportGoodsById[$j]['pi_date'];
	$factory_indent_num=$ImportGoodsById[$j]['factory_indent_num'];
	$ic_num=$ImportGoodsById[$j]['ic_num'];
	$ic_date=$ImportGoodsById[$j]['ic_date'];
	$goods_shipment_date=$ImportGoodsById[$j]['goods_shipment_date'];
	$port_arrival_date=$ImportGoodsById[$j]['port_arrival_date'];
	$goods_deliv_date=$ImportGoodsById[$j]['goods_deliv_date'];
	$factory_rec_date=$ImportGoodsById[$j]['factory_rec_date'];
	$short_supply_claim_date=$ImportGoodsById[$j]['short_supply_claim_date'];
	$short_supply_recive_date=$ImportGoodsById[$j]['short_supply_recive_date'];
	$remark=$ImportGoodsById[$j]['remark'];
}

?>



<div id="note"> </div>
<link href="../../../css/stylesheet.css" rel="stylesheet" type="text/css" />

<div id="note"> </div>				
<form id="importGoodsForm" name="importGoodsForm" method="post"   action="includes/model/import_goods_update_actions.php" >
	<table width="100%" border="0" cellpadding="2" cellspacing="2" class="form" >
		
		  <tr>
		    <th>          
		    <th colspan="2" align="right">          
      <tr>
	    <th>          
        <th colspan="2" align="right">          
      <tr>
	    <th width="9%">            
        <th width="91%" colspan="2" align="right">
	  
        <div class="vertical_form">
            <p>
           <div align="left">
                	<label>Initial Offer Date:</label>
                    <input type="text" name="initial_offer_date" id="initial_offer_date" class="date" value="<?php echo $initial_offer_date;?>">
           </div>
            </p> 
            <p>
           <div align="left">
                	<label>Proforma Invoice number:</label>
                      <input type="text" name="pi_num" id="pi_num" value="<?php echo $pi_num;?>" />	
           </div>
            </p>                              
            <p>
           <div align="left">
                	<label>Proforma Invoice Date:</label>
                 <input type="text" name="pi_date" id="pi_date" class="date" value="<?php echo $pi_date;?>"/>
           </div>
            </p> 
             <p>
           <div align="left">
                	<label>Factory Indent Number:</label>
                    <input type="text" name="factory_indent_num" id="factory_indent_num" value="<?php echo $factory_indent_num;?>" />	
           </div>
            </p> 
            <p>
           <div align="left">
                	<label>L/C No:</label>
                    <input type="text" name="ic_num" id="ic_num" value="<?php echo $ic_num;?>" />	
           </div>
            </p> 
            <p>
           <div align="left">
                	<label>L/C Date:</label>
                    <input type="text" name="ic_date" id="ic_date" class="date" value="<?php echo $ic_date;?>" />
           </div>
            </p> 
             
             <p>
           <div align="left">
                	<label>Goods Shipment Date :</label>
                    <input type="text" name="goods_shipment_date" id="goods_shipment_date" class="date" value="<?php echo $goods_shipment_date;?>">
           </div>
            </p>
            <p>
           <div align="left">
                	<label>Port arrival date :</label>
                    <input type="text" name="port_arrival_date" id="port_arrival_date" class="date" value="<?php echo $port_arrival_date;?>">
           </div>
            </p>
            <p>
           <div align="left">
                	<label>Goods delivery date from port :</label>
                    <input type="text" name="goods_deliv_date" id="goods_deliv_date" class="date" value="<?php echo $goods_deliv_date;?>">
           </div>
            </p>
            <p>
           <div align="left">
                    <label>Factory receiving date :</label>
                    <input type="text" name="factory_rec_date" id="factory_rec_date" class="date" value="<?php echo $factory_rec_date;?>">
           </div>
            </p>
            <p>
           <div align="left">
                    <label>Short supply parts claim date :</label>
                    <input type="text" name="short_supply_claim_date" id="short_supply_claim_date" class="date value="<?php echo $short_supply_claim_date;?>"">
           </div>
            </p>
            <p>
           <div align="left">
                    <label>Short supply parts receiving date :</label>
                    <input type="text" name="short_supply_recive_date" id="short_supply_recive_date" class="date" value="<?php echo $short_supply_recive_date;?>">
           </div>
            </p>     
            <p>
           <div align="left">
                    <label>Remarks :</label>
                    <input type="text" name="remark" id="remark" value="<?php echo $remark;?>">
           </div>
            </p>                                    
            <div id="submit_set">
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" width="43%">&nbsp;</td>
    <td width="34%"><input type="hidden" name="imp_gds_id" id="imp_gds_id" value="<?php echo $imp_gds_id;?>" /></td>
    <td width="23%"><input class="button" name="Submit" type="submit" value="Save" id="Submit"/></td>
  </tr>
</table>
          </div>
		  </div>

           
          </div>  
	</table>		
</form>

<script type="text/javascript" src="js/rajib_script.js"> </script>	
		