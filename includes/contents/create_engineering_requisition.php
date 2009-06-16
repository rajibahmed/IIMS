<?php
	session_start();
	
 	require_once('../../lib/helper_functions.php');
	include('../../lib/stock.class.php');
	include('../../lib/requisition.class.php');

		$stock=new Stock;
		$requisition= new Requisition;
	
	
	$stockDept = options_for_select(	$stock->retriveStockDepartmentInfo(),
											'stock_dept_id',
											'stock_dept_name',
											true	
									);	
										
	$stockSection=options_for_select(	$stock->retriveStockSection(),
												'sec_id',
												'sec_name',
												true	
									);
											
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
									
															
	$num = $requisition->getNewId();
															
 ?>


	
    <div class="rightcontenttest">
    	<div class="bodybanner1"></div>
        <div class="bodybannertest">Create Requisition</div>
        <div class="bodybanner3"></div>
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


	

	<div class='clear'> </div>
	
	<div id="inline_form ">
		
		<div class="mediumbody">
			<div class="lowbanner1"> </div>
            <div class="lowbannertest">	
				<table width="100%" border="0">
	  			<tr>
                    <th width="18%" align="center">Dept.</th>
                    <th width="13%" align="center">Section</th>
                    <th width="22%" align="center">Machine</th>
                    <th width="10%" align="center">Manufacturer</th>
                    <th width="22%" align="center">Model</th>
                    <th width="28%" align="center">Part#</th>
				</tr>
			  </table>
		  </div>
			
            <div class="lowbanner3"> </div>	
		</div>	 

	<div class='clear'> </div>
	 
	  
  <div class="row_elements">
  		<select name='stock_dept' class="stock_dept_select med " style="width:118px;">
			<?php echo $stockDept ?>
		</select>
		
  		<select name='stock_section' class="stock_section_select med" style="width:118px;" disabled >
			
		</select>	
		
  		<select name='stock_machine' class="stock_machine_select med" style="width:118px;"  disabled >

		</select>	
		
 		<select name='stock_manufacturer' class="stock_manufacturer_select med " style="width:118px;" disabled >

		</select>

  		<select name='stock_machine_model' class="stock_machine_model_select  med" style="width:118px;" disabled >

		</select>				
 

  		<select name='stock_part' class="stock_part_select med" style="width:118px;" disabled >

		</select>				
			
  		<!-- <select  style="width:100px" class="stock_item_select med" >
			<?php //echo $stockItems; ?>
		</select>	 -->
  </div>
	<div class="clear">	</div>
	<br />
		<div class="mediumbody small_fonts">
			<div class="lowbanner1"> </div>
            <div class="lowbannertest">	
				<ul>

					<li style="width:200px">Item Name</li> 
					<li style="width:90px" >CL Qty </li>
					<li style="width:90px" >Item Qty </li>
					<li style="width:80px" >Rate</li> 
					<li style="width:170px" >Value</li>
					<li>Remark</li>
				</ul>
			</div>
            <div class="lowbanner3"> </div>	
		</div>	
	<div class="row_elements">
		<input type="text" 	class="stock_item" style="width:190px;" />
		<input type="hidden" name='stock_item[]' value="" id="" />
		<input type="text" name="cl_qty" class="cl_qty" value="" style="width:70px;" />
		<input type="text" name="item_qty[]" class="item_qty" value="" style="width:70px;" /> 
		<input type="text" name="item_rate[]"class="item_rate "  value=""  style="width:70px;" /> 
		<input type="text" name="item_total[]" class="item_total" value=""  style="width:70px;"/> 
		<input type="text" style="width:200px" name="item_remark[]" class="remark " value=""  style="width:340px;"/> 
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
	  		<!--<a href='includes/contents/create_engineering_requisition.php?height=400&width=760' class='thickbox button_b'> Reset</a>-->

  </div>

</form>

<div class="rightimg4">
				<div class="downimg1"></div>
				<div class="downimg4"></div>
				<div class="downimg3"></div>
			</div>
</div>

<script type="text/javascript" charset="utf-8">

	$("select:not(select[name=stock_part])").live("change",function(){

		
		parent=$(this).parent();
		var name = $(this).attr("name");
		var id = $(this).val();
		
	
		$.get(
			"includes/pages/"+name+"_onchange.php",
			{id:id},
			function(data){
				
				
			var select_name=$("select[name="+name+"]")
								.next("select")
								.attr( 'name' );
								

				
			parent
				.find("select[name="+select_name+"]")
				.html(data)
				.attr('disabled',false);
				
			
			}
		)

	});
	
	
	$("select[name=stock_part]").change(function(){
		//console.log(data);
		var id= $(this).val();	
		console.log(id);
	
		 $.get(
		 	"includes/pages/stock_part_onchange.php",
			{ id: id},
		 	function(data){
		 		var value= parseInt(data.split("#")[0]);
		 		var text= data.split("#")[1];
		 		var last_rate= data.split("#")[2];
				var cl_qty= data.split("#")[3];

				$(".row_elements:last").find("input.stock_item:first").val(text);
				$(".row_elements:last").find("input[type=hidden]:first").val(value);
				$(".row_elements:last").find("input.item_rate:first").val(last_rate);
				$(".row_elements:last").find("input.cl_qty:first").val(cl_qty);				
		 	}
		);

	});
	
	
	// $(".stock_item").autocomplete("includes/pages/stock_item_autocomplete.php",{
	// 	width:150,
	// 	max:5,
	// 	min:3,
	// 	multiple: true,
	// }).result(function(){
	// 	
	// 	var name= $(this).val();
	// 	
	// 	if(name.match("#")){
	// 		var stock_id= parseInt( name.split("#")[0]);
	// 
	// 		$(this).val(name.split("#")[1]);
	// 		
	// 		$(this).next("input[name=stock_item[]]").val(stock_id);
	// 	}
	// });	
	// 
	
	
	$(".stock_item").live("keypress",function(){
		console.log($(this));
		$(this)
			.autocomplete("includes/pages/stock_item_autocomplete.php",{
				width:150,
				max:5,
				multiple: true,
		}).result(function(){
				
			var name= $(this).val();
			
			if(name.match("#")){
				var stock_id= parseInt( name.split("#")[0]);
		
				$(this).val(name.split("#")[1]);
				
				$(this).next("input[name=stock_item[]]").val(stock_id);
			}
		});
		
	});
	
	

	

</script>

<script src="js/rajib_script.js" type="text/javascript"></script>