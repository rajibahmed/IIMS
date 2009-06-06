


<?php  
	require_once('../../lib/indent.class.php');
	$indent_ms_id=(int) $_GET[indent_ms_id];
	$indent = new Indent();
	$indent = $indent->RetriveIndentByMsId($indent_ms_id);
	
	$output='';
	
	$output='<div class="mediumbody small_fonts">
			<div class="lowbanner1"> </div>
            <div class="lowbannertest">
					<ul>
					<li style=width:100px>Product Name</li>
					<li>Required Qty.</li> 
					<li>Product Origin </li> 
					<li>Brand/Non brand </li> 
					<li >Delivery time </li> 
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
		<div class="small_row_elements">
   		<input type=hidden name=item_code[]  value='.$indent[$i]["stock_item_id"].'>
	 <input style=width:100px type=text name=stock_item[]   value='.$indent[$i]["stock_item_name"].'>
	 <input type=text style=width:70px name=qty[] value='.$indent[$i]["indent_qty"].'>
	  <input type=text  style=width:50px  name=origin[]>
	   <input type=text  style=width:50px  name=band[]>
    <input type=text style=width:50px name=deliverytime[]>
    <input type=text style=width:50px  name=price[]>
    <input type=text style=width:50px name=warranty[] >
   
	</div>';
	}
	
	
	echo $output;
?>
	<!--<div id="add_remove"> 
		<a class='button' href="#" id="add_input" >Add Item </a>
		<a class='button' href="#" id="remove_input" >Remove Item </a>
	</div>-->
			
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