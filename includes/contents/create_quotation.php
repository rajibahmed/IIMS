<?php  
	require_once('../../lib/defination.class.php');
	include('../../lib/supplier.class.php');
	include('../../lib/stock.class.php');
	include('../../lib/indent.class.php');
	
	
	// get stock item for combo box
	$Stock = new Stock;
	$outputStockItem=options_for_select(	$Stock->retriveStockItem(),
									'stock_item_id',
									'stock_item_name',
									true);
	
	// get suppliers info for combo box;
	$Supplier = new Supplier;
	$outputSupplierItem=options_for_select($Supplier->retriveSupplierInfo(),
									'sup_id',
									'sup_name',
									true);
									
	// get Indend info for combo box;
	$Indent = new Indent;
	$outputIndend=options_for_select($Indent->retriveIndendInfo(),
									'indent_id',
									'indent_code',
									true);
	
?>

<form id="supplierForm" name="supplierForm" method="post"   action="includes/model/quotation_actions.php" >

 <div class="rightcontenttest">
    	<div class="bodybanner1"></div>
        <div class="bodybannertest">Quotation</div>
        <div class="bodybanner3"></div>
    </div>

	<table class="form" border="0" >
		
		
		  <th colspan="2">
	  
		
    <div class="vertical_form">
            <p>
                <div align="left">
                    <label>Indent / Ref #:</label>
                        <select name="indentNo" id="indentNo">
                       		 <?php echo $outputIndend;?>
                        </select>
                </div>
            </p>
           
             <p>
                <div align="left">
                    <label>Vendors name:</label>
                        <select name="selSupplier" id="selSupplier">
                     	   <?php echo $outputSupplierItem;?>
                        </select>
                </div>
            </p>
   </div>         

	  	</table>		



<div id="note"> </div>
<div id="inline_form">
		
		

  </div>
<div id="submit_set">
               <p> <input type="submit" name="submit" value="Save"  class="button" align="middle" /></p></div>


<div class="rightimg4">
				<div class="downimg1"></div>
				<div class="downimg4"></div>
				<div class="downimg3"></div>
			</div>
</div>
</form>
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
    		$.get(	'includes/pages/quotation_onchange.php',
    				{indent_ms_id:indent_ms_id},
    				function(data){
    					$("#inline_form").html(data);
    		});

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

