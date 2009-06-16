<?php  
	require_once ("../../../lib/indent.class.php");
	require_once ("../../../lib/helper_functions.php");
	
	$Indent= new Indent;

	$Indent = $Indent->findIndentList();
?>

	 <div id="inline_form">
			
			<div class="mediumbody">
				<div class="lowbanner1"> </div>
	            <div class="lowbannertest">	
					<ul>
						<li style="width:220px">Items </li>
						<li style="width:150px">Indent # </li>
						<li style="width:130px">Indent Date</li>  
						
						
					</ul>
				</div>
	            <div class="lowbanner3"> </div>	
		</div> 

	
	<?php if(!empty($Indent)): ?>

		
		<?php foreach( $Indent  as $Ind): ?>
		
		

		<div class="list" id="<?php echo  $Ind["cd_id"]?>">

			<p style="width:200px"><?php echo  $Ind["stock_item_name"]; ?></p>
			
			<p style="width:150px"><?php echo $Ind["indent_code"]; ?></p>
			
			<p style="width:130px"><?php echo formatted_date($Ind["created_at"]); ?></p>
			
				
			
			
			<a href="includes/contents/view/indent_view.php?height=400&width=760&id=<?php echo $Ind['indent_id'] ?>" title='Indent View' class='thickbox button'>View</a>			
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