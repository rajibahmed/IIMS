<?php  
	require_once ("../../../lib/consumption.class.php");
	require_once ("../../../lib/helper_functions.php");
	
	$consumption =new Consumption;
	
	$consumptions = $consumption->FindDetailsOfConsumption( (int) $_GET[id]);
?>
<table width="200" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><a class="button" href="includes/contents/voucher_print/print_consumption.php?p_m_id=<?php echo $_GET[id];?>"  title="Purchase List">Print</a></td>
  </tr>
</table>

	 <div id="inline_form">
			
			<div class="mediumbody">
				<div class="lowbanner1"> </div>
	            <div class="lowbannertest">	
					<ul>
						<li style="width:250px">Items </li>
						<li style="width:90px">Code #</li>  
						<li style="width:90px">Part #</li> 
						<li style="width:70px">Qty.</li> 
						<li style="width:100px">Price</li> 
						<li style="width:50px">Value</li> 
					</ul>
				</div>
	            <div class="lowbanner3"> </div>	
		</div> 

	
	<?php if(!empty($consumptions )): ?>

		
		<?php foreach( $consumptions  as $con): ?>
		
		

		<div class="list" id="<?php echo  $con[cd_id]?>">

			<p style="width:230px"><?php echo $con[stock_item_name]; ?></p>
			<p style="width:80px"><?php echo $con[stock_code]; ?></p>	
			<p style="width:100px"><?php echo $con[stock_part]; ?></p>	
			<p style="width:50px"><?php echo $con[consumptions_qunatity]; ?></p>	
			<p style="width:90px"><?php echo $con[consumptions_rate]; ?></p>	
			<p style="width:50px"><?php echo  $con[consumption_value]; ?></p>
	
			
			
	<div class="clear">	</div>			
	</div>
		<div class="clear">	</div>
		<?php endforeach ?>
	<?php else: ?>
		<div id="no_record_found">	<p>No records Found</p>	 </div> 
	<?php endif ?>	

    	<a class="thickbox button" href='includes/contents/list_all/list_all_consumption.php?height=400&width=760'  title="Consumption List">Back</a>   


<script type="text/javascript" charset="utf-8">

   	    $(".list:odd").addClass("gray");

</script>   