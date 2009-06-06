<?php  

	require_once('../../lib/defination.class.php');
	require_once ("../../lib/quotation.class.php");
	include('../../lib/indent.class.php');
	$Indent = new Indent;
	$outputIndend=options_for_select($Indent->retriveIndendInfo(),
									'indent_id',
									'indent_code',
									true);
			
	$indent_ms_id=$_POST[$selIndend];						
	$indendMasterData=$Indent->RetriveIndentInfoByIndendId($indent_ms_id);
	$rowIndendMaster=count($indendMasterData);
	
?>

<div class="rightcontent1">
        <div class="bodybanner1"></div>
        <div class="bodybanner2"></div>
        <div class="bodybanner3"></div>
    </div>
<form id="supplierForm" name="supplierForm" method="post"  onsubmit="return saveFormData(supplierForm)"  >
	<table width="100%" border="0" class="form" >
		<tr>
		  <th colspan="5">Quotation Comparison Report </th>
	  </tr>
		<tr>
		  <th width="157" align="right">Indend</th>
	      <th width="824" colspan="4" align="left"><select name="indentNo" id="indentNo">
            <?php echo $outputIndend;?>
          </select></th>
	  </tr>
		<tr>
		  <th align="right">&nbsp;</th>
		  <th colspan="4">&nbsp;</th>
	  </tr><?php for($i=0; $i<$rowIndendMaster; $i++)
	  {
	  	$quot_ms_id=$indendMasterData[$i]['quot_master_id'];
		$quotationDetailsData=$Indent->RetriveQuotationDetailsInfoByIndendId($quot_ms_id);
		$rowQuotation=count($quotationDetailsData);
	  ?>
      <?php for($j=0; $j<$rowQuotation; $j++)
	  {?>
      <?php }?>
		
      <?php }?>
		
		<?php for($k=0; $k<$rowItem; $k++)
		{
			$itemId=$itemNameData[$k]['stock_item_id'];?>
		
       <?php } //}?>
	</table>
	
<div id="inline_form">
		
		

  </div>			
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
		  window.location='includes/pages/quotation_compare_onchange.php?indent_ms_id='+indent_ms_id;
    		/*$.get(	'includes/pages/quotation_compare_onchange.php',
    				{indent_ms_id:indent_ms_id},
    				function(data){
    					$("#inline_form").html(data);
    		});*/

    });    
	
	$(".date").dynDateTime({
							//showsTime: true,
							ifFormat:"%Y-%m-%d %H:%M:%S",
							});	    
</script> 	