<?php  
	require_once ("../../../lib/qc.class.php");
	require_once ("../../../lib/helper_functions.php");
	
	$QC= new QC;
	$QC = $QC->findQCList();
?>

	 <div id="inline_form">
			
			<div class="mediumbody">
				<div class="lowbanner1"> </div>
	            <div class="lowbannertest">	
					<ul>
						<li style="width:270px">Items </li>
						<li style="width:150px">QC # </li>
						<li style="width:200px">QC Create Date</li>  
					</ul>
				</div>
	            <div class="lowbanner3"> </div>	
		</div> 

	
	<?php if(!empty($QC)): ?>

		
		<?php foreach( $QC  as $qc): ?>
		
		

		<div class="list" id="<?php echo  $qc["qc_id"]?>">

			<p style="width:260px"><?php echo  $qc["stock_item_name"]; ?></p>
			
			<p style="width:150px"><?php echo $qc["qc_number"]; ?></p>
			
			<p style="width:180px"><?php echo formatted_date($qc["qc_create_date"]); ?></p>
			
            <p style="width:30px;">
			<a href="includes/contents/view/qc_view.php?height=400&width=760&id=<?php echo $qc['qc_id'] ?>" title='QC View' class='thickbox button'>View</a>			
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