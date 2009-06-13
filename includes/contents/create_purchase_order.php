<?php
 	require_once('../../lib/defination.class.php');
	include('../../lib/supplier.class.php');
	include('../../lib/stock.class.php');   
	include('../../lib/indent.class.php');
	include('../../lib/purchaseOrder.class.php');
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
									'indent_code',
									true);	
	$Purchaseorder = new Purchaseorder;
	$num = $Purchaseorder->getNewId();	
 ?>
<link href="../../css/stylesheet.css" rel="stylesheet" type="text/css" />

 
<div id="note"> </div>
<form id="requisitionForm" name="requisitionForm" method="post"   action="includes/model/purchase_order_actions.php" >
	
		<div class="vertical_form">
        	<p>
                <div align="left">
                    <label>Party Name:</label>
                        <select name="selSupplier" id="selSupplier">
                <?php echo $outputSupplierItem;?>
              </select>
                </div>
            </p>
            <p>
                <div align="left">
                    <label>Indent No:</label>
                        <select name="indentNo" id="indentNo">
                <?php echo $outputIndentNo;?>
              </select>
                </div>
            </p>
        </div>
		
		    
	<div class='morelabel'>

	  
		
		 <p>	
		   <div>
		  <label> Purchase #:</label>
        	<input type="text" disabled value="<?php echo generate_timestamp('Purchase',$num); ?>" style="width:150px;"  />
	  <input type="hidden" name="Purchase_num" 
				value="<?php echo generate_timestamp('Purchase',$num); ?>" 
				id="Purchase_num" />
			</div>
    	</p>   
	</div>	
 
  <table border="0" align="left" class="small_tab">
		<div class="vertical_form">
        	<p>
                <div align="left">
                    <label>Date </label>
               <input type="text" name="date_of_submit" value="" class="date" />
                </div>
            </p>
        </div>
  </table>
	<div style="clear:both"> </div>
	
	<div id="inline_form">
	
	</div>
	
    <table width="80%" border="0" cellspacing="0" cellpadding="2">
  		<div class="vertical_form">
        	<p>
                <div align="left">
                    <label>Naration : </label>
               <textarea name="naration" id="naration"></textarea>
                </div>
            </p>
            <p>
                <div align="left">
                    <label>Terms &amp; Condition : </label>
                <textarea name="terms" id="terms"></textarea>
                </div>
            </p>
            <p>
                <div align="left">
                    <label>Delivery : </label>
                <input type="text" name="delivery" id="delivery" style="width:350px;" />
                </div>
            </p>
            <p>
                <div align="left">
                    <label> Terms of payment :</label>
                  <input type="text" name="termsofpayment" id="termsofpayment" style="width:350px;" />
                </div>
            </p>
            <p>
                <div align="left">
                    <label> Support :</label>
                   <input type="text" name="support" id="support" style="width:350px;" />
                </div>
            </p>
            <p>
                <div align="left">
                    <label> Others :</label>
                    <input type="text" name="others" id="others" style="width:350px;" />
                     
                </div>
                <div id="submit_set">
               <p> <input type="submit" name="submit" value="Save"  class="button" align="middle" /></p></div>
            </p>
        </div>

</table>
	
</form>
    <div class="rightimg3">
        <div class="downimg1"></div>
        <div class="downimg2"></div>
        <div class="downimg3"></div>
    </div>
<script type='text/javascript'>

	
	
	function add_element() {
		var parent =$('#items tr:last');
		parent.clone(true).insertAfter(parent);
	}
	
	$("#add_input").click(function (){
		add_element();
		return false;
	})
	
	$("#remove_input").click(function (){
		$("#items tr:last").remove(); 
		return false;
	})
	
	$('.last_item').blur(function(){
		add_element();
		return false;
	})
	
	function total_price(){
		
	}
	function total_price(){
		
	}
	$("#indentNo").live("change", function(){
  		var indent_ms_id=$(this).val();
    	//var item_drop_down = $(this).parent().parent().find('.item_select:first');
        //item_drop_down.attr('disable',false);	
    		$.get(	'includes/pages/purchase_onchange_from_indent.php',
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
<script type="text/javascript" language="javascript" src="js/thickbox-compressed.js"></script>