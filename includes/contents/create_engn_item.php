<?php
require_once('../../lib/defination.class.php');
require_once ("../../lib/stock.class.php");

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


?>



<div id="test">

<form  id="CreateStockItem" name="CreateStockItem" method="post"   action="includes/model/stock_item_actions.php">
<input type="hidden" id="id" value="1">
  <table width="100%" border="0" cellspacing="4" cellpadding="2">
    <tr>
      <td width="33%" height="25" align="right" valign="top">Name: &nbsp;</td>
      <td width="67%" height="25" align="left" valign="top"><input name="txtStkName" type="text" id="txtStkName" class="inventori_txtfield" /></td>
    </tr>
    <tr class='item_code'>
      <td height="25" align="right" valign="top">Item Code: &nbsp; </td>
      <td height="25" align="left" valign="top" id="alias"><input name="txtStkcode[]" type="text" class="txtStkAlias[] inventori_txtfield" id="txtStkcode[]" <?php if($user_level==0) { ?> disabled="disabled" <?php } ?>   /> 
	    <a href="#" class="add_input" >Add Item </a>
	    <a href="#" class="remove_input" >Remove item</a>	    
	    <div id="divTxt"></div>        </td>
    </tr>
	
	
	
    <tr class='part_no'>
      <td height="25" align="right" valign="top">Part No: &nbsp; </td>
      <td height="25" align="left" valign="top"><input name="txtStkPart[]" type="text" id="txtStkPart[]" class="inventori_txtfield" />
	  <a href="#" class="add_part_no" >Add Item </a>
	    <a href="#" class="remove_part_no" >Remove item</a>	    
	    <div id="divTxt"></div>	  </td>
    </tr>
    <tr>
      <td height="25" align="right" valign="top">Catalog No        </td>
      <td height="25" align="left" valign="top"><input name="catalog_no" type="text" id="catalog_no" /></td>
    </tr>
    <tr>
      <td height="25" align="right" valign="top">Under</td>
      <td height="25" align="left" valign="top"><select name="UnderStock" id="UnderStock" class="inventori_txtfield" >
        <?php echo $stockItemName; ?>
      </select></td>
    </tr>
    <tr>
      <td height="25" align="right" valign="top">Unit: &nbsp;</td>
      <td height="25" align="left" valign="top"><select name="unitId" id="unitId" class="inventori_txtfield" >
        <?php echo $unitName; ?>
      </select></td>
    </tr>
    <tr>
      <td height="25" align="right" valign="top">Description: &nbsp;</td>
      <td height="25" align="left" valign="top"><textarea name="txtStkDesc" id="txtStkDesc" class="inventori_txtfield" ></textarea></td>
    </tr>
    <tr>
      <td height="25" align="right" valign="top">Stock Group: &nbsp;</td>
      	<td height="25" align="left" valign="top">
	  		<select name="stkGrp" id="stkGrp"  class="inventori_txtfield">
				<?php echo $StockGrpInfo_options; ?>
	    </select>		 </td>
    </tr>
    <tr>
      <td height="25" align="right" valign="top">Stock Department: &nbsp;</td>
      <td height="25" align="left" valign="top">
      	<select name="stockDept" id="stockDept" class="inventori_txtfield">
			<?php echo $stockDept; ?>			
      	</select>  	</td>
    </tr>
    <tr>
      <td height="25" align="right" valign="top">Section: &nbsp;</td>
      <td height="25" align="left" valign="top"><select name="stkSection" id="stkSection" class="inventori_txtfield" >
			<?php echo $stockSection; ?>			
      </select></td>
    </tr>
    
    <tr>
      <td height="25" align="right" valign="top">Machine Name: &nbsp; </td>
      <td height="25" align="left" valign="top"><select name="stkMName" id="stkMName" class="inventori_txtfield" >
			<?php echo $stockMachineName; ?>			
      </select></td>
    </tr>
    <tr>
      <td height="25" align="right" valign="top">Machine Model: &nbsp; </td>
      <td height="25" align="left" valign="top"><select name="stkMModel" id="stkMModel" class="inventori_txtfield">
			<?php echo $stockMachineModelName; ?>			
      </select></td>
    </tr>
    
    <tr>
      <td height="25" align="right" valign="top">Manufecturer: &nbsp; </td>
      <td height="25" align="left" valign="top"><select name="manufecturer" id="manufecturer" class="inventori_txtfield" >
        <?php echo $stockManufecturer; ?>
        </select></td>
    </tr>
    <tr>
      <td height="25" align="right" valign="top">Minimum Stock: &nbsp; </td>
      <td height="25" align="left" valign="top"><input name="minStock" type="text" id="minStock" class="inventori_txtfield" /></td>
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
            <input type="text" name="ReorderQty" style="width:25px" class="ReorderQty" /></td>
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
          <td align="left" valign="top"><input name="opQnty" type="text" class="opQnty" size="10"  /></td>
          <td align="left" valign="top"><input name="OpRate" type="text" class="OpRate" size="7" /></td>
          <td align="left" valign="top"><input name="opValue" type="text" class="opValue" size="15" /></td>
        </tr>
      </table></td>
    </tr>
    
    <tr>
      <td colspan="2">
        <div align="center">
          <table width="55%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td align="center" valign="middle"><a href="includes/contents/list_all/list_all_engineer_item.php?height=500&width=600" title="Engineering Item" class="thickbox button2">List All </a> </td>
              <td align="center" valign="middle"><input name="btn_StkItem" type="submit" class="button saveButtonwidth" id="btn_StkItem" value="Save" /></td>
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
