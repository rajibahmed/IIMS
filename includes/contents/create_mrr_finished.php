<?php
 	require_once('../../lib/defination.class.php');
	include('../../lib/supplier.class.php');
	include('../../lib/finish_item.class.php');
	include('../../lib/indent.class.php');
	include('../../lib/mrr.class.php');
	include('../../lib/stock.class.php');
	$stock=new Stock;
	$finishItem= new finishItem;
	$MRR=new MRR;
	
	$output=options_for_select(	$finishItem->retriveFinishItem(),
								'stock_item_id',
								'stock_item_name'
								);
								
	// get suppliers info for combo box;
	$Supplier = new Supplier;
	$outputSupplierItem=options_for_select($Supplier->retriveSupplierInfo(),
									'sup_id',
									'sup_name',
									true);
    $Indent = new Indent;
	$outputIndentNo=options_for_select($Indent->retriveIndendInfo(),
									'indent_id',
									'indent_code',
									true);	
	$locations=options_for_select(	$stock->retriveLocation(),
								'stock_location_id',
								'stock_location_name'
								);	
								
	$num = $MRR->getMRRFinishId();	
							
 ?>

<form id="consumptionForm" name="consumptionForm" method="post"   action="includes/model/mrr_finish_actions.php" >	

		
	
	<div id="note"> </div>

	<div class='morelabel'>
		<p>
			
				<label>MRR # </label>
			<input type="text" disabled value="<?php echo generate_timestamp('MRR-F',$num); ?>"  />
			<input type="hidden" name="mrr_num" 
				value="<?php echo generate_timestamp('MRR-F',$num); ?>" 
				id="req_num" />	
							
		</p>
		
		<p>	
			<label>Date :</label>
			<input type="text" name="date_of_submit" value="" id="submit_date" class="date" />
		</p>
		<p>	
			<label> Party Name:</label>
        	<select name="selSupplier" id="selSupplier">
            	<?php echo $outputSupplierItem; ?>
          	</select>
    	</p>   
		
			
		<p>
			<label>Location:</label>
			<select name="locationId" >
			<?php echo $locations ; ?>
			</select>
		</p>
	
	</div >
	<!--<div class='morelabel'>
		<p>	
			<label>LC NO:</label>
			<input type="text" name="lc_no" value="" />
		</p>
		
		<p>	
			<label>Lot NO:</label>
			<input type="text" name="lot_no" value="" />
		</p>
	</div>	-->
	
	<div style="clear:both"> </div>
	<div id="inline_form">

		<div class="mediumbody">
			<div class="lowbanner1"> </div>
            <div class="lowbannertest">	
				<ul>
					<li style="width:250px">Items </li>
					<!--<li style='width:100px'>code #</li> 
					<li style='width:80px'>Part #</li> -->
				
					<li style='width:70px'>Quantity</li> 
					<li style='width:70px'>Rate</li> 
					<li style='width:70px'>Value</li> 
				</ul>
			</div>
            <div class="lowbanner3"> </div>	
		</div> 
		
		
		
		 
		<div class="small_row_elements">
			<select class="stock_item_select" style="width:220px"  name="item_code[]">
				<?php echo $output; ?>
			</select>
			
			<!--<input type="text" name="stock_item_code[]" style="width:80px" value="" class="stock_item_code">
			
			<input type="text" name="stock_part_code[]" value="" style="width:80px" class="stock_part_code">	-->
					<input type="text"  name="item_qty[]" value="" class="item_qty"/>
			<input type="text"  name="item_rate[]" value="" class="item_rate" />
			
			<input type="text" name="item_amount[]" value="" style="width:80px" class="item_total"/>
			
		</div>
		<div id="add_remove"> 
			<a class='button' href="#" id="add_input" >Add Item </a>
			<a class='button' href="#" id="remove_input" >Remove Item </a>
		</div>
		
		<div class='clear'>	</div>
		
  <div id="submit_set"> 
			<input class='button' id="btn_save"type="submit" 
			name="btn_save" value="Save" />
			
		</div>

</form>
	 
<script type='text/javascript'>


  	$(".stock_item_select").live("change", function(){
  		var parent =$(this).parent();
  		var stock_item_number=$(this).val();
		
		$.getJSON(	
			'includes/pages/finish_stock_item_onchange.php',
			{id:stock_item_number},
			function(data){
				parent.find('.item_description:first').attr('value',data.stock_item_desc);
				parent.find('.stock_item_code:first').attr('value',data.stock_code);
				parent.find('.stock_part_code:first').attr('value',data.stock_part);			
			
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
		var parent =$('.small_row_elements:last');
		parent
			.clone(true)
			.insertAfter(parent)
			.find('input').attr('value','')
			.effect();
	}

	
	$("#remove_input").click(function (){
		$(".small_row_elements:last")
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

<script type="text/javascript" language="javascript" src="js/thickbox-compressed.js"></script>