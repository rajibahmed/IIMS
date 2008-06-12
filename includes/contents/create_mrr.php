<?php
 	require_once('../../lib/defination.class.php');
	include('../../lib/supplier.class.php');
	include('../../lib/stock.class.php');
	include('../../lib/indent.class.php');
	include('../../lib/mrr.class.php');
	$stock=new Stock;
	$MRR= new MRR;
	
	$output=options_for_select(	$stock->retriveStockItem(),
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
								
	$num = $MRR->getNewId();														
 ?>

<form id="mrrForm" name="mrrForm" method="post"  action="includes/model/mrr_order_actions.php" >
	
	<div class='morelabel'>
		
		<p>
			
				<label>MRR # </label>
			<input type="text" disabled value="<?php echo generate_timestamp('MRR',$num); ?>"  />
			<input type="hidden" name="mrr_num" 
				value="<?php echo generate_timestamp('MRR',$num); ?>" 
				id="req_num" />	
							
		</p>
		<p>
			<label>  Date </label>
          <input type="text" name="date_of_submit" value="" id="submit_date" class="date" />
    	</p>
          
         <p>
                <div>
                    <label>Indent No:</label>
                        <select name="indentNo" id="indentNo" style="width:150px;">
                <?php echo $outputIndentNo;?>
              </select>
                </div>
            </p>
	       
	</div>	

          
	    
	<div class='morelabel'>

	  
		
		 <p>	
		   <div>
		  <label> Party Name:</label>
        	<select name="selSupplier" id="selSupplier">
            	<?php echo $outputSupplierItem; ?>
          	</select>
			</div>
    	</p>   
		
	</div>	  

    <div class="clear"> </div>
	
	<div id="inline_form">
	
	</div>
	
	<div id="submit_set"> 
		<input class='button' id="btn_save"type="submit" name="submit" value="Save" />
	</div>
	
</form>


<div class="clear"></div>

<script type='text/javascript'>

	$("#indentNo").live("change", function(){
  		var indent_ms_id=$(this).val();
    	//var item_drop_down = $(this).parent().parent().find('.item_select:first');
        //item_drop_down.attr('disable',false);	
    		$.get(	'includes/pages/puchase_onchange.php',
    				{indent_ms_id:indent_ms_id},
    				function(data){
    					$("#inline_form").html(data);
    		});

    });    
	
	$(".date").dynDateTime({
							//showsTime: true,
							ifFormat:"%Y-%m-%d %H:%M:%S",
							});	      
	
</script> 
<script src="js/rajib_script.js" type="text/javascript"></script>
