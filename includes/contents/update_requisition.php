<?php
	session_start();
	require_once('../../lib/helper_functions.php');
	include('../../lib/requisition.class.php');
	
	$requisition = new Requisition;
	$rm_id = (int) $_GET[id];
	
	$master =	$requisition->FindRequisitionMaster($rm_id);
	
	$details = $requisition->FindDetailsOfRequisition($rm_id);
	
	$user_dept_name = $_SESSION[user_dept_name];
	$user_name = $_SESSION[user_name];
	//  echo "<pre>";
	// var_dump($master);	
	//  echo "</pre>";

?>

<div class="rightcontent1">
        <div class="bodybanner1"></div>
        <div class="bodybanner2">Requisition Update</div>
        <div class="bodybanner3"></div>
</div>
<div id="note">	</div>

<form id="requisitionUpdate" name="requisitionUpdate" method="post"  action="includes/model/requisition_actions.php" >	
	<input type="hidden" name="update" value="true" id="update">
	
	<div class='morelabel'>
		<p>	
			<label>User Name</label>
			<span><?php e($user_name);?></span>
		</p>
			
		<p>
			<label>Dept </label>
			<span><?php e($user_dept_name); ?> </span>
		</p>
	
	</div >
	<div class="morelabel">
			<label>Requisition # </label>
			<p>
				<input type="text" disabled name="req_num" 
					value="<?php echo $master[0][requisition_number] ?>" 
					id="req_num" />
			</p>	
		<p>	
			<label>Required Within</label>
			<input type="text" name="required_within" value="<?php echo urldecode($_GET[date]); ?>"  class="date" />
		</p>

	</div>
		

	
	<div style="clear:both"> </div>
	<div id="inline_form">
		<div class="centerbody ">
			<div class="lowbanner1"> </div>
            <div class="lowbanner2">
			<ul>
				<li>Item</li> 
				<li>Quantity</li> 
				<li>Rate</li> 
				<li>Value</li> 
				<li>Remarks</li> 
			</ul>
			</div>
            <div class="lowbanner3"> </div>	
		</div>
		
		<?php foreach($details as $detail): ?>	 
		<?php 	$rate = round($detail[approx_value]/$detail[required_stock_item_qty],2); ?>
		<?php	//$id = $detail[rd_id]); ?>	
		<div class="row_elements">
			<input type="hidden" name="rd_id[]" value="<?php e($detail[rd_id]);?>" >
			<input type="hidden" name="stock_item_id[]" value="<?php e($detail[stock_item_id]);?>" >
			<input type="text"  name="item_name[] big" value="<?php e($detail[stock_item_name]); ?>" />
			<input type="text" class="item_qty big" name="item_qty[]" 	
					value="<?php e($detail[required_stock_item_qty]);?>"/>
			<input type="text" class="item_rate big" name="item_rate[]" value="<?php e($rate);?>"/>
			<input type="text" name="item_total[]" class="item_total big" value="<?php e($detail[approx_value]);?>"/>
			<input type="text" name="item_remark[]"  class="remark big" value="<?php e($detail[description]);?>"/>
			<a class='button ajax' href="includes/model/requisition_actions.php?detail_id=<?php e($detail[rd_id]);?>&delete_rd=true" >Remove</a>		
		</div>
		<?php endforeach ?>
		
		



		
		<div class='clear'>	</div>
		
		<div id="submit_set"> 
			<input class='button' id="btn_save"type="submit" 
			name="submit" value="Save" />
			
  		</div>

</form>
<div class="rightimg3">
        <div class="downimg1"></div>
        <div class="downimg2"></div>
        <div class="downimg3"></div>
</div>
<script src="js/rajib_script.js" type="text/javascript" charset="utf-8"> </script>	
 
