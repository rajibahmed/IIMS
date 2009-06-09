<?php  
	require_once ("../../../lib/quotation.class.php");
	require_once ("../../../lib/helper_functions.php");
	
	$quotation =new Quotation;
	
	$quotations = $quotation->FindDetailsOfQoutation( (int) $_GET[id]);
?>
<table width="200" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><a class="button" href="includes/contents/voucher_print/print_quotation.php?p_m_id=<?php echo $purchase_m_id;?>"  title="Purchase List">Print</a></td>
  </tr>
</table>

	 <div id="inline_form">
			
			<div class="mediumbody">
				<div class="lowbanner1"> </div>
	            <div class="lowbannertest">	
					<ul>
						<li style="width:200px">Items </li>
						<li style="width:90px">Origin</li>  
						<li style="width:70px">Delivery</li> 
						<li style="width:70px">Req Qty.</li> 
						<li style="width:60px">Price</li> 
						<li style="width:50px">Warrenty</li> 
					</ul>
				</div>
	            <div class="lowbanner3"> </div>	
		</div> 

	
	<?php if(!empty($quotations )): ?>

		
		<?php foreach( $quotations  as $pur): ?>
		
		

		<div class="list" id="<?php echo  $pur[pm_id]?>">

			<p style="width:190px"><?php echo  $pur[stock_item_name]; ?></p>
			<p style="width:80px"><?php echo $pur[product_orgin] ?></p>	
			<p style="width:80px"><?php echo $pur[delivery_time] ?></p>	
			<p style="width:50px"><?php echo $pur[Required_qnty]; ?></p>	
			<p style="width:70px; padding-top:8px;"><?php echo $pur[price] ?></p>	
			<p style="width:50px"><?php echo  $pur[warranty]; ?></p>
	
			
			
	<div class="clear">	</div>			
	</div>
		<div class="clear">	</div>
		<?php endforeach ?>
	<?php else: ?>
		<div id="no_record_found">	<p>No records Found</p>	 </div> 
	<?php endif ?>	

    	<a class="thickbox button" href='includes/contents/list_all/list_all_quotation.php?height=400&width=760'  title="Purchase List">Back</a>   


<script type="text/javascript" charset="utf-8">

   	    $(".list:odd").addClass("gray");

</script>   