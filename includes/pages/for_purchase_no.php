<?php  
	require_once('../../lib/purchaseOrder.class.php');
	require_once('../../lib/defination.class.php');
	require_once('../../lib/stock.class.php');
	$purchase_ms_id=(int) $_GET[purchase_ms_id];
	$purchase = new Purchaseorder();
	$stock=new Stock;
	$purchaseDetails = $purchase->RetrivePurchaseOrderByMsId($purchase_ms_id);
	$locations=options_for_select(	$stock->retriveLocation(),
							'stock_location_id',
							'stock_location_name'
							);	
	$output='';
	
	$output='<div class="mediumbody">
			<div class="lowbanner1"> </div>
            <div class="lowbannertest">	
			<ul>
				<li style="width:200px">Item</li> 
				<li style="width:100px">Code #</li> 
				<li style="width:100px">Part #</li> 
					<li style="width:100px">location</li> 
				<li>Quantity</li> 
				<li>Rate</li> 
				<li>Value</li> 
			</ul>
			</div>
            <div class="lowbanner3"> </div>	
		</div>	 
			<div class="clear">	</div>	
			';
      
    $counter=count($purchaseDetails);  
	for($i=0; $i< $counter; $i++)
	{		
			
	$output.='
		<div class="small_row_elements">
   		<input type=hidden name=item_code[]  value="'.$purchaseDetails[$i]["stock_item_id"].'">
		<input type=text  name=stock_item[] style="width:200px"   value="'.$purchaseDetails[$i]['stock_item_name'].'" />
		<input type=text    value="'.$purchaseDetails[$i]["stock_code"].'" style=width:80px />
		<input type=text    value="'.$purchaseDetails[$i]["stock_part"].'" style=width:80px />
		<select name="locationId[]" >
			'.$locations.'
			</select>
		
	    <input type=text  name=item_qty[] class=item_qty value='.$purchaseDetails[$i]["qunty"].' style=width:30px>
	    <input type=text style="width:50px"   name=item_rate[] class=item_rate value='.$purchaseDetails[$i]["rate"].' >
	    <input type=text style="width:80px" name=item_amount[] class=item_amount value='.$purchaseDetails[$i]["amount"].' >
	</div>';
	}
	
	
	echo $output;
?>
	
			
	<div class='clear'>	</div>
<script type='text/javascript'>
function add_element() {
		var parent =$('#items tr:last');
		var child = parent.clone(true).insertAfter(parent);
	}

	
	$("#remove_input").click(function (){
		$("#items tr:last").remove(); 
		return false;
	})
	
	
	
	$("#add_input").live("click", function(){
      	add_element();
      	return false;
    });
	
</script>