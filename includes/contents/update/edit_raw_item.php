<?php
require_once('../../../lib/defination.class.php');
require_once ('../../../lib/stock.class.php');
require_once ("../../../lib/raw_item.class.php");
include('../../../lib/supplier.class.php');
include('../../../lib/lc.class.php');
include('../../../lib/lot.class.php');


//Object
$objStockGroupInfo = new Stock();
$stock=new Stock();

$objRawItemInfo = new rawItem();


@session_start();
$user_level = $_SESSION[user_level];

$stc_itm_id=$_GET['stc_itm_id'];
$rawItemByID=$objRawItemInfo->retriveRawItemByID($stc_itm_id);
$stock_item_id=$rawItemByID[0]['stock_item_id'];
$StockGroupId = $rawItemByID[0]['stock_item_grp_id'];
$StockUnitId = $rawItemByID[0]['stock_item_unit_id'];
$StockAltUnitId = $rawItemByID[0]['stock_alt_unit'];
$date=$rawItemByID[0]['date'];
$lc=$rawItemByID[0]['lc'];
$supplier=$rawItemByID[0]['supplier'];
$qa=$rawItemByID[0]['qa'];
$locationId=$rawItemByID[0]['location'];
$lot=$rawItemByID[0]['lot'];



//// Retrive Stock Group Name
$StockGrpInfo=$objStockGroupInfo->retriveStockGroupUnderInfo();
$StockGrpInfo_options = options_for_select(	$StockGrpInfo,
											'stock_group_id',
											'stock_group_name',
											true,	
											$StockGroupId
										);
//// Retrive Stock Unit Name
$unitName=options_for_select(	$stock->retriveStockUnit(),
											'stock_item_unit_id',
											'stock_item_unit_name',
											true,
											$StockUnitId
										);	
										
$location_info=	options_for_select(	$stock->retriveLocation(),
											'stock_location_name',
											'stock_location_name',
											true,
											$locationId
										);	
$Supplier = new Supplier;
$outputSupplierItem=options_for_select($Supplier->retriveSupplierInfo(),
									'sup_name',
									'sup_name',
									  true,
									  $supplier);	
$LC = new LC;
$outputLC=options_for_select($LC->retriveLcInfo(),
									'lc_name',
									'lc_name',
									true,
									  $lc);	
$Lot = new Lot;
$outputLot=options_for_select($Lot->retriveLotInfo(),
									'lot_name',
									'lot_name',
									true,
									$lot);																															
/////////////////////////////////						

$allStockItemUnit=$objStockGroupInfo->retriveStockUnit();
$rowStockItemUnit=count($allStockItemUnit);
		
?>



<div id="test">

<form  id="CreateStockItem" name="CreateStockItem" method="post"   action="includes/model/raw_item_update_actions.php"><table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td>Name</td>
    <td><input name="stkName" type="text" class="inventori_txtfield" id="stkName" value="<?php echo $rawItemByID[0]['stock_item_name'];?>"></td>
  </tr>
  <tr>
    <td>Code</td>
    <td><input name="txtStkcode" type="text" class="inventori_txtfield" id="txtStkcode" <?php if($user_level==0) { ?> disabled="disabled" <?php } ?> value="<?php echo $rawItemByID[0]['stock_code_m_id'];?>"></td>
  </tr>
  <tr>
    <td>Group</td>
    <td><select name="stkGrp" id="stkGrp"  class="inventori_txtfield">
				<?php echo $StockGrpInfo_options; ?>
	    </select></td>
  </tr>
  <tr>
    <td>Unit</td>
    <td><select name="unitId" id="unitId" class="unit" >
      <?php echo $unitName; ?>
    </select></td>
  </tr>
  <tr>
    <td>Alt. Unit </td>
    <td><select name="altUnitId" id="alt" class="unit" >
      <option value="0">Primary</option>
		<?php for($i=0; $i<$rowStockItemUnit; $i++)
        {?>
        <option <?php if($StockAltUnitId==$allStockItemUnit[$i]['stock_item_unit_id']) echo 'selected'  ?> value="<?php echo $allStockItemUnit[$i]['stock_item_unit_id']?>"><?php echo $allStockItemUnit[$i]['stock_item_unit_name']?></option>
        <?php }?>
    </select></td>
  </tr>
 
  <tr>
    <td colspan="2"><table width="100%" border="0">
      <tr>
        <td width="17%">where</td>
        <td width="18%"><input name="unitRel1" type="text" id="unitRel1"  value="<?php echo $rawItemByID[0]['unit_relation1'];?>"/></td>
        <td width="26%"><select name="select" id="select" class="unit" >
          <?php echo $unitName; ?>
        </select></td>
        <td width="19%"><input name="unitRel2" type="text" id="unitRel2"  value="<?php echo $rawItemByID[0]['unit_relation2'];?>"/></td>
        <td width="20%"><select name="select2" id="select2" class="unit" >
		<?php for($i=0; $i<$rowStockItemUnit; $i++)
        {?>
        <option <?php if($StockAltUnitId==$allStockItemUnit[$i]['stock_item_unit_id']) echo 'selected'  ?> value="<?php echo $allStockItemUnit[$i]['stock_item_unit_id']?>"><?php echo $allStockItemUnit[$i]['stock_item_unit_name']?></option>
        <?php }?>
        </select></td>
      </tr>
    </table></td>
    </tr>
  <tr>
    <td>Description</td>
    <td><input name="desc" type="text" class="inventori_txtfield" id="desc"  value="<?php echo $rawItemByID[0]['stock_item_desc'];?>"></td>
  </tr>
  <tr>
    <td>Staple Length </td>
    <td><input name="length" type="text" class="inventori_txtfield" id="length"  value="<?php echo $rawItemByID[0]['length'];?>"></td>
  </tr>
  <tr>
    <td>Date </td>
    <td><input name="date" type="text" class="inventori_txtfield" id="date" value="<?php echo $rawItemByID[0]['date'];?>" /></td>
  </tr>
  <tr>
    <td>LC </td>
    <td><select name="lc" id="lc" class="inventori_txtfield" >
        <?php echo $outputLC; ?>
    </select></td>
  </tr>
  <tr>
    <td>LOT </td>
    <td><select name="lot" id="lot" class="inventori_txtfield" >
        <?php echo $outputLot; ?>
    </select></td>
  </tr>
  <tr>
    <td>Suplier </td>
    <td><select name="suplier" id="suplier" class="inventori_txtfield" >
        <?php echo $outputSupplierItem; ?> 
    </select></td>
  </tr>
  <tr>
    <td>Location</td>
    <td><select name="locationID" id="locationID" class="inventori_txtfield" >
        <?php echo $location_info; ?> 
    </select></td>
  </tr>
  <tr>
    <td>QA </td>
    <td><input name="qa" type="text" class="inventori_txtfield" id="qa" value="<?php echo $rawItemByID[0]['qa'];?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="25%">&nbsp;</td>
          <td width="25%">Quantity</td>
          <td width="25%">Rate</td>
          <td width="25%">value</td>
        </tr>
        <tr>
          <td align="right" valign="top">Opening Balance: &nbsp; </td>
          <!--onblur="createLocation();"-->
          <td align="left" valign="top"><input name="opQnty" type="text" class="opQnty" size="10" value="<?php echo $rawItemByID[0]['stock_item_op_balance'];?>"></td>
          <td align="left" valign="top"><input name="OpRate" type="text" class="OpRate" size="7" value="<?php echo $rawItemByID[0]['stock_item_op_rate'];?>"/></td>
          <td align="left" valign="top"><input name="opValue" type="text" class="opValue" size="15" value="<?php echo $rawItemByID[0]['stock_item_op_value'];?>"/></td>
        </tr>
        <tr>
          <td align="right" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" align="right" valign="top">
          <a href="includes/contents/list_all/list_all_raw_item.php?height=500&width=600" title="Raw Item" class="thickbox button2">List All          </a>          </td>
          <td align="right" valign="top"><input type="submit" name="btn_save" value="Update" /></td>
          <td align="right" valign="top"><input type="hidden" name="stock_item_id" id="stock_item_id" value="<?php echo $stock_item_id; ?>" /></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    </tr>
</table>
</form>
</div>
<script type='text/javascript'>
	// For Item Code
	function add_element() {
		var parent =$('.item_code:last');
		parent.clone(true).insertAfter(parent);
		console.log(parent);
	}

	
	$(".remove_input").click(function (){
		$(".item_code:last").remove(); 
		return false;
	})
	

  	$(".add_input").live("click", function(){
      	add_element();
      	return false;
    });
	///////////////////////////////////////////////////
	/// For Part No
	function add_part_no() {
		var parent =$('.part_no:last');
		parent.clone(true).insertAfter(parent);
		console.log(parent);
	}

	
	$(".remove_part_no").click(function (){
		$(".part_no:last").remove(); 
		return false;
	})
	

  	$(".add_part_no").live("click", function(){
      	add_part_no();
      	return false;
    });
	
	$('.opQnty').blur(function(){
		var parent= $(this).parent().parent();
		console.log(parent);  
		var qty  = parseFloat(parent.find('.opQnty:first').val());
		
		window.open('includes/contents/localtionOpQtyEngItem.php?qty='+qty,'mywindow',		'width=600,height=200,top=300,left=300')
		
		
	})
	
	$('.OpRate').blur(function(){
		var parent= $(this).parent().parent();
		console.log(parent);
		var qty  = parseFloat(parent.find('.opQnty:first').val());
		var rate = parseFloat(parent.find('.OpRate:first').val());
		var total= qty*rate;
		parent.find('.opValue:first').attr('value',total);
		return false;
	})
	
	
	$('.safety_stock').blur(function(){
		
		var parent= $(this).parent().parent();
		console.log(parent);
		var rd  = parseFloat(parent.find('.rd:first').val());
		
		var lt = parseFloat(parent.find('.lt:first').val());
		var safety_stock = parseFloat(parent.find('.safety_stock:first').val());
		var total= rd*lt+safety_stock;
		parent.find('.ReorderQty:first').attr('value',total);
		return false;
	})
	
      
	/////////////////////////////////////////
</script>
<script type="text/javascript" charset="utf-8">
	
	var options={
			target:'#test',
			beforeSubmit:function(){
				$("#test").slideUp(200).html("");	
			},
			success:function(){
				$("#test").slideDown(200);
			},
	}
		
	$("form").submit(function(){
		$('#btn_save').attr('disabled');
		$(this).ajaxSubmit(options);
		return false;
	})

/*---------------------------------------------------*/
</script>
