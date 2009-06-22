<?php
// require_once('lib/defination.class.php');
// include('lib/forms.class.php');
	
// require_once('lib/dbconnection.class.php');
	include_once('lib/company.class.php');
	//require_once('lib/defination.class.php');
	include('lib/indent.class.php');
	include('lib/requisition.class.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include('includes/header.php');	head("IIMS");?>
<script type="text/javascript">
	$(function(){
		// var myFile = document.location.toString();
		// //alert(myFile);
		// console.log(myFile);
		
		$('#create_user').click(function(){
			
			$('#ajax_content').load('includes/contents/create_user.php');			
		})

		$('#create_requisition').click(function(){
			$('#ajax_content').load('includes/contents/create_requisition.php');			
		})		

		$('#Create_stock_item').click(function(){
			$('#ajax_content').load('includes/contents/ca_create_stock_item.php');			
		})	
		
		$('#purchase_home').click(function(){
			$('#ajax_content').load('includes/contents/purchase_home.php');			
		})	

		$('#quotation_home').click(function(){
			$('#ajax_content').load('includes/contents/quotation_home.php');			
		});
				
		$('#create_indent').click(function(){
			$('#ajax_content').load('includes/contents/create_indent.php');			
		})	

		$('#my_requisitions').click(function(){
			$('#ajax_content').load('includes/contents/my_requisitions.php');		
		})	
		$('#inventory').click(function(){
			$('#ajax_content').load('includes/contents/ca_inventory_home.php');		
		})
		
		$('#MRR').click(function(){
			$('#ajax_content').load('includes/contents/mrr_home.php');
			return false;		
		})
		
		$('#stock_return_home').click(function(){
			$('#ajax_content').load('includes/contents/stock_return_home.php');		
		})	
		
		$('#create_gate_pass').click(function(){
			$('#ajax_content').load('includes/contents/create_getpass.php');		
		})
		
		$('#gate_pass_home').click(function(){
			$('#ajax_content').load('includes/contents/getpass_home.php');		
		})
		
		
		
		$('#create_sample_sending').click(function(){
			$('#ajax_content').load('includes/contents/create_sample_sending.php');		
		})
		
		$('#reports').click(function(){
			$('#ajax_content').load('includes/contents/reports_home.php');		
		})
		
		

		
		$('#pending_requisitions').click(function(){
			$('#ajax_content').load('includes/contents/pending_requisitions.php');		
		})
		$('#logout').click(function(){
			$('#ajax_content').load('logout.php');		
		}) 
		$('#stock_item_home').click(function(){
			$('#ajax_content').load('includes/contents/ca_stock_item_home.php');		
		}) 
	
		$('#import_goods').click(function(){
			$('#ajax_content').load('includes/contents/create_import_goods.php');		
		}) 
		
		$('#create_section').click(function(){
			$('#ajax_content').load('includes/contents/create_section.php');		
		}) 
		$('#create_qc').click(function(){
			$('#ajax_content').load('includes/contents/create_quality_certificate.php');		
		}) 

		$('#create_office').click(function(){
			$('#ajax_content').load('includes/contents/create_office.php');		
		})
		
		$('#create_dept').click(function(){
			$('#ajax_content').load('includes/contents/create_department.php');		
		})  
		
		$('#create_supplier').click(function(){
			$('#ajax_content').load('includes/contents/create_Supplier.php');		
		}) 
		
		$('#create_supplier_catagory').click(function(){
			$('#ajax_content').load('includes/contents/create_supplier_category.php');		
		}) 
		
		$('#user_manage').click(function(){
			$('#ajax_content').load('includes/contents/ca_user_home.php');		
		})
		

		$('#consumption_home').click(function(){
				$('#ajax_content').load('includes/contents/consumption_home.php');		
		});
		
		$('#delivery_home').click(function(){
				$('#ajax_content').load('includes/contents/delivery_home.php');		
		}); 
		
		$('#qc_home').click(function(){
				$('#ajax_content').load('includes/contents/qc_home.php');		
		});
		$('#indent_home').click(function(){
				$('#ajax_content').load('includes/contents/indent_home.php');		
		});
		
		$('select[name=search_by]').change(function(){
			console.log('(test)');
		});
		
	})
	
</script> 
   
</head>


<body>
<div id="sitewrapper">
<div class="sitebox1"></div>
<div class="site2">
    	<div id="sitebanner">
        	<div class="sitelogo"></div>
            <div class="siteblank"></div>
            <div class="rightarrow"></div>
        </div>
        <div id="sitebody">
        	<div id="leftcontent">
            	<div id="contentlist">
                    <div class="only_div"></div>
				   <?php   include "includes/leftmenu.php";?>
                </div>
                <div class="leftbox">
                    <div class="leftimg1"><span class="font1"> Notice</span></div>
                    <div class="leftimg2"></div>
                    <div class="leftimg3"></div>                
                </div>
                <div class="clear">            </div>
            </div>
            <div class="rightcontent">
				<div id="ajax_content">
					<div id="search">
						<h1> Search The Database</h1>
						<p>
							<select name='search_tables'>
								<option > Stock Item </option>
								<option> Indent </option>
								<option> Requisition </option>
								<option> Puschase </option>
								<option> Quotation </option>
								<option> MRR </option>
							</select>
							
							<select name='search_by'>
								<option> Name</option>
								<option> Code Number</option>
								<option> Part Numer </option>
								<option> Creation Date</option>
								<option> Date Range</option>
							</select>						
						</p>							
					</div>
	 			</div>
                <!-- <div class="centerbody"> </div> -->
               	<div class='clear'> </div>	 	
                <div class="rightimg3"> </div>
          </div>
          <div class="clear"> </div>
        </div>
        <div id="footer1"> </div>
        </div>
		<div class="site3"> </div>
    </div>

</body>
</html>
                        
<?php echo $_GET[page] ; ?>

<?php
	#echo "Welcome - ". $_SESSION[loginname];
	#echo "<br />Clients Limit : ".$_SESSION[clientsLimit];
	#echo "<br />Calls Limit : ".$_SESSION[callsLimit];
?>
