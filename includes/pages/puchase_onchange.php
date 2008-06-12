<?php  
	require_once('../../lib/defination.class.php');
	require_once('../../lib/indent.class.php');
	require_once('../../lib/stock.class.php');
	$indent_ms_id=(int) $_GET[indent_ms_id];
	$indent = new Indent();
	$stock=new Stock;
	$indent = $indent->RetriveIndentByMsId($indent_ms_id);
	
		$locations=options_for_select(	$stock->retriveLocation(),
								'stock_location_id',
								'stock_location_name'
								);	
	
	$output='';
	
	$output='  <div class="mediumbody">
			<div class="lowbanner1"> </div>
            <div class="lowbannertest">	
				<ul>
					<li style="width:220px">Items </li>
					<li style=width:80px>code #</li> 
					<li style=width:80px>Part #</li> 
					<li style=width:120px>Location</li> 
					<li style=width:30px>Qty</li> 
					<li style=width:50px>Rate</li> 
					<li style=width:50px>Value</li> 
				</ul>
			</div>
            <div class="lowbanner3"> </div>	
			</div> 
			<div class="clear">	</div>	
			';
      
    $counter=count($indent);  
	for($i=0; $i< $counter; $i++)
	
	{		
		
		$output.='
		<div class="small_row_elements">
   		<input type=hidden name=item_code[]  value="'.$indent[$i]["stock_item_id"].'">
		<input type=text  name=stock_item[] style="width:200px"   value="'.$indent[$i]['stock_item_name'].'" />
		<input type=text    value="'.$indent[$i]["stock_code"].'" style=width:80px />
		<input type=text    value="'.$indent[$i]["stock_part"].'" style=width:80px />
		<select name="locationId" >
			'.$locations.'
			</select>
		
	    <input type=text  name=item_qty[] class=item_qty value='.$indent[$i]["indent_qty"].' style=width:30px>
	    <input type=text style="width:50px"   name=item_rate[] class=item_rate value='.$indent[$i]["rate"].' >
	    <input type=text style="width:50px" name=item_amount[] class=item_amount value='.$indent[$i]["amount"].' >
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