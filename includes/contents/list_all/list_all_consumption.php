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
						<li style="width:190px">Items </li>
						<li style="width:140px">Consumption # </li>
						<li style="width:85px">Date</li>  
						<li style="width:50px">Qty</li> 
						<li style="width:80px">Rate</li> 
						<li style="width:50px">Value</li> 
					</ul>
				</div>
	            <div class="lowbanner3"> </div>	
		</div> 

	
	<?php if(!empty($consumptions )): ?>

		
		<?php foreach( $consumptions  as $con): ?>
		
		

		<div class="list" id="<?php echo  $con[cd_id]?>">

			<p style="width:180px; float:left"><?php echo  $con[stock_item_name]; ?></p>
			
			<p style="width:100px; float:left"><?php echo $con[consumption_num]; ?></p>
			
			<p style="width:120px; float:left"><?php echo formatted_date($con[created_at]); ?></p>
			
			<p style="width:30px; float:left"><?php echo $con[consumptions_qunatity]; ?></p>	
			
			<p style="width:70px; float:left"><?php echo  $con[consumptions_rate]; ?></p>
			
			<p style="width:70px; float:left"><?php echo $con[consumption_value]; ?></p>
			<p style="width:60px; float:right">
			<a href="includes/contents/view/consumption_view.php?height=400&width=760&id=<?php echo $con['consumptions_master_id'] ?>" title='Consumption View' class='thickbox button'>View</a>			
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