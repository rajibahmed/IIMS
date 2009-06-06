<?php
 	require_once('../../lib/defination.class.php');
	include('../../lib/supplier.class.php');
	include('../../lib/stock.class.php');   
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
									'indent_code',
									true);								

 ?>
<link href="../../css/stylesheet.css" rel="stylesheet" type="text/css" />

 <div class="rightcontent1">
                	<div class="bodybanner1"></div>
                    <div class="bodybanner2">Purcahse Order</div>
                    <div class="bodybanner3"></div>
                </div>
<div id="note"> </div>
<form id="requisitionForm" name="requisitionForm" method="post"   action="includes/model/purchase_order_actions.php" >
	<table width="100%" border="0" class="small_tab">
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
  </table>
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
                <input type="text" name="delivery" id="delivery" />
                </div>
            </p>
            <p>
                <div align="left">
                    <label> Terms of payment :</label>
                  <input type="text" name="termsofpayment" id="termsofpayment" />
                </div>
            </p>
            <p>
                <div align="left">
                    <label> Support :</label>
                   <input type="text" name="support" id="support" />
                </div>
            </p>
            <p>
                <div align="left">
                    <label> Others :</label>
                    <input type="text" name="others" id="others" />
                     
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