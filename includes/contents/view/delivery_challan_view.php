<?php  
	require_once ("../../../lib/delivery.class.php");
	require_once ("../../../lib/helper_functions.php");
	
	$delivery= new Delivery;
	
	$deliveries = $delivery->FindDetailsOfDelivery( (int) $_GET[id]);
?>
<table width="200" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><a class="button" href="includes/contents/voucher_print/print_delivery_channal.php?id=<?php echo $_GET[id];?>"  title="Print Mrr">Print</a></td>
  </tr>
</table>

	 <div id="inline_form">
			
			<div class="mediumbody">
				<div class="lowbanner1"> </div>
	            <div class="lowbannertest">	
					<ul>
						<li style="width:320px">Items </li>
						<li style="width:60px">Code #</li>  
						<li style="width:45px">Unit</li> 
						<li style="width:90px">Qty.</li> 
						<li style="width:130px">Gate Pass#</li> 
						<li style="width:50px">Remarks</li> 
					</ul>
				</div>
	            <div class="lowbanner3"> </div>	
		</div> 

	
	<?php if(!empty($deliveries )): ?>

		
		<?php foreach( $deliveries  as $delivery): ?>
		
		

		<div class="list" id="<?php echo  $delivery[cd_id]?>">

			<p style="width:290px"><?php echo $delivery[stock_item_name]; ?></p>
			<p style="width:80px"><?php echo $delivery[stock_code]; ?></p>	
			<p style="width:40px"><?php echo $delivery[stock_item_unit_name]; ?></p>	
			<p style="width:50px"><?php echo $delivery[qunty]; ?></p>	
			<p style="width:150px"><?php echo $delivery[gate_pass_no]; ?></p>	
			<p style="width:50px"><?php echo  $delivery[naration]; ?></p>
	
			
			
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