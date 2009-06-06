<?php 
	include_once 'lib/company.class.php';
	$company= new Company;
	@session_start();
	
	$user_level = $_SESSION[user_level];
?>


<ul>

  <li class="left-menu-item" id='inventory' >
    	<a href='#' >Create Master </a>    		
    </li>

  <li class="left-menu-item" id='purchase_list' >
    	<a class="thickbox" href='includes/contents/list_all/list_all_purchase.php?height=400&width=760'  title="Purchase List">Purchase List</a>    		
    </li>

<?php

/*-------------------------------------------------------
| This is for admin because he has the level of 4 
|
| 
|--------------------------------------------------------*/ ?>

<?php if($user_level!=4): ?>
	 <li>
	    <a href='includes/contents/create_engineering_requisition.php?height=400&width=760' class='thickbox'> Engineering Requisition </a> 
	</li>	
	 <li>
	    <a href='includes/contents/create_general_requisition.php?height=400&width=560' class='thickbox'> General Requisition </a> 
	</li>		    
	<li class="left-menu-item" id="my_requisitions"><a class='thickbox'  href='includes/contents/my_requisitions.php?height=400&width=700'>My Requisitions</a></li>
<?php endif ?>



   
	
	
    
 <?php if($user_level!=0) {?>
	 <li><a 
	 	class='thickbox'
	 	href="includes/contents/pending_requisitions.php?height=400&width=700"> Pending Requisitions</a> </li>
	 
<?php } ?>

	<?php 
	if($user_level==5)
	{
	
		if(!$company->CheckCreated()){ ?>
	<li class="left-menu-item" onclick="loadDynamicContent('Create Company')">
    <a href='#' > Create Company</a>
    </li>
    <?php 
	}
    else
	{
     ?>
    <li class="left-menu-item" onclick="loadDynamicContent('Update Company')">
    	<a href='#' > Update Company</a>
    </li>   
    <?php
	}
	}
	
	?>
   
	
	<? if($user_level==5)
	{ 
	
	?>
    
	
	<li class="left-menu-item" id="user_manage"><a href="#"> Manage User</a></li>
	
	
	<? }   ?>

    
	<?  if($user_level==4)
	{ 
	
	?>
	<li class="left-menu-item" id="create_supplier_catagory">  <a href='#' >  Supplier Catagory					
</a> </li> 
	<li class="left-menu-item" id="create_supplier">  <a href='#' >   Supplier					
</a> </li> 
	<li class="left-menu-item" id="import_goods">  <a href='#' > IMPORT GOODS PURCHASING  PROCEDURE					
</a> </li>  
	
	<? }  if($user_level==4)
	{  ?> 
		<li>    
        <a href='includes/contents/create_quotation.php?height=400&width=800' class='thickbox'>  Create Quotation </a> 
    </li>	    
	
	<? }  if($user_level==4)
	{  ?>
    <li class="left-menu-item" id="create_purchase">  <a href='#' > Create Purchase Order</a> </li>  
	<? }  if($user_level==4)
	{  ?>
    <li class="left-menu-item" id="Quotation_Comparison"> <a href='#' > Quotation Comparison </a></li> 
	<? 
	 } 
	?>



	<?php 
	/*-------------------------------------------------------
	| this block is for Store incharge
	|
	|--------------------------------------------------------*/
	?>
	<?php if($user_level==2):?>

	<li>
   <a href='includes/contents/production_reciept.php?height=400&width=800' class='thickbox'>Production  Voucher </a>  
		
	</li>
	<li>
   <a href='includes/contents/create_indent.php?height=400&width=800' class='thickbox'>Create Indent</a>  
   </li>
	<!--<li class="left-menu-item" id="create_sample_sending"><a href="#">Create Sample Sending</a></li>-->
	<li class="left-menu-item" id="create_stock_return"><a href="#">Create Stock Return</a></li>
	<li class="left-menu-item" id="create_gate_pass"><a href="#">Create Gate Pass</a></li>
	<li class="left-menu-item" id="create_mrr"><a href="#">Create MRR</a></li>
   
	<li class="left-menu-item" id="create_mrr_by_lc"><a href="#">Create MRR(by LC)</a></li>
	<li id="consumption_home"> 
        <a href='#/includes/contents/consumption_home.php' >  Consumption </a>
	</li>
	<li class="left-menu-item" id="create_qc"><a href="#">Quality Certificate</a></li>
    
    <?php endif ?> 
	 <li class="left-menu-item" id='reports' >
    	<a href='#' >Reports </a>    		
    </li>
	

	 
	  <li class="left-menu-item" id='logout' >
    	<a href='#' >Logout </a>    		
    </li>
</ul>	


