<?php
 	require_once('../../lib/defination.class.php');
	include('../../lib/stock.class.php');
	include('../../lib/stkReturn.class.php');
	$stock=new Stock;
	$stock_info =	$stock->retriveStockItem();
	$output=options_for_select(	$stock->retriveStockItem(),
								'stock_item_id',
								'stock_item_name'
								);
	//echo $output;							
	$part_number=options_for_select(	$stock->retriveStockItem(),
								'stock_item_part_id',
								'stock_item_part_id'
								);
	$locations=options_for_select(	$stock->retriveLocation(),
								'stock_location_id',
								'stock_location_name'
								);
	$StockReturn = new StockReturn;								
	$num = $StockReturn->getNewId();								
 ?>


<div id="note"> </div>
<form id="consumptionForm" name="consumptionForm" method="post"   action="includes/model/stock_return_actions.php" >	

		
		
	

	<div class='morelabel'>
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
			
		<p>
			
				<label>MRR # </label>
			<input type="text" disabled value="<?php echo generate_timestamp('Return',$num); ?>"  />
			<input type="hidden" name="return_num" 
				value="<?php echo generate_timestamp('Return',$num); ?>" 
				id="return_num" />	
							
		</p>
	
	</div >
	
	<div style="clear:both"> </div>
	<div id="inline_form">
		<div class="mediumbody">
			<div class="lowbanner1"> </div>
            <div class="lowbannertest">	
			<ul>
				<li style='width:240px' >Item</li> 
				<li style='width:100px'>code #</li> 
				<li style='width:80px'>Part #</li> 
				<li style='width:160px'> Description </li> 
				<li style='width:60px'>Quantity</li> 
				<li style='width:50px'>Rate</li> 
				<li style='width:50px'>Value</li> 
			</ul>
			</div>
            <div class="lowbanner3"> </div>	
		</div>	 
		<div class="row_elements">
			<select style='width:200px'class="stock_item_select" name="stock_item[]">
				<?php echo $output; ?>	
			</select>
			
			<input type="text" name="stock_item_code[]" value="" class="stock_item_code">
			<input type="text" name="stock_part_code[]" value="" class="stock_part_code">	
			<input type="text"  style='width:140px' class="item_description" name="item_description[]" value="" />		
			<input type="text" style='width:50px' name="item_qty[]" value="" class="item_qty"/>
			<input type="text" style='width:50px' name="item_rate[]" value="" class="item_rate" />
			
			<input type="text" style='width:60px'name="item_total[]" value="" class="item_total"/>
			
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