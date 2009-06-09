<?php  
	require_once ("../../../lib/consumption.class.php");
	require_once ("../../../lib/helper_functions.php");
	
	$consumption =new Consumption();
	
	$consumptions = $consumption->find();

	//var_dump($consumptions);
?>
	 <div id="inline_form">
			
			<div class="mediumbody">
				<div class="lowbanner1"> </div>
	            <div class="lowbannertest">	
					<ul>
						<li style="width:300px">Items </li>
						<li style="width:90px">Quantity</li>  
						<li style="width:110px">Rate</li> 
						<li style="width:80px">Amount</li> 
						<li style="width:50px">Details</li> 
					</ul>
				</div>
	            <div class="lowbanner3"> </div>	
		</div> 

	
	<?php if(!empty($consumptions )): ?>

		
		<?php foreach( $consumptions  as $con): ?>
		
		

		<div class="list" id="<?php echo  $con[cd_id]?>">

			<p style="width:300px"><?php echo  $con[stock_item_name]; ?></p>
			<p style="width:60px"><?php echo $con[consumptions_qunatity]; ?></p>	
			<p style="width:100px"><?php echo  $con[consumptions_rate]; ?></p>
			<p style="width:100px; padding-top:8px;"><?php echo $con[consumption_value] ?></p>	
			<a href="includes/contents/view/consumption_view.php?height=400&width=760&id=<?php echo $con['cd_id'] ?>" class='thickbox button'>View</a>			
			
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