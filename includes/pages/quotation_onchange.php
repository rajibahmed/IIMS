<?php  
	require_once('../../lib/indent.class.php');
	$indent_ms_id=(int) $_GET[indent_ms_id];
	$indent = new Indent();
	$indent = $indent->RetriveIndentByMsId($indent_ms_id);
	
	$output='';
	
	$output='<div class="mediumbody">
			<div class="lowbanner1"> </div>
            <div class="lowbannertest">	
					<ul>
					<li style="width:180px">Product Name</li>
					<li style="width:70px">Required Qty.</li> 
					<li>Product Origin </li> 
					<li style="width:120px">Brand/Non brand </li> 
					<li style="width:100px">Delivery time </li> 
					<li >Price</li> 
					<li >Warranty/Gurantee</li>
					
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
		<div class="row_elements">
   		<input type="hidden" name="item_code[] " value="'.$indent[$i]["stock_item_id"].'">
	 <input style="width:180px" type=text name="stock_item[]"   value="'.$indent[$i]["stock_item_name"].'">
	 <input type="text" style="width:40px" name="qty[] "value="'.$indent[$i]["indent_qty"].'">
	<input type="text"  name="origin[]">
	<input type="text"  name="band[]">
    <input type="text"  name="deliverytime[]">
    <input type="text"  name="price[]">
    <input type="text"  name="warranty[]" >
   
	</div>';
	}
	
	
	echo $output;
?>

			
	<div class='clear'>	</div>
<script type='text/javascript'>
	$("#add_input").live("click", function(){
      	add_element();
      	return false;
    });
	
	$('.item_rate').blur(function(){
		
		var parent= $(this).parent();
		var qty  = parseFloat(parent.find('.item_qty:first').val());
		var rate = parseFloat(parent.find('.item_rate:first').val());
		var total= qty*rate;
		total=Math.floor(total);
		parent.find('.item_amount:first').attr('value',total);
		return false;
	})

</script>