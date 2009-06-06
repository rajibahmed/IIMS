<?php
require_once ("../../../lib/stock.class.php");
$objStockLocationInfo = new Stock();
$StockLocationInfo=$objStockLocationInfo->retriveLocation();
$rowStockLocation=count($StockLocationInfo);
?>


<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right"><a class="thickbox" href="includes/contents/ca_create_locations.php?height=300&width=500" title="Stock Group" >Back</a></td>
  </tr>
  <tr>
    <td width="177"><b>Name</b></td>
    <td width="254"><b>Under</b></td>
    <td width="255"><b>Address</b></td>
    <td width="144"><b>City</b></td>
    <td width="144"><b>Phone</b></td>
    <td width="144"><b>Fax</b></td>
    <td width="144">&nbsp;</td>
    <td width="84">&nbsp;</td>
  </tr>
<?php 

for ($i=0;$i<$rowStockLocation;$i++)
{
if($i%2==0)
  {
   $bgc="#F7F7F7";
  }
  else
  {
   $bgc="#F1F1F1";
  }
?>
  <tr id ="stk_<?php echo $StockLocationInfo["$i"]["stock_location_id"]?>" bgcolor="<?php echo $bgc;?>">
    <td>
		<?php echo  $StockLocationInfo["$i"]["stock_location_name"];
					$stock_location_p_id = $StockLocationInfo["$i"]["stock_location_p_id"];
					$stk_location_id = $StockLocationInfo["$i"]["stock_location_id"];
					
					$StockSectionParentname=$objStockLocationInfo->retriveLocationPName($stock_location_p_id);
        ?>
    </td>
    <td><?php
	if($stock_location_p_id ==0)
		echo "Primary";
	else	
		echo $StockSectionParentname[0]["stock_location_name"];
	?></td>
    
    <td align="left"><?php echo $StockLocationInfo["$i"]["stock_location_address"];?></td>
    <td align="left"><?php echo $StockLocationInfo["$i"]["stock_location_city"];?></td>
    <td align="left"><?php echo $StockLocationInfo["$i"]["stock_location_phone_no"];?></td>
    <td align="left"><?php echo $StockLocationInfo["$i"]["stock_location_fax"];?></td>
    <td align="center"><a href="includes/contents/update/edit_location.php?stk_location_id=<?php echo $stk_location_id;?>&height=300&width=500" class="thickbox">Edit</a></td>
   <td align="center">	<a href="#" class='delete' id="<?php echo $stk_location_id;?>" >Delete</a>	</td>
  </tr>
<?php } ?>
</table>
<script type="text/javascript">


  	$(".delete").live("click", function(){
  		var id =$(this).attr('id');
		
  		if(confirm("you are deleting a stock Location")){
  			
			$('#stk_'+id).remove();
			console.log(id);
			$.ajax({
			   type: "POST",
			   url: "includes/model/delete/delete_stock_location.php",
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
