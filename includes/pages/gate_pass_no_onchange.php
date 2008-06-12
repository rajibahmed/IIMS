<?php  
	require_once('../../lib/gatePass.class.php');
	$GatePassNo=(int) $_GET[GatePassNo];
	$GatePass = new GatePass();
	$GatePass = $GatePass->FindDetailsOfGatePass($GatePassNo);
	
	$output='';
	
	$output='<div class="mediumbody">
			<div class="lowbanner1"> </div>
            <div class="lowbannertest">	
			<ul>
				<li style="width:220px">Item</li> 
				<li style="width:100px">Code #</li> 
				<li style="width:100px">Part #</li> 
				<li>Quantity</li> 
				<li>Remark</li> 
				
			</ul>
			</div>
            <div class="lowbanner3"> </div>	
		</div>
			<div class="clear">	</div>	
			';
      
    $counter=count($GatePass);  
	for($i=0; $i< $counter; $i++)
	
	{		
		
		$output.='
		<div class="row_elements">
   		<input type=hidden name=item_code[]  value="'.$GatePass[$i]["stock_item_id"].'">
		<input type=text  name=stock_item[] style="width:220px"   value="'.$GatePass[$i]['stock_item_name'].'" />
		<input type=text    value="'.$GatePass[$i]["stock_code"].'" />
		<input type=text    value="'.$GatePass[$i]["stock_part"].'" />
		
	    <input type=text  name=item_qty[] style="width:50px" class=item_qty value='.$GatePass[$i]["qunty"].'>
	    <input type=text   name=remark[] style="width:100px" value='.$GatePass[$i]["naration"].' >
	  
	</div>';
	}
	
	
	echo $output;
?>
	
			
	<div class='clear'>	</div>
<script type='text/javascript'>

	
$('.item_rate').blur(function(){
		//total_price();
		
		var parent= $(this).parent();
		var qty  = parseFloat(parent.find('.item_qty:first').val());
		var rate = parseFloat(parent.find('.item_rate:first').val());
		var total= qty*rate;
		total=Math.floor(total);
		parent.find('.item_amount:first').attr('value',total);
		return false;
	})
	   		
	
</script>