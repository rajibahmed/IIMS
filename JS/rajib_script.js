   // $.validator.addMethod(
   //      "australianDate",
   //      function(value, element) {
   //          // put your own logic here, this is just a (crappy) example
   //          return value.match(/^\d\d?\/\d\d?\/\d\d\d\d$/);
   //      },
   //  "Please enter a date in the format dd/mm/yyyy"
   //  );
   //  $('#myForm')
   //  .validate({
   //      rules :
   //          myDate : {
   //              australianDate : true
   //          }
   //  });



	$(".button.ajax").click(function(){
		var uri = $(this).attr("href");
		$(this).parent().hide(200); // hide the buttons
		$.ajax({
			type:"GET",
			url:uri,
			success:function(){
				$('#note').hide().slideDown(500);
				setTimeout(function(){
						$("#note").slideUp(500).html('');	
				},3000);
			},
		});	
		return false;	
	});
	
	$("input[type=reset]").click(function(){
		alert("reseted");
		$('input[type=submit]').attr('disabled',false);
	})


/*-------------------------------------------------------
| Ajax Submit
|
| @parameter 
| return 
|--------------------------------------------------------*/

	var options={
			target:'#note',
			success:function(){
				
				$('#note').hide().slideDown(500);
				setTimeout(function(){
						$("#note").slideUp(500).html('');	
				},3000);
			},
	}
	
	
	/*
	* JQuery Validator Must be Implemented
	*/
	//$('form').validate({
	//	submitHandler:function(){
			$("form").submit(function(){
				$('input[type=submit]').attr('disabled',true);
				$(this).ajaxSubmit(options);
				return false;
			})
	//	}
	//})	


/*---------------------------------------------------*/




	function add_element(str) {
		var parent =$(str);
		parent
			.clone(true)
			.insertAfter(parent)
			.find('input').attr('value','');
			//.hide().slideDown(500);
	}

	
	$("#remove_input").click(function (){
		$(".row_elements:last")
			.slideUp(function(){
				$(this).remove();
			}); 
		return false;
	})
	

  	$("#add_input").live("click", function(){
	
      	add_element('.row_elements:last');
      	return false;
    });
    
    
	$('.item_rate').blur(function(){
	//	alert("ok");
		var parent= $(this).parent();
		var qty  = parseFloat(parent.find('.item_qty:first').val());
		var rate = parseFloat(parent.find('.item_rate:first').val());
		var total= qty*rate;
		total= Math.floor(total);
		parent.find('.item_total:first').attr('value',total);
		return false;
	})
	   	
	
    
    
	
	
	// function showRequest(formData,jqForm,options){
 	// 	$.param(formData);
 	// 	
 	// }
 	// 
 	// function showResponse (data) {
 	// 	$('#test').html(data).hide().slideDown(1000);
 	// } 
 	//      
 	// $('#requisitionForm').submit(function(){
 	//     var options = { 
 	//         target:        '#ajax_content',  
 	//         beforeSubmit:  showRequest,  // pre-submit callback 
 	//         success:       showResponse,  // post-submit callback 
 	//         url:'includes/model/requisition_action_save.php', 
 	//         timeout:   3000 
 	//     }; 
 	//     	 
 	//     $(this).ajaxSubmit(options); 
 	//    
 	//     return  false;//saveFormData(requisitionForm);
 	// }); 
	
	// $("select.stock_item").live("change", function(){
 	// 	  		var parent =$(this).parent();
 	// 	  		var stock_item_number=$(this).val();
 	// 	
 	// 	$.getJSON(	
 	// 		'includes/pages/stock_item_onchange.php',
 	// 		{id:stock_item_number},
 	// 		function(data){
 	// 			parent
 	// 				.find('.stock_item_description:first')
 	// 				.attr('value',data.stock_item_desc);
 	// 			parent
 	// 				.find('.stock_item_code:first')
 	// 				.attr('value',data.stock_code_m_id);
 	// 			parent
 	// 				.find('.stock_item_part:first')
 	// 				.attr('value',data.stock_part_m_id);			
 	// 		
 	// 		}
 	// 	);	
 	// });  

	$(".date").dynDateTime({
							//showsTime: true,
							daFormat:"%d %m, %Y",
							ifFormat:"%Y-%m-%d %H:%M:%S",
					});	    
