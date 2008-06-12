<?php  
	require_once('../../lib/defination.class.php');
	include('../../lib/gatePass.class.php');
	include('../../lib/stock.class.php');
	include('../../lib/consumption.class.php');
	
	
	// get stock item for combo box
	$Stock = new Stock;
	$outputStockItem=options_for_select(	$Stock->retriveStockItemByIndendId($id),
									'stock_item_id',
									'stock_item_name',
									true);
	
	
									
	// get Indend info for combo box;
	$Consumption = new Consumption;
	$outputIndend=options_for_select($Consumption->retriveIssueMasterNo(),
									'cm_id',
									'consumption_num',
									true);
									
	$GatePass = new GatePass;								
	$num = $GatePass->getNewId();								
	
?>



<style type="text/css">
<!--
.style10 {font-size: xx-small; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style11 {font-size: xx-small}
-->
</style>
<link href="../../css/stylesheet.css" rel="stylesheet" type="text/css" />
<form id="supplierForm" name="supplierForm" method="post"  action="includes/model/gatepass_actions.php" >

<div id="note"> </div>

<div id="ajax_content">	
<table width="105%" border="0" align="left" cellpadding="2" cellspacing="5" style="float:left" >
  <tr>
    <td width="7%">&nbsp;</td>
    <td colspan="3" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="20%" align="left">
<input name="status" type="radio" class="rediobutton" id="status" value="1" />      
<span class="font2">Returnable      </span>
<table cellspacing="0" cellpadding="0">
        <tr>        </tr>
    </table>    </td>
    <td width="25%" align="left">
      <input name="status" type="radio" class="rediobutton" id="status" value="2" />
      <span class="font2">Nonreturnable </span></td>
    <td width="48%" align="left"><label>Gate Pass  # </label>
			<input type="text" disabled value="<?php echo generate_timestamp('GatePass',$num); ?>" style="width:150px;"  />
	  <input type="hidden" name="GatePass_num" 
				value="<?php echo generate_timestamp('GatePass',$num); ?>" 
				id="GatePass_num" />	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3"><span class="font2">Purpose:</span>
    <input name="purpose" type="text" id="purpose" />    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3" align="left" class="font3">Permission is hereby given to Mr./Ms
      <input type="text" name="name" id="name" />    
      Address,
      <input name="address" type="text" id="address" />
    to take out the following materials.and it is to be confirmed that the receiving person is responsible for returning of said items within stipulated period </td>
  </tr>
  
  
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" class="font2">As per Ref /Indent #    
   <select name="IssueNo" id="IssueNo" style="width:180px;">
                <?php echo $outputIndend;?>
   </select>
    <td class="font2">Date
    <input type="text" name="date_of_submit" value="" class="date" />  </tr>
  
  
  <tr>
    <td colspan="4">      </td>
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
	$("#IssueNo").live("change", function(){
  		var issue_ms_id=$(this).val();
    	//var item_drop_down = $(this).parent().parent().find('.item_select:first');
        //item_drop_down.attr('disable',false);	
    		$.get(	'includes/pages/consump_no_onchange.php',
    				{issue_ms_id:issue_ms_id},
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