


<?php  
	require_once('../../lib/indent.class.php');
	$indent_ms_id=(int) $_GET[indent_ms_id];
	$Indent = new Indent;
	//$indent = $indent->RetriveIndentByMsId($indent_ms_id);
	$indendMasterData=$Indent->RetriveIndentInfoByIndendId($indent_ms_id);
	$rowIndendMaster=count($indendMasterData);
?>
<style type="text/css">
<!--
.style1 {	
font-size: 14px;
font-weight: bold;
}

.font_content {
font-size:10px;
}

.style11 {
font-size:12px;
font-weight:bold;
}
-->
</style>
<link href="../../css/report.css" rel="stylesheet" type="text/css" />


<table width="100%" border="0" class="form" cellpadding="0" cellspacing="0" >
		<tr>
		  <th colspan="7">
                
                <table width="50%" height="67" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="26" align="center" valign="top"><h1>Square Textiles Ltd.</h1>
                          <p class="style1">Saradaganj, Kashimpur, Gazipur </p>                          </td>
                  </tr>
                </table>          </th>
	  </tr>
      
		<tr>
		  <th align="left">&nbsp;</th>
		  <th colspan="6" align="left">&nbsp;</th>
  </tr>
		<tr class="style11">
		  <th width="169" align="left">Indend Code :</th>
		  <th colspan="6" align="left"><?php echo $indendMasterData[0]['indent_code']?></th>
	  </tr><?php for($i=0; $i<$rowIndendMaster; $i++)
	  {
	  	$quot_ms_id=$indendMasterData[$i]['quot_master_id'];
		$quotationDetailsData=$Indent->RetriveQuotationDetailsInfoByIndendId($quot_ms_id);
		$rowQuotation=count($quotationDetailsData);
	  ?>
		<tr>
		  <th align="left"><span class="style11">Supplier :</span></th>
		  <th colspan="6" align="left"><span class="style11"><?php echo $indendMasterData[$i]['sup_name']?></span></th>
  </tr>
		<tr>
		  <th align="right"><div align="left" class="style11"></div></th>
	      <th colspan="6" align="left">&nbsp;</th>
	  </tr> 
      <tr class="report_item_name">
        <th align="center" class="table1">Item</th>
        <th align="center" width="202" class="table2">Quantity</th>
        <th align="center" width="177" class="table2">Product Origin</th>
        <th align="center" width="131" class="table2">Brand</th>
        <th align="center" width="246" class="table2">Delivery Time</th>
        <th align="center" width="246" class="table2">price</th>
        <th align="center" width="246" class="table3">Warranty</th>
      </tr>
      <?php for($j=0; $j<$rowQuotation; $j++)
	  {?>
     
      <tr class="font_content">
		<th align="center" class="table4"><?php echo $quotationDetailsData[$j]['stock_item_name']?>&nbsp;</th>
	    <th class="table5"><?php echo $quotationDetailsData[$j]['Required_qnty']?>&nbsp;</th>
	    <th class="table5"><?php echo $quotationDetailsData[$j]['product_orgin']?>&nbsp;</th>
	    <th class="table5"><?php echo $quotationDetailsData[$j]['brand']?>&nbsp;</th>
	    <th class="table5"><?php echo $quotationDetailsData[$j]['delivery_time']?>&nbsp;</th>
	    <th class="table5"><?php echo $quotationDetailsData[$j]['price']?>&nbsp;</th>
	    <th class="table6"><?php echo $quotationDetailsData[$j]['warranty']?>&nbsp;</th>
      </tr>
      <?php }?>
		
      <?php }?>

		
		<?php for($k=0; $k<$rowItem; $k++)
		{
			$itemId=$itemNameData[$k]['stock_item_id'];?>
		
       <?php } //}?>
	</table>
	

	
<script type='text/javascript'>
function add_element() {
		var parent =$('#items tr:last');
		var child = parent.clone(true).insertAfter(parent);
	}

	
	$("#remove_input").click(function (){
		$("#items tr:last").remove(); 
		return false;
	})
	
	
	
	$("#add_input").live("click", function(){
      	add_element();
      	return false;
    });
	
$('.item_rate').blur(function(){
		//total_price();
		
		var parent= $(this).parent();
		var qty  = parseFloat(parent.find('.item_qty:first').val());
		var rate = parseFloat(parent.find('.item_rate:first').val());
		var total= qty*rate;
		total=Math.floor(total);
		parent.find('.item_amount:first').attr('value',total);
		return false;
	})
	   		
	
</script>