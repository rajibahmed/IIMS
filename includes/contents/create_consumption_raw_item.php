<?php
 	require_once('../../lib/defination.class.php');
	include('../../lib/stock.class.php');
	include('../../lib/raw_item.class.php');
	require_once('../../lib/consumption.class.php');
	$stock=new Stock;
	$Consumption=new Consumption;
	$stock_info =	$stock->retriveStockItem();
	$rawItem= new rawItem;
	$output=options_for_select(	$rawItem->retriveRawItem(),
								'stock_item_id',
								'stock_item_name'
								);
								
	//echo $output;							
	$part_number=options_for_select(	$stock->retriveStockItem(),
								'stock_item_part_id',
								'stock_item_part_id'
								);
	$locations=options_for_select(	$stock->retriveLocation(),
								'stock_location_name',
								'stock_location_name'
								);
								
	$num = $Consumption->getissueRawNewId();							
 ?>

<div id="note"> </div>

<form id="consumptionForm" name="consumptionForm" method="post"  action="includes/model/consumption_raw_actions.php" >	


	<div class='morelabel'>
	
		<p>
			
				<label>Consumption # </label>
			<input type="text" disabled value="<?php echo generate_timestamp('CON-R',$num); ?>"  />
			<input type="hidden" name="con_num" 
				value="<?php echo generate_timestamp('CON-R',$num); ?>" 
				id="con_num" />	
							
		</p>
		<p>	
			<label>Date </label>
			<input type="text" name="date_of_submit" value="" id="submit_date" class="date" />
		</p>
			
		<p>
			<label>Location:</label>
			<select name="locationId" >
			<?php echo $locations ; ?>
			</select>
		</p>
	
	</div >
	
	<div style="clear:both"> </div>
	<div id="inline_form">
		<div class="mediumbody">
			<div class="lowbanner1"> </div>
            <div class="lowbannertest">
			<ul>
				<li style="width:190px">Item</li> 
				<!--<li style="width:100px">Code #</li> 
				<li style="width:120px">Part #</li> -->
				<li style="width:100px"> Location  </li> 
				<li  style="width:60px">Quantity</li> 
				<li >Rate</li> 
				<li style="width:30px">Value</li> 
			</ul>
			</div>
            <div class="lowbanner3"> </div>	
		</div>	 
		<div class="row_elements">
			<select class="stock_item_select" style="width:180px"name="item_code[]"  >
				<?php echo $output; ?>
			</select>
			
			<!--<input type="text" 
			name="item_code[]" value="" 
			class="stock_item_code" / >
			
			<input type="text" 
			name="stock_part_code[]" value="" 
			class="stock_part_code"/>	-->
			
			<select name="ConlocationId[]" >
			<?php echo $locations ; ?>
			</select>
			
			<input style="width:50px"type="text" name="item_qty[]" value="" class="item_qty"/>
			<input style="width:50px"type="text"  name="item_rate[]" value="" class="item_rate" />
			
			<input style="width:70px"type="text" name="item_total[]" value="" class="item_total"/>
			
		</div>
		<div id="add_remove"> 
			<a class='button' href="#" id="add_input" >Add Item </a>
			<a class='button' href="#" id="remove_input" >Remove Item </a>
		</div>
		
		<div class='clear'>	</div>
		
		<div id="submit_set"> 
			<input class='button' id="btn_save"type="submit" 
			name="submit" value="Save" />
			
  		</div>

</form>

	 
<script type='text/javascript'>


  	$(".stock_item_select").live("change", function(){
  		var parent =$(this).parent();
  		var stock_item_number=$(this).val();
		
		$.getJSON(	
			'includes/pages/stock_item_onchange.php',
			{id:stock_item_number},
			function(data){
				parent.find('.item_description:first').attr('value',data.stock_item_desc);
				parent.find('.stock_item_code:first').attr('value',data.stock_code_m_id);
				parent.find('.stock_part_code:first').attr('value',data.stock_part_m_id);			
			}
		);	
   	});  
   	
   	

   $('.item_rate').blur(function(){
		//total_price();
		var parent= $(this).parent();
		var qty  = parseFloat(parent.find('.item_qty:first').val());
		var rate = parseFloat(parent.find('.item_rate:first').val());
		var total= qty*rate;
		parent.find('.item_total:first').attr('value',total);
		return false;
	})
	
	
		function add_element() {
		var parent =$('.row_elements:last');
		parent
			.clone(true)
			.insertAfter(parent)
			.find('input').attr('value','')
			.effect();
	}

	
	$("#remove_input").click(function (){
		$(".row_elements:last")
			.slideUp(function(){
				$(this).remove();
			}); 
		return false;
	})
	
	
  	$("#add_input").live("click", function(){
      	add_element();
      	return false;
    });
	$(".date").dynDateTime({
		//showsTime: true,
		ifFormat:"%Y-%m-%d %H:%M:%S",
		});	  
		
	var options={
			target:'#note',
			success:function(){
				
				$('#note').hide().slideDown(500);
				setTimeout(function(){
						$("#note").slideUp(500).html('');	
				},3000);
			},
	}
		
	$("form").submit(function(){
		$('input[type=submit]').attr('disabled',true);
		$(this).ajaxSubmit(options);
		return false;
	})	
	
</script>
