<?php
 	require_once('../../lib/defination.class.php');
	include('../../lib/supplier.class.php');
	include('../../lib/stock.class.php');
	include('../../lib/purchaseOrder.class.php');
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
    $Purchase = new Purchaseorder;
	$outputPurchaseorder=options_for_select($Purchase->RetrivePurchaseOrder(),
									'pm_id',
									'pm_id',
									true);
	$locations=options_for_select(	$stock->retriveLocation(),
								'stock_location_id',
								'stock_location_name'
								);	
								
	$num = $MRR->getNewId();														
 ?>
<link href="../../css/stylesheet.css" rel="stylesheet" type="text/css" />

 <div class="rightcontent1">
        <div class="bodybanner1"></div>
        <div class="bodybanner2"></div>
        <div class="bodybanner3"></div>
		<div id="note"> </div>
<div id="ajax_content">
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
        	<label> Purchase Ref</label>
            <select name="PurchaseorderId" id="PurchaseorderId">
            	<?php echo $outputPurchaseorder;?>
            </select>		
        </p>
		<p>	
			<label> Party Name:</label>
        	<select name="selSupplier" id="selSupplier">
            	<?php echo $outputSupplierItem; ?>
          	</select>
    	</p>         
	</div>	

          
	    
	<div class='morelabel'>

	  
		<p>
			<label>Location:</label>
			<select name="locationId" >
			<?php echo $locations ; ?>
			</select>
		</p>
		
	</div>	  

    <div class="clear"> </div>
	
	<div id="inline_form">
	
	</div>
	
	<div id="submit_set"> 
		<input class='button' id="btn_save"type="submit" name="submit" value="Save" />
	</div>
	
</form>
</div>
<div class="rightimg3">
        <div class="downimg1"></div>
        <div class="downimg2"></div>
        <div class="downimg3"></div>
    </div>
<div class="clear"></div>
 </div>
<script type='text/javascript'>

	$("#PurchaseorderId").live("change", function(){
  		var purchase_ms_id=$(this).val();
    	//var item_drop_down = $(this).
    	//parent().parent().find('.item_select:first');
        //item_drop_down.attr('disable',false);	
		$.get(	'includes/pages/mrr_onchange.php',
				{purchase_ms_id:purchase_ms_id},
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
