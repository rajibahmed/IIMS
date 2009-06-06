	$(".stock_dept_select").live("change", function(){
  		var parent =$(this).parent();
  		var stock_item_number=$(this).val();
  		
		//alert(stock_item_number);	
		$.get(	
			'includes/pages/stock_dept_onchange.php',
			{id:stock_item_number},
			function(data){
				parent
				.find(".stock_section_select:first")
				.html(data)
				.attr("disabled",false);
			}
		);	
   	}); 
   	
   	
	$(".stock_section_select").live("change", function(){
  		var parent =$(this).parent();
  		var id=$(this).val();
  		
		//alert(stock_item_number);	
		$.get(	
			'includes/pages/stock_section_onchange.php',
			{id:id},
			function(data){
				parent
					.find(".stock_machine_select:first")
					.html(data)
					.attr("disabled",false);
			}
		);	
   	});   
	$(".stock_machine_select").live("change", function(){
  		var parent =$(this).parent();
  		var id=$(this).val();
  		
		//alert(stock_item_number);	
		$.get(	
			'includes/pages/stock_machine_onchange.php',
			{id:id},
			function(data){
				parent
					.find(".stock_machine_model_select:first")
					.html(data)
					.attr("disabled",false);
			}
		);	
   	});
   	  	