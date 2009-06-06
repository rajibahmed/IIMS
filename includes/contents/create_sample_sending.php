<?php
 	require_once('../../lib/defination.class.php');
	include('../../lib/supplier.class.php');
	include('../../lib/stock.class.php');
	include('../../lib/purchaseOrder.class.php');
	include('../../lib/indent.class.php');
	$stock=new Stock;
	
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
									'indent_id',
									true);	
 ?>
<link href="../../css/stylesheet.css" rel="stylesheet" type="text/css" />

 <div class="rightcontent1">
        <div class="bodybanner1"></div>
        <div class="bodybanner2"></div>
        <div class="bodybanner3"></div>

<form id="mrrForm" name="mrrForm" method="post"  onsubmit="return saveFormData(mrrForm)" action="includes/model/mrr_order_actions.php" >
	<div id="ajax_content">
	<div class='morelabel'>
		<p>
			<label>  Date </label>
          <input type="text" name="date_of_submit" value="" id="submit_date" class="date" />
    	</p>
          
		<p>
        	<label> Sender:</label>
        	<input type="text" name="textfield" />		
        </p>
		
		<p>
        	<label> Attention:</label>
        	<input type="text" name="textfield" />		
        </p>
		
		<p>
        	<label> Remarks:</label>
        	<input type="text" name="textfield" />		
        </p>
		
		<p>	
			<label>Indent #</label>
        	<select name="indentNo" id="indentNo">
                <?php echo $outputIndentNo;?>
              </select>
    	</p>  
		       
	</div>	

          
	    
	<div class='morelabel'>

	  
		<p><label></label>
		</p>
		
	</div>	  

    <div class="clear"> </div>
	
	<div id="inline_form">
		
	</div>
	
	<div id="submit_set"> 
		<input class='button' id="btn_save"type="submit" name="submit" value="Save" />
	</div>
</div>	
</form>

<div class="rightimg3">
        <div class="downimg1"></div>
        <div class="downimg2"></div>
        <div class="downimg3"></div>
    </div>
<div class="clear"></div>
 </div>
<script type='text/javascript'>

	$("#indentNo").live("change", function(){
  		var indent_ms_id=$(this).val();
    	//var item_drop_down = $(this).
    	//parent().parent().find('.item_select:first');
        //item_drop_down.attr('disable',false);	
		$.get(	'includes/pages/sample_sending_onchange.php',
    				{indent_ms_id:indent_ms_id},
    				function(data){
    					$("#inline_form").html(data);
    		});


    });    
	
</script> 

<script type="text/javascript" src="js/rajib_script.js" charset="utf-8"> </script>