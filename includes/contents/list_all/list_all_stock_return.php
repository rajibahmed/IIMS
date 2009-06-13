<?php  
	require_once ("../../../lib/stkReturn.class.php");
	require_once ("../../../lib/helper_functions.php");
	
	$stock_return= new StockReturn;
//	echo "<pre>";
//		var_dump($mrr->findMrrList());
//	echo "</pre>";
	$stock_returns = $stock_return->findStockReturnList();
?>

	 <div id="inline_form">
			
			<div class="mediumbody">
				<div class="lowbanner1"> </div>
	            <div class="lowbannertest">	
					<ul>
						<li style="width:130px">Stock Return # </li>
						<li style="width:240px">Stock Item</li>
						<li style="width:130px">Create Date</li>  
						<li style="width:50px"></li> 
					</ul>
				</div>
	            <div class="lowbanner3"> </div>	
		</div> 

	
	<?php if(!empty($stock_returns)): ?>

		
		<?php foreach( $stock_returns  as $stock_return): ?>
		
		

		<div class="list" id="<?php echo  $stock_return["cd_id"]?>">
        
        	<p style="width:130px"><?php echo $stock_return["stock_return_no"]; ?></p>

			<p style="width:220px"><?php echo  $stock_return["stock_item_name"]; ?></p>
			
			<p style="width:130px"><?php echo formatted_date($stock_return["create_date"]); ?></p>
			
            <p style="width:30px;">
			<a href="includes/contents/view/stock_return_view.php?height=400&width=760&id=<?php echo $stock_return['stk_return_m_id'] ?>" title='Stock Return View' class='thickbox button'>View</a>			
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