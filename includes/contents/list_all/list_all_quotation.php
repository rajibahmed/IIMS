<?php  
	require_once ("../../../lib/quotation.class.php");
	require_once ("../../../lib/helper_functions.php");
	
	$quotation =new Quotation();
	
	$quotations = $quotation->findQuotaionList();
	//var_dump($quotations);

?>
	 <div id="inline_form">
			
			<div class="mediumbody">
				<div class="lowbanner1"> </div>
	            <div class="lowbannertest">	
					<ul>
						<li style="width:420px">Items </li>
						<li style="width:130px">Indent Code</li>  
						<li style="width:70px">Supplier</li> 
						<li style="width:50px">Details</li>						
					</ul>
				</div>
	            <div class="lowbanner3"> </div>	
		</div> 

	
	<?php if(!empty($quotations )): ?>

		<?php foreach( $quotations  as $quo): ?>
		
		
		<div class="list" id="<?php echo  $quo['qut_id']?>">
			
			<p style="width:400px"><?php echo $quo["items"]?></p>
			
			<p style="width:120px"><?php echo $quo['indent_code']; ?></p>	
			
				
			<p style="width:70px; padding-top:8px;"><?php echo $quo['sup_name'] ?></p>	
			
			<a href="includes/contents/view/quotation_view.php?height=400&width=760&id=<?php echo $quo['quot_master_id'] ?>" class='thickbox button'>View</a>

	<div class="clear">	</div>			
	</div>
		<div class="clear">	</div>
		<?php endforeach ?>
	<?php else: ?>
		<div id="no_record_found">	<h1>No Quotation Found</h1>	 </div> 
	<?php endif ?>	



<script type="text/javascript" charset="utf-8">

   	    $(".list:odd").addClass("gray");

</script>   