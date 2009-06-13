<?php  
	require_once('../../lib/defination.class.php');
	require_once('../../lib/mrr.class.php');
	require_once('../../lib/stock.class.php');
	$mrr_ms_id=(int) $_GET[mrr_ms_id];
	$MRR = new MRR();
	$stock=new Stock;
	$MRR = $MRR->PrintDetailsOfMrr($mrr_ms_id);
	
		$locations=options_for_select(	$stock->retriveLocation(),
								'stock_location_id',
								'stock_location_name'
								);	
	
	$output='';
	
	$output='  <div class="mediumbody">
			<div class="lowbanner1"> </div>
            <div class="lowbannertest">	
			<ul>
				<li style="width:200px">Item</li> 
				<li style="width:100px">Code #</li> 
				<li style="width:100px">Part #</li> 
					
				<li>Quantity</li> 
				<li>Rate</li> 
				<li>Value</li> 
			</ul>
			</div>
            <div class="lowbanner3"> </div>	
		</div>	 
			<div class="clear">	</div>	
			';
      
    $counter=count($MRR);  
	for($i=0; $i< $counter; $i++)
	
	{		
		
		$output.='
		<div class="small_row_elements">
   		<input type=hidden name=item_code[]  value="'.$MRR[$i]["stock_item_id"].'">
			<input type=hidden name=purchase_no  value="'.$MRR[$i]["purchase_m_id"].'">
			<input type=hidden name=indentNo  value="'.$MRR[$i]["indent_no"].'">
			<input type=hidden name=supllier_no  value="'.$MRR[$i]["supplier_id"].'">
		<input type=text  name=stock_item[] style="width:200px"   value="'.$MRR[$i]['stock_item_name'].'" />
		<input type=text    value="'.$MRR[$i]["stock_code"].'" style=width:80px />
		<input type=text    value="'.$MRR[$i]["stock_part"].'" style=width:80px />
		
		
	    <input type=text  name=item_qty[] class=item_qty value='.$MRR[$i]["qunty"].' style=width:30px>
	    <input type=text style="width:50px"   name=item_rate[] class=item_rate value='.$MRR[$i]["rate"].' >
	    <input type=text style="width:80px" name=item_amount[] class=item_amount value='.$MRR[$i]["amount"].' >
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