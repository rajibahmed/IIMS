<?php  
	require_once('../../lib/defination.class.php');
	include('../../lib/supplier.class.php');
	include('../../lib/stock.class.php');
	include('../../lib/indent.class.php');
	
	
	// get stock item for combo box
	$Stock = new Stock;
	$outputStockItem=options_for_select(	$Stock->retriveStockItemByIndendId($id),
									'stock_item_id',
									'stock_item_name',
									true);
	
	
									
	// get Indend info for combo box;
	$Indent = new Indent;
	$outputIndend=options_for_select($Indent->retriveIndendInfo(),
									'indent_id',
									'indent_code',
									true);
	
?>



<style type="text/css">
<!--
.style10 {font-size: xx-small; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style11 {font-size: xx-small}
-->
</style>
<link href="../../css/stylesheet.css" rel="stylesheet" type="text/css" />
<form id="supplierForm" name="supplierForm" method="post"  onsubmit="return saveFormData(supplierForm)" action="includes/model/supplier_actions.php" >

<div class="rightcontent1">
        <div class="bodybanner1"> </div>
        <div class="bodybanner2">Gate Pass</div>
        <div class="bodybanner3"> 
		</div>
<div id="ajax_content">	
<table width="105%" border="0" align="left" cellpadding="2" cellspacing="5" style="float:left" >
  <tr>
    <td width="3%">&nbsp;</td>
    <td colspan="4" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="17%" class="font2">Gate Pass type:</td>
    <td width="23%" align="left">
<input name="radio3" type="radio" class="rediobutton" id="radio3" value="radio3" />      
<span class="font2">Returnable      </span>
<table cellspacing="0" cellpadding="0">
        <tr>        </tr>
    </table>    </td>
    <td width="57%" colspan="2" align="left">
      <input name="radio3" type="radio" class="rediobutton" id="radio4" value="radio3" />
      <span class="font2">Nonreturnable </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="4"><span class="font2">Purpose:</span>
    <input name="textfield3" type="text" id="textfield3" />    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="4" align="left" class="font3">Permission is hereby given to Mr./Ms
      <input type="text" name="textfield" id="textfield" />    
      Address,
      <input name="textfield5" type="text" id="textfield5" />
    to take out the following materials.and it is to be confirmed that the receiving person is responsible for returning of said items within stipulated period </td>
  </tr>
  
  
  <tr>
    <td>&nbsp;</td>
    <td colspan="4" class="font2">As per Ref /Indent #    
   <select name="indentNo" id="indentNo">
                <?php echo $outputIndend;?>
   </select>
  </tr>
  <tr>
    <td colspan="5">
      <div id="inline_form">
	
	</div></td>
  </tr>
</table>
</div>
<div class="clear">
<div class="rightimg3">
			<div class="downimg1"></div>
			<div class="downimg2"></div>
			<div class="downimg3"></div>
		</div>
		<div class="clear">
</div>
<script type='text/javascript'>

	$('#needed_before').datepicker();
	$('#submit_date').datepicker();
	
	function add_element() {
		var parent =$('#items tr:last');
		parent.clone(true).insertAfter(parent);
	}
	
	$("#add_input").click(function (){
		add_element();
		return false;
	})
	
	$("#remove_input").click(function (){
		$("#items tr:last").remove(); 
		return false;
	})
	
	$('.last_item').blur(function(){
		add_element();
		return false;
	})
	
	function total_price(){
		
	}
	function total_price(){
		
	}
	$("#indentNo").live("change", function(){
  		var indent_ms_id=$(this).val();
    	//var item_drop_down = $(this).parent().parent().find('.item_select:first');
        //item_drop_down.attr('disable',false);	
    		$.get(	'includes/pages/puchase_onchange.php',
    				{indent_ms_id:indent_ms_id},
    				function(data){
    					$("#inline_form").html(data);
    		});

    });    
	$(".date").dynDateTime({
							//showsTime: true,
							ifFormat:"%Y-%m-%d %H:%M:%S",
							});	    
	
</script> 


