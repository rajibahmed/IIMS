<?php  
	require_once('../../lib/defination.class.php');
	include('../../lib/delivery.class.php');
	include('../../lib/stock.class.php');
	include('../../lib/gatePass.class.php');
	
	
	// get stock item for combo box
	$Stock = new Stock;
	$outputStockItem=options_for_select(	$Stock->retriveStockItemByIndendId($id),
									'stock_item_id',
									'stock_item_name',
									true);
	
	
									
	// get Indend info for combo box;
	$GatePass = new GatePass;
	$GatePassNo=options_for_select($GatePass->retriveGatePassMasterNo(),
									'gate_pass_id',
									'gate_pass_no' ,
									true);
									
	$Delivery = new Delivery;								
	$num = $Delivery->getNewId();								
	
?>



<style type="text/css">
<!--
.style10 {font-size: xx-small; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style11 {font-size: xx-small}
-->
</style>
<link href="../../css/stylesheet.css" rel="stylesheet" type="text/css" />
<form id="supplierForm" name="supplierForm" method="post"  action="includes/model/delivery_actions.php" >

<div id="note"> </div>

<div id="ajax_content">	
<table width="105%" border="0" align="left" cellpadding="2" cellspacing="5" style="float:left" >
  <tr>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td width="25%" align="left"><span class="font2">Date</span><span class="font2">
      <input type="text" name="date_of_submit" value="" class="date" />
      </span></td>
    <td width="48%" align="left"><label>Gate Pass  # </label>
			<input type="text" disabled value="<?php echo generate_timestamp('Delivery',$num); ?>" style="width:150px;"  />
	  <input type="hidden" name="delivery_num" 
				value="<?php echo generate_timestamp('Delivery',$num); ?>" 
				id="delivery_num" />	</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="left" class="font3"> Mr./Ms
      <input type="text" name="name" id="name" style="width:400px;" />    
      <br />
      Consignee's Ref . No.
      <input name="con_ref" type="text" id="con_ref" style="width:400px;" />
      <br /> 
      Our Ref. No .
      <input name="our_ref" type="text" id="our_ref" style="width:400px;" /></td>
  </tr>
  
  
  <tr>
    <td class="font2">As per Gate Pass #    
   <select name="GatePassNo" id="GatePassNo" style="width:180px;">
                <?php echo $GatePassNo;?>
   </select>
    <td class="font2">
  </tr>
  
  
  <tr>
    <td colspan="2">      </td>
  </tr>
</table>


</div>
<div class="clear"> </div>
<div id="inline_form">
	
	</div>

<div class='clear'>	</div>

<div id="submit_set"> 
	<input class='button' id="btn_save"type="submit" 
	name="submit" value="Save" />
	
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
	$("#GatePassNo").live("change", function(){
  		var GatePassNo=$(this).val();
    	//var item_drop_down = $(this).parent().parent().find('.item_select:first');
        //item_drop_down.attr('disable',false);	
    		$.get(	'includes/pages/gate_pass_no_onchange.php',
    				{GatePassNo:GatePassNo},
    				function(data){
    					$("#inline_form").html(data);
    		});

    });    
	$(".date").dynDateTime({
							//showsTime: true,
							ifFormat:"%Y-%m-%d %H:%M:%S",
							});	    
	
</script> 


<script src="js/rajib_script.js" type="text/javascript"></script>