<?php
 	require_once('../../lib/defination.class.php');
	include('../../lib/supplier.class.php');
	include('../../lib/stock.class.php');
	include('../../lib/qc.class.php');
	include('../../lib/mrr.class.php');
	$stock=new Stock;
	$QC= new QC;
	
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
    $MRR = new MRR;
	$outputMRRtNo=options_for_select($MRR->retriveMRRInfo(),
									'mrr_id',
									'mrr_number',
									true);	
	$locations=options_for_select(	$stock->retriveLocation(),
								'stock_location_id',
								'stock_location_name'
								);	
								
	$num = $QC->getNewId();														
 ?>
<div id="note"> </div>
<form id="mrrForm" name="mrrForm" method="post"  action="includes/model/qc_order_actions.php" >
	
	<div class='morelabel'>
		
		<p>
			
				<label>QC # </label>
			<input type="text" disabled value="<?php echo generate_timestamp('QC',$num); ?>"  />
			<input type="hidden" name="qc_num" 
				value="<?php echo generate_timestamp('QC',$num); ?>" 
				id="qc_num" />	
							
		</p>
		<p>
			<label>  Date </label>
          <input type="text" name="date_of_submit" value="" id="date_of_submit" class="date" />
    	</p>
          
         <p>
                <div>
                    <label>MRR No:</label>
                        <select name="mrrNo" id="mrrNo" style="width:150px;">
                <?php echo $outputMRRtNo;?>
              </select>
                </div>
            </p>
	       
	</div>	

          
	    
	

    <div class="clear"> </div>
	
	<div id="inline_form">
	
	</div>
	
	<div id="submit_set" style="text-align:left"> 
		<input class='button' id="btn_save"type="submit" name="submit" value="Save" />
			</div>
	
</form>


<div class="clear"></div>

<script type='text/javascript'>

	$("#mrrNo").live("change", function(){
  		var mrr_ms_id=$(this).val();
    	//var item_drop_down = $(this).parent().parent().find('.item_select:first');
        //item_drop_down.attr('disable',false);	
    		$.get(	'includes/pages/qc_onchange_for_mrr.php',
    				{mrr_ms_id:mrr_ms_id},
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
