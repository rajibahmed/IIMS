<?php  
	require_once ("../../../lib/quotation.class.php");
	require_once ("../../../lib/stock.class.php");	
	require_once ("../../../lib/helper_functions.php");
	
	$quotation =new Quotation();
	$stock = new Stock;
	
	$quotations = $quotation->find();
	//var_dump($quotations);

?>
	 <div id="inline_form">
			
			<div class="mediumbody">
				<div class="lowbanner1"> </div>
	            <div class="lowbannertest">	
					<ul>
						<li style="width:220px">Items </li>
						<li style="width:90px">P. Origin</li>  
						<li style="width:65px">D. Time</li> 
						<li style="width:80px">Price</li> 
						<li style="width:60px">Warranty</li> 
						<li style="width:50px">Supplier</li> 
						
					</ul>
				</div>
	            <div class="lowbanner3"> </div>	
		</div> 

	
	<?php if(!empty($quotations )): ?>

		<?php foreach( $quotations  as $quo): ?>
		
		
		<div class="list" id="<?php echo  $quo['qut_id']?>">
			<?php// var_dump($quo); ?>

			 <?php $stock_item = $stock->retriveStockItemByid($quo['stock_item_id']); ?>
	
			<p style="width:200px"><?php echo $stock_item[0]["stock_item_name"]?></p>
				
				<p style="width:90px"><?php echo $quo['product_orgin']; ?></p>	
				<p style="width:60px"><?php echo  $quo['delivery_time']; ?></p>
				<p style="width:100px;"><?php echo $quo['price'] ?></p>
				<p style="width:80px;"><?php echo $quo['warranty'] ?></p>		
				<p style="width:50px; padding-top:8px;"><?php echo $quo['sup_name'] ?></p>	
			<a href="includes/contents/view/quotation_view.php?height=400&width=760&id=<?php echo $quo['qut_id'] ?>" class='thickbox button'>View</a>

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