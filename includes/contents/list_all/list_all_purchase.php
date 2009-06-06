<?php  
require_once ("../../../lib/purchaseOrder.class.php");
require_once ("../../../lib/helper_functions.php");

$purchase =new Purchaseorder();

$purchases = $purchase->find();
?>
	
	 <div id="inline_form">
			
			<div class="mediumbody">
				<div class="lowbanner1"> </div>
	            <div class="lowbannertest">	
					<ul>
						<li style="width:310px">Items </li>
						<li style="width:110px">Supplier</li>  
						<li style="width:100px">Date</li> 
						<li style="width:100px">Terms Of Payment</li> 
					</ul>
				</div>
	            <div class="lowbanner3"> </div>	
		</div> 

	
	<?php if(!empty($purchases)): ?>

		
		<?php foreach( $purchases as $pur): ?>
		
		
		
		<?php 
		
			$details = $purchase->FindDetailsOfPurchase($pur[pm_id]);
			$stock_names ="";
		?>
			
		<div class="list" id="<?php echo  $pur[pm_id]?>">
			
			<?php foreach($details as $detail) :?>	
				<?php $stock_names .= $detail[stock_item_name].", "; ?>
			<?php endforeach ?>	
			
			
			<p style="width:300px"><?php echo $stock_names; ?></p>
			<p style="width:100px"><?php echo $pur[sup_name]; ?></p>	
			<p style="width:100px"><?php echo  $pur[date]; ?></p>
			<p style="width:100px"><?php echo  $pur[date]; ?></p>
			<p style="padding-top:5px;">
			<a title="View Purchase" 
			href="includes/contents/view/view_purchase.php?height=400&width=760&id=<?php echo $pur[pm_id]; ?>" 
			class='thickbox button'>View</a>	
            </p>
				
	<div class="clear">	</div>			
	</div>
		<div class="clear">	</div>
		<?php endforeach ?>
	<?php else: ?>
		<div id="no_record_found">	<p>No records Found</p>	 </div> 
	<?php endif ?>	
	
</table>
<!--<div class="rightimg3">
        <div class="downimg1"></div>
        <div class="downimg2"></div>
        <div class="downimg3"></div>
</div>-->

<script type="text/javascript" charset="utf-8">

   	    $(".list:odd").addClass("gray");

</script>   
