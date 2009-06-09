<?php
require_once('../../lib/defination.class.php');
require_once ("../../lib/stock.class.php");
require_once('../../lib/defination.class.php');

//// Retrive Stock Group Name
$objStockGroupInfo = new Stock();
$stock=new Stock();
$StockGrpInfo=$objStockGroupInfo->retriveStockGroupUnderInfo();
$StockGrpInfo_options = options_for_select(	$StockGrpInfo,
											'stock_group_id',
											'stock_group_name',
											true	
										);
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
<form  id="CreateStockItem" name="CreateStockItem" method="post"   action="includes/model/raw_item_actions.php"><table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td>Name</td>
    <td><input name="stkName" type="text" class="inventori_txtfield" id="stkName"></td>
  </tr>
  <tr>
    <td>Code</td>
    <td><input name="txtStkcode" type="text" class="inventori_txtfield" id="txtStkcode" <?php if($user_level==0) { ?> disabled="disabled" <?php } ?>></td>
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
      <?php echo $unitName; ?>
    </select></td>
  </tr>
 
  <tr>
    <td colspan="2"><table width="100%" border="0">
      <tr>
        <td width="17%">where</td>
        <td width="18%"><input name="unitRel1" type="text" id="unitRel1" /></td>
        <td width="26%"><select name="select" id="select" class="unit" >
          <?php echo $unitName; ?>
        </select></td>
        <td width="19%"><input name="unitRel2" type="text" id="unitRel2" /></td>
        <td width="20%"><select name="select2" id="select2" class="unit" >
          <?php echo $unitName; ?>
        </select></td>
      </tr>
    </table></td>
    </tr>
  <tr>
    <td>Description</td>
    <td><input name="desc" type="text" class="inventori_txtfield" id="desc"></td>
  </tr>
  <tr>
    <td>Staple Length </td>
    <td><input name="length" type="text" class="inventori_txtfield" id="length"></td>
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
          <td align="left" valign="top"><input name="opQnty" type="text" class="opQnty" size="10"></td>
          <td align="left" valign="top"><input name="OpRate" type="text" class="OpRate" size="7" /></td>
          <td align="left" valign="top"><input name="opValue" type="text" class="opValue" size="15" /></td>
        </tr>
        <tr>
          <td align="right" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="4" align="right" valign="top"><div align="center">
            <input type="submit" name="btn_save" value="Submit" />
          </div></td>
          </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    </tr>
</table>
</form>
</div>
<script type="text/javascript" charset="utf-8">
	$(".unit:first").change(function(){
	 	var t = $(".unit:first :selected").text();
	 	$("#punit p").html(t);
	});
	
	$("#alt.unit").change(function(){
	 	var t =$("#alt.unit :seleted").text();
 	});
</script>


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
		
		window.open('includes/contents/localtionRawOpQty.php?qty='+qty,'mywindow',		'width=900,height=200,top=300,left=30')
		
		
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
