<?php  
	require_once ("../../../lib/purchaseOrder.class.php");
	require_once ("../../../lib/helper_functions.php");
	
	$purchase =new Purchaseorder;
	
	$purchase_details = $purchase->FindDetailsOfPurchase( (int) $_GET[id]);

	$purchase_m_id =$_GET[id];
?>
<table width="200" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><a class="button" href="includes/contents/voucher_print/print_purchase_order.php?p_m_id=<?php echo $purchase_m_id;?>"  title="Purchase List">Print</a></td>
  </tr>
</table>

	 <div id="inline_form">
			
			<div class="mediumbody">
				<div class="lowbanner1"> </div>
	            <div class="lowbannertest">	
					<ul>
						<li style="width:420px">Items </li>
						<li style="width:90px">Quantity</li>  
						<li style="width:110px">Rate</li> 
						<li style="width:30px">Amount</li> 
					</ul>
				</div>
	            <div class="lowbanner3"> </div>	
		</div> 

	
	<?php if(!empty($purchase_details )): ?>

		
		<?php foreach( $purchase_details  as $pur): ?>
		
		

		<div class="list" id="<?php echo  $pur[pm_id]?>">
			

			
			
			<p style="width:420px"><?php echo  $pur[stock_item_name]; ?></p>
			<p style="width:60px"><?php echo $pur[qunty]; ?></p>	
			<p style="width:100px"><?php echo  $pur[rate]; ?></p>
			<p style="width:30px; padding-top:8px;"><?php echo $pur[amount] ?>			</p>	
	<div class="clear">	</div>			
	</div>
		<div class="clear">	</div>
		<?php endforeach ?>
	<?php else: ?>
		<div id="no_record_found">	<p>No records Found</p>	 </div> 
	<?php endif ?>	

    	<a class="thickbox button" href='includes/contents/list_all/list_all_purchase.php?height=400&width=760'  title="Purchase List">Back</a>   


<script type="text/javascript" charset="utf-8">

   	    $(".list:odd").addClass("gray");

</script>   