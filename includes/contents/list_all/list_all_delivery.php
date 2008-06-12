<?php  
	require_once ("../../../lib/delivery.class.php");
	require_once ("../../../lib/helper_functions.php");
	
	$delivery= new Delivery;
//	echo "<pre>";
//		var_dump($delivery->findDeliveryChalanList());
//	echo "</pre>";
	$deliveries = $delivery->findDeliveryChalanList();
?>

	 <div id="inline_form">
			
			<div class="mediumbody">
				<div class="lowbanner1"> </div>
	            <div class="lowbannertest">	
					<ul>
						<li style="width:270px">Items </li>
						<li style="width:150px">Delivery Challan # </li>
						<li style="width:200px">Delivery Challan Create Date</li>  
					</ul>
				</div>
	            <div class="lowbanner3"> </div>	
		</div> 

	
	<?php if(!empty($deliveries)): ?>

		
		<?php foreach( $deliveries  as $delivery): ?>
		
		

		<div class="list" id="<?php echo  $delivery["cd_id"]?>">

			<p style="width:260px"><?php echo  $delivery["stock_item_name"]; ?></p>
			
			<p style="width:150px"><?php echo $delivery["delivery_challan_no"]; ?></p>
			
			<p style="width:180px"><?php echo formatted_date($delivery["create_date"]); ?></p>
			
            <p style="width:30px;">
			<a href="includes/contents/view/delivery_challan_view.php?height=400&width=760&id=<?php echo $delivery['delivery_challan_m_id'] ?>" title='Delivery Challan View' class='thickbox button'>View</a>			
			</p>
	<div class="clear">	</div>			
	</div>
		<div class="clear">	</div>
		<?php endforeach ?>
	<?php else: ?>
		<div id="no_record_found">	<p>No records Found</p>	 </div> 
	<?php endif ?>	
 


<script type="text/javascript" charset="utf-8">

   	    $(".list:odd").addClass("gray");

</script>   