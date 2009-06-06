<?php
require_once('../../../lib/defination.class.php');
require_once ('../../../lib/stock.class.php');

//// Retrive Stock Group Name
$objStockGroupInfo = new Stock();
$stock=new Stock();
$StockGrpInfo=$objStockGroupInfo->retriveStockGroupUnderInfo();
$StockGrpInfo_options = options_for_select(	$StockGrpInfo,
											'stock_group_id',
											'stock_group_name',
											true	
										);
/////////////////////////////////

//// Retrive Stock Catagory Name
$objStockCatInfo = new Stock();
$StockCatInfo=$objStockCatInfo->retriveStockCatUnderInfo();
////////////////////////////////////////////////
$StockCatInfo_options = options_for_select(	$StockCatInfo,
											'stock_cat_id',
											'stock_cat_name',
											true	
										);

$stockDept=options_for_select(	$stock->retriveStockDepartmentInfo(),
											'stock_dept_id',
											'stock_dept_name',
											true	
										);
										
$stockSection=options_for_select(	$stock->retriveStockSection(),
											'sec_id',
											'sec_name',
											true	
										);	
										
$stockMachineName=options_for_select(	$stock->retriveMachineName(),
											'm_id',
											'm_name',
											true	
										);
										
$stockMachineModelName=options_for_select(	$stock->retriveMachineModelName(),
											'machine_model_id',
											'machine_model_name',
											true	
										);	
$stockManufecturer=options_for_select(	$stock->retriveManufecturer(),
											'manu_id',
											'manu_name',
											true	
										);	
$stockItemName=options_for_select(	$stock->retriveStockItem(),
											'stock_item_id',
											'stock_item_name',
											true	
										);																																																					
/////////////////////////////////

//// Retrive Stock Unit Name
$unitName=options_for_select(	$stock->retriveStockUnit(),
											'stock_item_unit_id',
											'stock_item_unit_name',
											true	
										);	
/////////////////////////////////
@session_start();
	
$user_level = $_SESSION[user_level];


$stc_itm_id=$_GET['stc_itm_id'];
$stockItemByID=$objStockGroupInfo->retriveStockItemByid($stc_itm_id);
$allStockItem=$objStockGroupInfo->retriveStockItem();
$rowStockItem=count($allStockItem);
$stock_p_id=$stockItemByID["0"]["stock_p_id"];

$allStockItemUnit=$objStockGroupInfo->retriveStockUnit();
$rowStockItemUnit=count($allStockItemUnit);
$stock_item_unit_id=$stockItemByID["0"]["stock_item_unit_id"];

$allStockGroup=$objStockGroupInfo->retriveStockGroupListAll();
$rowStockGroup=count($allStockGroup);
$stock_Group_id=$stockItemByID["0"]["stock_item_grp_id"];

$allStockDepartment=$objStockGroupInfo->retriveStockDepartmentListAll();
$rowStockDepartment=count($allStockDepartment);
$stock_dep_id=$stockItemByID["0"]["stock_dept_id"];

$allStockSection=$objStockGroupInfo->retriveStockSection();
$rowStockSection=count($allStockSection);
$stock_sec_id=$stockItemByID["0"]["stock_section_id"];

$allStockMachine=$objStockGroupInfo->retriveMachineName();
$rowStockMachine=count($allStockMachine);
$stock_Machi_id=$stockItemByID["0"]["stock_machine_id"];

$allStockMacModel=$objStockGroupInfo->retriveMachineModelName();
$rowStockMacModel=count($allStockMacModel);
$stock_Mac_model_id=$stockItemByID["0"]["stock_machine_model_id"];

$allStockManufec=$objStockGroupInfo->retriveManufecturer();
$rowStockmanufec=count($allStockManufec);
$stock_manufec_id=$stockItemByID["0"]["stock_manufacturer_id"];

$stock_ItemCode_id=$stockItemByID["0"]["stock_code_m_id"];
$allStockItemCode=$objStockGroupInfo->retriveStockCodeDetails($stock_ItemCode_id);

$partId=$stockItemByID["0"]["stock_part_m_id"];
$stockPartNameByID=$objStockGroupInfo->getStockPartByID($partId);

?>



<div id="test">

<form  id="updateStockItem" name="updateStockItem" method="post" action="includes/model/stock_item_update_actions.php">
<input type="hidden" id="id" value="1">
  <table width="100%" border="0" cellspacing="4" cellpadding="2">
    <tr>
      <td width="33%" height="25" align="right" valign="top">Name: &nbsp;</td>
      <td width="67%" height="25" align="left" valign="top"><input name="txtStkName" type="text" id="txtStkName" class="inventori_txtfield" value="<?php echo $stockItemByID["0"]["stock_item_name"]; ?>" /></td>
    </tr>
    <tr class='item_code'>
      <td height="25" align="right" valign="top">Item Code: &nbsp; </td>
      <td height="25" align="left" valign="top" id="alias"><input name="txtStkcode" type="text" class="txtStkAlias inventori_txtfield" id="txtStkcode" value="<?php echo $allStockItemCode["0"]["stock_code"]; ?>"    /> 
	    	    
	    <div id="divTxt"></div>        </td>
    </tr>
	
	
	
    <tr class='part_no'>
      <td height="25" align="right" valign="top">Part No: &nbsp; </td>
      <td height="25" align="left" valign="top"><input name="txtStkPart" type="text" id="txtStkPart" class="inventori_txtfield" value="<?php echo $stockPartNameByID["0"]["stock_part"]; ?>" />    
	    <div id="divTxt"></div>	  </td>
    </tr>
    <tr>
      <td height="25" align="right" valign="top">Catalog No        </td>
      <td height="25" align="left" valign="top"><input name="catalog_no" type="text" id="catalog_no" value="<?php echo $stockItemByID["0"]["stock_catalog_no"]; ?>" /></td>
    </tr>
    <tr>
      <td height="25" align="right" valign="top">Under</td>
      <td height="25" align="left" valign="top">
	  		<select class="inventori_txtfield" name="under_engi_item" id="under_engi_item">
					<option value="0">Primary</option>
					<?php for($i=0; $i<$rowStockItem; $i++)
					{?>
					<option <?php if($stock_p_id==$allStockItem[$i]['stock_item_id']) echo 'selected'  ?> value="<?php echo $allStockItem[$i]['stock_item_id']?>"><?php echo $allStockItem[$i]['stock_item_name']?></option>
					<?php }?>
			</select>			</td>
    </tr>
    <tr>
      <td height="25" align="right" valign="top">Unit: &nbsp;</td>
      <td height="25" align="left" valign="top">
	  		<select class="inventori_txtfield" name="unit" id="unit">
					<option value="0">Primary</option>
					<?php for($i=0; $i<$rowStockItemUnit; $i++)
					{?>
					<option <?php if($stock_item_unit_id==$allStockItemUnit[$i]['stock_item_unit_id']) echo 'selected'  ?> value="<?php echo $allStockItemUnit[$i]['stock_item_unit_id']?>"><?php echo $allStockItemUnit[$i]['stock_item_unit_name']?></option>
					<?php }?>
			</select></td>
    </tr>
    <tr>
      <td height="25" align="right" valign="top">Description: &nbsp;</td>
      <td height="25" align="left" valign="top"><textarea name="txtStkDesc" id="txtStkDesc" class="inventori_txtfield" ><?php echo $stockItemByID["0"]["stock_item_desc"]; ?></textarea></td>
    </tr>
    <tr>
      <td height="25" align="right" valign="top">Stock Group: &nbsp;</td>
      	<td height="25" align="left" valign="top">
		<select class="inventori_txtfield" name="stockGroup" id="stockGroup">
          <option value="0">Primary</option>
          <?php for($i=0; $i<$rowStockGroup; $i++)
					{?>
          <option <?php if($stock_Group_id==$allStockGroup[$i]['stock_group_id']) echo 'selected'  ?> value="<?php echo $allStockGroup[$i]['stock_group_id']?>"><?php echo $allStockGroup[$i]['stock_group_name']?></option>
          <?php }?>
        </select></td>
    </tr>
    <tr>
      <td height="25" align="right" valign="top">Stock Department: &nbsp;</td>
      <td height="25" align="left" valign="top">
	  
	  <select class="inventori_txtfield" name="stockDepartment" id="stockDepartment">
        <option value="0">Primary</option>
        <?php for($i=0; $i<$rowStockDepartment; $i++)
					{?>
        <option <?php if($stock_dep_id==$allStockDepartment[$i]['stock_dept_id']) echo 'selected'  ?> value="<?php echo $allStockDepartment[$i]['stock_dept_id']?>"><?php echo $allStockDepartment[$i]['stock_dept_name']?></option>
        <?php }?>
      </select>
	  </td>
    </tr>
    <tr>
      <td height="25" align="right" valign="top">Section: &nbsp;</td>
      <td height="25" align="left" valign="top">
	  <select class="inventori_txtfield" name="stockSection" id="stockSection">
        <option value="0">Primary</option>
        <?php for($i=0; $i<$rowStockSection; $i++)
					{?>
        <option <?php if($stock_sec_id==$allStockSection[$i]['sec_id']) echo 'selected'  ?> value="<?php echo $allStockSection[$i]['sec_id']?>"><?php echo $allStockSection[$i]['sec_name']?></option>
        <?php }?>
      </select></td>
    </tr>
    
    <tr>
      <td height="25" align="right" valign="top">Machine Name: &nbsp; </td>
      <td height="25" align="left" valign="top">
	  <select class="inventori_txtfield" name="stockMachine" id="stockMachine">
        <option value="0">Primary</option>
        <?php for($i=0; $i<$rowStockMachine; $i++)
					{?>
        <option <?php if($stock_Machi_id==$allStockMachine[$i]['m_id']) echo 'selected'  ?> value="<?php echo $allStockMachine[$i]['m_id']?>"><?php echo $allStockMachine[$i]['m_name']?></option>
        <?php }?>
      </select>
	  </td>
    </tr>
    <tr>
      <td height="25" align="right" valign="top">Machine Model: &nbsp; </td>
      <td height="25" align="left" valign="top">
	  <select class="inventori_txtfield" name="machineModel" id="machineModel">
        <option value="0">Primary</option>
        <?php for($i=0; $i<$rowStockMacModel; $i++)
					{?>
        <option <?php if($stock_Machi_id==$allStockMacModel[$i]['machine_model_id']) echo 'selected'  ?> value="<?php echo $allStockMacModel[$i]['machine_model_id']?>"><?php echo $allStockMacModel[$i]['machine_model_name']?></option>
        <?php }?>
      </select></td>
    </tr>
    
    <tr>
      <td height="25" align="right" valign="top">Manufecturer: &nbsp; </td>
      <td height="25" align="left" valign="top">
	  <select class="inventori_txtfield" name="manufecture" id="manufecture">
        <option value="0">Primary</option>
        <?php for($i=0; $i<$rowStockmanufec; $i++)
					{?>
        <option <?php if($stock_manufec_id==$allStockManufec[$i]['manu_id']) echo 'selected'  ?> value="<?php echo $allStockManufec[$i]['manu_id']?>"><?php echo $allStockManufec[$i]['manu_name']?></option>
        <?php }?>
      </select></td>
    </tr>
    <tr>
      <td height="25" align="right" valign="top">Minimum Stock: &nbsp; </td>
      <td height="25" align="left" valign="top"><input name="minStock" type="text" id="minStock" class="inventori_txtfield" value="<?php echo $stockItemByID["0"]["stock_minimum_stock"]; ?>"/></td>
    </tr>
    <tr>
      <td height="25" align="right" valign="top">Reorder Quantity: &nbsp; </td>
      <td height="25" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>RD/monthor week 
            <input name="rd" type="text" id="rd"  style="width:25px" class="rd" />
            X Lt 
            <input name="lt" type="text" id="lt"  style="width:25px" class="lt"/>
            + Safety stock  <input name="safety_stock" type="text" id="safety_stock" style="width:25px" class="safety_stock" />
            =
            <input type="text" name="ReorderQty" style="width:25px" class="ReorderQty" value="<?php echo $stockItemByID["0"]["stock_reorder_qty"]; ?>" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table></td>
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
          <td align="left" valign="top"><input name="opQnty" type="text" class="opQnty" size="10" value="<?php echo $stockItemByID["0"]["stock_item_op_balance"]; ?>" /></td>
          <td align="left" valign="top"><input name="OpRate" type="text" class="OpRate" size="7" value="<?php echo $stockItemByID["0"]["stock_item_op_rate"]; ?>"/></td>
          <td align="left" valign="top"><input name="opValue" type="text" class="opValue" size="15" value="<?php echo $stockItemByID["0"]["stock_item_op_value"]; ?>" /></td>
        </tr>
      </table></td>
    </tr>
    
    <tr>
      <td colspan="2">
        <div align="center">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td align="center" valign="top"><table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td align="center" valign="middle"></td>
                    <td align="center" valign="middle"><input type="hidden" name="stcItmId" id="stcItmId" value="<?php echo $stc_itm_id;?>" /></td>
                    <td align="center" valign="middle"><input class="button" name="submit" type="submit" value="Update"/></td>
                  </tr>
              </table></td>
            </tr>
          </table>
        </div></td>
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
