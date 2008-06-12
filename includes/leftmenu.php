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

	<?php
	/*-------------------------------------------------------
	| This is because planing and admin cant create requisition
	| every one else can
	| 
	|--------------------------------------------------------*/
	?>

	<?php if($user_level!=4 && $user_level!=5): ?>
		 <li>
		    <a href='includes/contents/create_engineering_requisition.php?height=400&width=760' class='thickbox'> Engineering Requisition </a> 
		</li>	
		 <li>
		    <a href='includes/contents/create_general_requisition.php?height=400&width=560' class='thickbox'> General Requisition </a> 
		</li>		    
		<li class="left-menu-item" id="my_requisitions"><a class='thickbox'  href='includes/contents/my_requisitions.php?height=400&width=700'>My Requisitions</a></li>
		
	<?php endif ?>



   <?php 
	/**
    * End user and planing has no pending requisition
    *
    */	   
   ?>
    
	<?php if($user_level>0 && $user_level<4):?>
		<li>
		 	<a 
		 	class='thickbox'
		 	href="includes/contents/pending_requisitions.php?height=400&width=700"> Pending Requisitions</a>
		</li>
	 
	<?php endif ?>
	
	
	

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
   
	
	<?php if($user_level==5):?>
	
	<li class="left-menu-item" id="user_manage"><a href="#"> Manage User</a></li>
		
	<?php endif  ?>

    
	<?php
	 /**
	 * For users of planing dept
	 * with user level of 4
	 * 
	 * 
	 **/ ?>

	<?php  if($user_level==4):?>
		
    <li class="left-menu-item" id="create_purchase">
    	<a href='#' > Create Purchase Order</a>
	</li> 		
	
	<li class="left-menu-item" id='purchase_list' >
    	<a class="thickbox" href='includes/contents/list_all/list_all_purchase.php?height=400&width=760'  title="Purchase List">Purchase List</a>    		
    </li>
    
    
	<li class="left-menu-item" id="create_supplier_catagory">  
		<a href='#' >  Supplier Catagory</a> 
	</li> 

	<li class="left-menu-item" id="create_supplier">
		<a href='#' >   Supplier</a> 
	</li> 

	<li class="left-menu-item" id="import_goods">  
		<a href='#' > Import Goods Purchasing  Procedure</a>
 	</li>  

	
	<li id='quotation_home'>    
        <a href='#/quotation_home'>Quotation </a> 
    </li>	    
	

 
    
	<?php endif?>



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
	
	<li class="left-menu-item" id="create_stock_return">
		<a href="#">Create Stock Return</a>
	</li>
	
	<li class="left-menu-item" id="gate_pass_home">
		<a href="#">Gate Pass</a>
	</li>
	<li class="left-menu-item" id="delivery_home">
		<a href="#">Delivery Challan</a>
	</li>
	
	<li id='MRR'>
		<a href='#/mrr'> MRR </a>
	 </li>


	<li id="consumption_home"> 
        <a href='#/includes/contents/consumption_home.php' >  Consumption </a>
	</li>
	<li class="left-menu-item" id="create_qc"><a href="#">Quality Certificate</a></li>
    
    <?php endif ?> 
    
    <?php
    /**
     * For general user
     *
     */
	?>
	 <li class="left-menu-item" id='reports' >
    	<a href='#' >Reports </a>    		
    </li>
	
 
	  <li class="left-menu-item" id='logout' >
    	<a href='#' >Logout </a>    		
    </li>
</ul>	


