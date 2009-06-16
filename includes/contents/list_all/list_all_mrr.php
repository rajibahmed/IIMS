<?php  
	require_once ("../../../lib/mrr.class.php");
	require_once ("../../../lib/helper_functions.php");
	
	$mrr= new MRR;
//	echo "<pre>";
//		var_dump($mrr->findMrrList());
//	echo "</pre>";
	$mrrs = $mrr->findMrrList();
?>

	 <div id="inline_form">
			
			<div class="mediumbody">
				<div class="lowbanner1"> </div>
	            <div class="lowbannertest">	
					<ul>
						<li style="width:220px">Items </li>
						<li style="width:90px">MRR # </li>
						<li style="width:130px">MRR Create Date</li>  
						
						<li style="width:80px"></li> 
						<li style="width:50px"></li> 
					</ul>
				</div>
	            <div class="lowbanner3"> </div>	
		</div> 

	
	<?php if(!empty($mrrs)): ?>

		
		<?php foreach( $mrrs  as $mrr): ?>
		
		

		<div class="list" id="<?php echo  $mrr["cd_id"]?>">

			<p style="width:200px"><?php echo  $mrr["stock_item_name"]; ?></p>
			
			<p style="width:90px"><?php echo $mrr["mrr_number"]; ?></p>
			
			<p style="width:130px"><?php echo formatted_date($mrr["mrr_create_date"]); ?></p>
			
				
			
			<p style="width:100px"><?php //echo $mrr[amount]; ?></p>
			
            <p style="width:30px;">
			<a href="includes/contents/view/mrr_view.php?height=400&width=760&id=<?php echo $mrr['mrr_m_id'] ?>" title='MRR View' class='thickbox button'>View</a>			
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