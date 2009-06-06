<?php
	session_start();
	
 	require_once('../../lib/helper_functions.php');
	include('../../lib/stock.class.php');
	include('../../lib/requisition.class.php');

		$stock=new Stock;
		$requisition= new Requisition;
	
	

			
	$stockItems=options_for_select_stock_item(	$stock->retriveStockItem(),
												'stock_item_id',
												'stock_item_name',
												'stock_item_cl_balance',
												true	
									);	
									
															
	$num = $requisition->getNewId();
															
 ?>


    <div class="rightcontent1">
        <div class="bodybanner1"> </div>
        <div class="bodybanner2"> Requisition for General Item</div>
        <div class="bodybanner3"> </div>
    </div>

<form id="requisitionForm" name="requisitionForm" method="post" action="includes/model/requisition_action_save.php" >
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
		<label>Requisition # </label>
		<p>
			<input type="text" disabled value="<?php echo generate_timestamp('req',$num); ?>"  />
			<input type="hidden" name="req_num" 
				value="<?php echo generate_timestamp('req',$num); ?>" 
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

	<br />
	

	<div class='clear'> </div>
	
	 <div id="inline_form">
			
			<div class="mediumbody">
				<div class="lowbanner1"> </div>
	            <div class="lowbannertest">	
					<ul>
						<li style="width:120px"> Stock Item </li>
						<li style="width:60px">Qty </li>  
						<li style="width:60px">Rate</li> 
						<li style="width:60px">Total</li> 
						<li style="width:69px">Remark  </li> 
					</ul>
				</div>
	            <div class="lowbanner3"> </div>	
		</div> 

	<div class='clear'> </div>
	 

	
	<div class="row_elements">
		
		<select name='stock_item[]' >
			<?php echo $stockItems ?>
		</select>
		<input type="text" style="width:55px"name="item_qty[]" class="item_qty" value="" /> 
		<input type="text" style="width:55px"name="item_rate[]"class="item_rate "  value=""  /> 
		<input type="text" style="width:55px"name="item_total[]" class="item_total" value="" /> 
		<input type="text" style="width:200px"name="item_remark[]" class="remark " value="" /> 
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
	  		<a href='includes/contents/create_general_requisition.php?height=400&width=560' class='thickbox button_b'> Reset</a>

  </div>

</form>

<div class="rightimg4">
				<div class="downimg1"></div>
				<div class="downimg4"></div>
				<div class="downimg3"></div>
			</div>
</div>


<script src="js/rajib_script.js" type="text/javascript"></script>