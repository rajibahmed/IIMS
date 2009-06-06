	<div class="clear">	</div>
	
	 <div id="inline_form">
			
			<div class="mediumbody">
				<div class="lowbanner1"> </div>
	            <div class="lowbannertest">	
					<ul>
						<li style="width:175px">Items </li>
						<li style="width:90px">Requisition#</li>  
						<li style="width:55px">User</li> 
						<li style="width:80px">Status</li> 
						<li style="width:120px">Req. Within </li> 
						<li style="width:120px; text-align:center">Operations</li> 
					</ul>
				</div>
	            <div class="lowbanner3"> </div>	
		</div> 

	
	<?php if(!empty($requisitions)): ?>

		
		<?php foreach( $requisitions as $req): ?>
		
		
		
		
		<?php $details = $requisition->FindDetailsOfRequisition($req[rm_id]);
		$stock_names ="";
		?>
			
		<div class="list" id="<?php echo  $req[rm_id]?>">
			
			<?php foreach($details as $detail) :?>	
				<?php $stock_names .= $detail[stock_item_name].", "; ?>
			<?php endforeach ?>	
			
			
			<p style="width:160px"><?php echo $stock_names; ?></p>
			<p style="width:90px"><?php echo $req[requisition_number]; ?></p>	
			<p style="width:40px"><?php echo $req[user_name]; ?></p>
			
			<?php 
			
			/*
			* This shows the status where the requisition is
			*
			*/
			?>
			<?php if($req[status]==0):?>
			
				<p style="width:70px">Not Sent</p>
			
			<?php elseif($req[status]==1):?>
			
				<p style="width:70px">Head Of Dept</p>
				
			<?php elseif($req[status]==2):?>
			
				<p style="width:70px">Store Incharge</p>
				
			<?php elseif($req[status]==3):?>
				<p style="width:70px">Procurerment</p>
				
			<?php endif?>
			
			<p><?php echo formatted_date($req[required_within]); ?></p>
			
			<?php  
			/*-------------------------------------------------------
			|  Check For Users level and the requisitions status  
			|	to identify that this user can or cant delete this 
			|	requsition 
			|--------------------------------------------------------*/?>
			
			<?php if(($user_level==$req[status]) && ($user_id == $req[user_id])): ?>
				
			<span>
            <p style="width:50px;">
				<a href='includes/contents/update_requisition.php?height=400&width=600&id=<?php echo $req[rm_id]; ?>&date=<?php echo urlencode($req[required_within]); ?>' 
				class='button thickbox'>Edit </a>		
			</p>

			<p style="width:60px;">
			<a href="#" class='button delete' id="<?php echo $req[rm_id];?>">Delete</a>		
			</p>

			<p style="width:55px;">
			<a href="includes/model/requisition_actions.php?id=<?php echo $req[rm_id];?>&btn_send=true" 
				class='button ajax'>Send</a>
			</p>
            </span>
            

			
			<?php elseif(($user_level==$req[status])): ?>
			<span>
				<a href='includes/contents/update_requisition.php?height=400&width=600&id=<?php echo $req[rm_id]; ?>&date=<?php echo urlencode($req[required_within]); ?>' 
				class='button thickbox'>Edit </a>	
				
						
			<a href="includes/model/requisition_actions.php?id=<?php echo $req[rm_id];?>&btn_send=true" 
				class='button ajax'>Send</a>
			</span>
			
			<?php endif ?>
			<?php /*------------------------------------------------------*/ ?>
				
	<div class="clear">	</div>			
	</div>
		<div class="clear">	</div>
		<?php endforeach ?>
	<?php else: ?>
		<div id="no_record_found">	<p>No records Found</p>	 </div> 
	<?php endif ?>	
	
</table>

    
    
    
    
<script type="text/javascript">


  	$(".delete").live("click", function(){
  		var id =$(this).attr('id');
  		if(confirm("you are deleting a requistion")){
  			
			$('.list#'+id).hide(800);
			$.ajax({
			   type: "POST",
			   url: "includes/model/requisition_actions.php",
			   data: "delete=true&id="+id,
			   success: function(){
			     //alert("you have deleted a requisition");
			      $(".list:odd").addClass("gray");
			   }
			}   
		 );
		}//end of if 
		return false;		
    }); 
    
    $(".list:odd").addClass("gray");
    
  	$(".edit").live("click", function(){
  		var id =$(this).attr('id');
		return false;		
    });   
    
      
</script>
<script type="text/javascript" language="javascript" src="js/thickbox-compressed.js"></script>
<script type="text/javascript" language="javascript" src="js/rajib_script.js"></script>