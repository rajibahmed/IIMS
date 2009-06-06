<?php
 	require_once('../../lib/helper_functions.php');
	include('../../lib/indent.class.php');
	include('../../lib/requisition.class.php');
	$indent=new Indent;
	$requisition= new Requisition;
	$num = $indent->getNewIndentId();

?>




<form id="requisitionForm" name="requisitionForm" method="post"   action="includes/model/indent_actions.php" >
	<div id="note"> </div>
	<div class="morelabels">
			
		<p>
			<label>	Indent Code:</label>
			<input type="text" name="indent_code" 
				value="<?php echo generate_timestamp("indent",$num) ;?>"
				 id="indent_code" />
		</p>	
		
		<p>
			<label>Date :</label>
			<input type="text" name="date_of_submit" value="" class="date"  />
		</p>
	</div>
	
	<div class="morelables">
		<p >
			<label>Remarks:</label>
			<textarea name="indent_remark"></textarea>
		</p>
	</div>

	<div style="clear:both"> </div>
	
	<div id="inline_form ">
		
		<div class="mediumbody small_fonts">
			<div class="lowbanner1"> </div>
            <div class="lowbannertest">	
				<ul>
					<li>Stock Code</li>
					<li>Item Name</li> 
					<li>Part No. </li> 
					<li>Unit</li> 
					<li>Current Stock</li> 
					<li>Reorder Qty</li> 
					<li style="width:90px">Indent Qty </li>
					<li style="width:100px">ETA</li> 
					<li>Product Desc.</li>
				
				</ul>
			</div>
            <div class="lowbanner3"> </div>	
		</div>	 

	<div class='clear'> </div>
	
	
	</div>
	<?php $requisitions=$requisition->FindAllByGroup() ; ?>
	
	<?php if(!empty($requisitions)): ?>			
		<?php foreach($requisitions as $data): ?>
			<div class='row_elements'>
				
				<input type="text"  style="width:70px"  value="<?php echo $data["stock_code"]; ?>" disabled="disabled" />
				
				 <input type="text"  style="width:70px"  value="<?php echo $data["stock_item_name"]; ?>" disabled="disabled" />
				
				  <input type="text"  style="width:70px"  value="<?php echo $data["stock_part"]; ?>" disabled="disabled" />
				    <input type="text"  style="width:70px"  value="<?php echo $data["stock_item_unit_name"]; ?>" disabled="disabled" />
				<input type="text"  style="width:70px"  value="<?php echo $data["stock_item_cl_balance"]; ?>" disabled="disabled" />
				<input type="text"  style="width:70px" class="reorder_qty" value="<?php echo $data["stock_reorder_qty"]; ?>" disabled="disabled" />
				  
				
				  
				<input type="text" name="indent_item_qty[]" class="indent_qty" style="width:70px" 
					value="<?php echo $data[total] ?>" 
					id="requsition_details_<?php echo $data[rd_id];?>" />
				  
				
				 	<input type="text"  style="width:100px"  value="<?php echo formatted_date($data["created_at"]); ?>" disabled="disabled" />
				
				 <input type="text"  style="width:110px"  value="<?php echo $data["stock_item_desc"]; ?>" disabled="disabled" />
				
				<input type="hidden" name="stock_item_id[]" 
				value="<?php echo $data[stock_item_id]; ?> " id="stock_item_id" />	
				<input type="hidden" name="requisition_id[]" 
				value="<?php echo $data[rm_id]; ?> " id="requisition_id" />		
			</div>
		<?php endforeach ?>	
	<?php else: ?>
		<div id="no_record_found"><p>No records Found</p></div> 
	<?php endif ?>	

		<div id="submit_set">
        <p> <input name="submit" type="submit" class="button" value="Save">
  </p></div>
</form>
<div class="rightimg4">
				<div class="downimg1"></div>
				<div class="downimg4"></div>
				<div class="downimg3"></div>
			</div>
</div>
<script type="text/javascript" charset="utf-8">
	
	$(".row_elements").each(function(iterator,data){
		var indent_qty = $(data).find(".indent_qty:first").val();
		var reorder_qty = $(data).find(".reorder_qty:first").val();
		
		if(indent_qty>reorder_qty){
			$(data).find(".indent_qty:first").addClass("highlight");
		}
		
	});

</script>
<script src="js/rajib_script.js" type="text/javascript"></script>