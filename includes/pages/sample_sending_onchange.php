<?php  
	require_once('../../lib/indent.class.php');
	 $indent_ms_id=(int) $_GET[indent_ms_id];
	$indent = new Indent();
	$indent = $indent->RetriveIndentByMsId($indent_ms_id);
	
	$output='';
	
	$output='<div class="centerbody small_font">
			<div class="lowbanner1"> </div>
            <div class="lowbanner2">
					<ul>
						<li>Stock Item </li> 
						<li>Code No</li> 
						<li>Part No</li> 
						<li>Descrip.</li> 
						<li>Quantity</li> 
						<li>Rate</li> 
						<li>Total</li> 
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
	 <input type=text name=stock_item[]   value='.$indent[$i]["stock_item_name"].'>
	 <input type=text    value='.$indent[$i]["stock_code_m_id"].'>
	  <input type=text    value='.$indent[$i]["stock_part_m_id"].'>
	   <input type=text    value='.$indent[$i]["stock_item_desc"].'>
    <input type=text  name=item_qty[] class=item_qty value='.$indent[$i]["indent_qty"].'>
    <input type=text   name=item_rate[] class=item_rate value='.$indent[$i]["rate"].'>
    <input type=text name=item_amount[] class=item_amount value='.$indent[$i]["amount"].'>
   
	</div>';
	}
	
	echo $output;
?>
	<div id="add_remove"> 
		<a class='button' href="#" id="add_input" >Add Item </a>
		<a class='button' href="#" id="remove_input" >Remove Item </a>
	</div>
			
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

