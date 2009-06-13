<?php  
	require_once ("../../../lib/stkReturn.class.php");
	require_once ("../../../lib/helper_functions.php");
	
	$StockReturn =new StockReturn;
	
	$stock_returns = $StockReturn->FindViewOfStockReturn( (int) $_GET[id]);
?>
<table width="200" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><a class="button" href="includes/contents/voucher_print/print_stock_return.php?id=<?php echo $_GET[id];?>"  title="Print Stock Return">Print</a></td>
  </tr>
</table>

	 <div id="inline_form">
			
			<div class="mediumbody">
				<div class="lowbanner1"> </div>
	            <div class="lowbannertest">	
					<ul>
						<li style="width:250px">Items </li>
						<li style="width:115px">Code #</li>  
						<li style="width:80px">Qty.</li> 
						<li style="width:120px">Price</li> 
						<li style="width:70px">Value</li> 
					</ul>
				</div>
	            <div class="lowbanner3"> </div>	
		</div> 

	
	<?php if(!empty($stock_returns )): ?>

		
		<?php foreach( $stock_returns  as $stock_return): ?>
		
		

		<div class="list" id="<?php echo  $stock_return[cd_id]?>">

			<p style="width:230px"><?php echo $stock_return["stock_item_name"]; ?></p>
			<p style="width:120px"><?php echo $stock_return["stock_code"]; ?></p>	
			<p style="width:70px"><?php echo $stock_return["qunty"]; ?></p>	
			<p style="width:120px"><?php echo $stock_return["rate"]; ?></p>	
			<p style="width:70px"><?php echo  $stock_return["amount"]; ?></p>
	
			
			
	<div class="clear">	</div>			
	</div>
		<div class="clear">	</div>
		<?php endforeach ?>
	<?php else: ?>
		<div id="no_record_found">	<p>No records Found</p>	 </div> 
	<?php endif ?>	

    	<a class="thickbox button" href='includes/contents/list_all/list_all_mrr.php?height=400&width=760'  title="Mrr List">Back</a>   


<script type="text/javascript" charset="utf-8">

   	    $(".list:odd").addClass("gray");

</script>   