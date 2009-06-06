<?php
	session_start();
	
 	require_once('../../lib/helper_functions.php');
	include('../../lib/stock.class.php');
	include('../../lib/requisition.class.php');

		$stock=new Stock;
		$requisition= new Requisition;
	
	
	// $stockDept = options_for_select(	$stock->retriveStockDepartmentInfo(),
	// 										'stock_dept_id',
	// 										'stock_dept_name',
	// 										true	
	// 								);	
	// 									
	// $stockSection=options_for_select(	$stock->retriveStockSection(),
	// 											'sec_id',
	// 											'sec_name',
	// 											true	
	// 								);
											
	/*$stockItems=options_for_select(	$stock->retriveStockItem(),
												'stock_item_id',
												'stock_item_name',
												true	
									);	*/
			
	$stockItems=options_for_select_stock_item(	$stock->retriveStockItem(),
												'stock_item_id',
												'stock_item_name',
												'stock_item_cl_balance',
												true	
									);	
									
	$stockMachineName=options_for_select(	$stock->retriveMachineName(),
											'm_id',
											'm_name',
											true	
										);															
	//$num = $requisition->getNewId();
															
 ?>


	
    <div class="rightcontenttest">
    	<div class="bodybanner1"></div>
        <div class="bodybannertest">Production Voucher</div>
        <div class="bodybanner3"></div>
    </div>

<form id="productionForm" name="rproductionForm" method="post" action="includes/model/production_actions.php" >
	<div id="note" style=""> </div>
    
	<div class="morelabel">
	<fieldset>	
		<legend>Current User</legend> 
		<label>User Name: </label>
		<p>
			<strong>
				 <?php echo $_SESSION[user_name] ?>
				<input type="hidden" name ="user_id" value="<?php echo $_SESSION[userid] ?>" />
				<input type="hidden" name ="status" value="<?php echo $_SESSION[user_level] ?>" />
				<input type="hidden" name ="dept_id" value="<?php echo $_SESSION[user_dept] ?>" />
				<input type="hidden" name ="office_id" value="<?php echo $_SESSION[user_office] ?>" />
								
			</strong>
		</p>	
		<label>Department:</label> 
		<p>
			<strong> <?php echo $_SESSION[user_dept_name]  ?></strong>
		</p>
	</fieldset>	
	
	</div>

	
	<div class="morelabel">
		<label>Prod. Voucher# </label>
		<p>
			<input type="text" disabled value="<?php echo generate_timestamp('prod',$num); ?>"  />
			<input type="hidden" name="req_num" 
				value="<?php echo generate_timestamp('prod',$num); ?>" 
				id="req_num" />				
		</p>
		<label>Date of submit:</label>
		<p>
			<input type="text" name="submit_date" value="" class="date" />
		</p>	
		<label> Required Within: </label> 
		<p>
			<input type="text" name="required_within" value="" class="date" />
		</p>
	</div>


	

	<div class='clear'> </div>
	
	<div id="inline_form ">

	<br />
		<div class="mediumbody small_fonts">
			<div class="lowbanner1"> </div>
            <div class="lowbannertest">	
				<ul>

					<li style="width:80px">Item Name</li> 
					<li style="width:80px" >Code # </li>
					<li style="width:80px" > Part#</li>
					<li style="width:50px" >Item Qty </li>
					<li style="width:65px" >Rate</li> 
					<li style="width:65px" >Value</li>
					<li style="width:80px" >process</li>
					<li style="width:60px" >LOT</li>
					<li style="width:80px" >Machine</li>
					<li>Remark</li>
				</ul>
			</div>
            <div class="lowbanner3"> </div>	
		</div>	
	<div class="row_elements">
		
		<select style="width:80px" name='stock_item[]' id="" >
			<?php echo $stockItems ?>
		</select>
		<input type="text" style="width:60px" name="code_number" value="" id="code_number"/>
		<input type="text" style="width:60px" name="part_number" value="" id="part_number" />
		
		<input type="text" style="width:60px" name="item_qty[]"  class="item_qty" value="" /> 
		<input type="text" style="width:60px" name="item_rate[]" class="item_rate "  value=""  /> 
		<input type="text" style="width:60px" name="item_total[]" class="item_total" value="" /> 
		<input type="text" style="width:70px" name="knit[]" value="" id="knit"/>
		<input type="text" style="width:50px"name="lot[]" value="" id="lot[]" />
		<select name="machine[]"  style="width:80px"id="machine" ><?php echo $stockMachineName ?></select>
		<input type="text" style="width:130px" name="item_remark[]" class="remark " value="" /> 

	</div>	
		
		
	  <div class='clear'>	</div>
					
	<div id="add_remove"> 
					<a class='button' href="#" id="add_input" >Add Item </a>
					<a class='button' href="#" id="remove_input" >Remove Item </a>		
					
	</div>
	
			
	  <div class='clear'>	</div>
			
<div id="submit_set"> 
				<input class='button' id="btn_save"type="submit" 
				name="submit" value="Save" />
	  		<a href='includes/contents/create_requisition.php?height=400&width=800' class='thickbox button_b'> Reset</a>

  </div>

</form>

<div class="rightimg4">
				<div class="downimg1"></div>
				<div class="downimg4"></div>
				<div class="downimg3"></div>
</div>
</div>

<script src="js/rajib_script.js" type="text/javascript"></script>