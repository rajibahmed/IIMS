<?php  
	require_once ("../../../lib/gatePass.class.php");
	require_once ("../../../lib/helper_functions.php");
	
	$gatepass= new GatePass;
//	echo "<pre>";
//		var_dump($mrr->findMrrList());
//	echo "</pre>";
	$gatepasses = $gatepass->findGatePass();
?>

	 <div id="inline_form">
			
			<div class="mediumbody">
				<div class="lowbanner1"> </div>
	            <div class="lowbannertest">	
					<ul>
						<li style="width:210px">Items </li>
						<li style="width:170px">Gate Pass # </li>
						<li style="width:180px">Gate Pass Date</li>  
						<li style="width:50px"></li> 
					</ul>
				</div>
	            <div class="lowbanner3"> </div>	
		</div> 

	
	<?php if(!empty($gatepasses)): ?>

		
		<?php foreach( $gatepasses  as $gatepass): ?>
		
		

		<div class="list" id="<?php echo  $gatepass["cd_id"]?>">

			<p style="width:200px"><?php echo  $gatepass["stock_item_name"]; ?></p>
			
			<p style="width:160px"><?php echo $gatepass["gate_pass_no"]; ?></p>
			
			<p style="width:160px"><?php echo formatted_date($gatepass["create_date"]); ?></p>
			
		
            <p style="width:30px;">
			<a href="includes/contents/view/gate_pass_view.php?height=400&width=760&id=<?php echo $gatepass['gate_pass_m_id'] ?>" title='View Gate Pass' class='thickbox button'>View</a>			
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