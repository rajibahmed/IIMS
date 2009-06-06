<?php
require_once ("../../../lib/stock.class.php");
$objUnitListAll = new Stock();
$StockUnitListAll=$objUnitListAll->retriveStockUnit();
$rowUnitListAll=count($StockUnitListAll);
?>


<body>
<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right"><a class="thickbox" href="includes/contents/ca_create_unit.php?height=200&width=500" title="Unit" >Back</a></td>
  </tr>
  <tr>
    <td width="205"><b>Unit Name</b></td>
    <td width="220"><b>Formal Name</b></td>
    <td width="243"><b>Decimal Places</b></td>
    <td width="120">&nbsp;</td>
  </tr>
<?php 

for ($i=0;$i<$rowUnitListAll;$i++)
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
  <tr id ="stk_<?php echo $StockUnitListAll["$i"]["stock_item_unit_id"]?>" bgcolor="<?php echo $bgc;?>">
    <td><?php echo $StockUnitListAll["$i"]["stock_item_unit_name"];	?></td>
    <td><?php echo $StockUnitListAll["$i"]["stock_item_unit_formal_name"];	?></td>
    <td><?php echo $StockUnitListAll["$i"]["stock_item_unit_decimal_place"];	?></td>
    <td align="center">	<a href="#" class='delete' id="<?php echo $StockUnitListAll["$i"]["stock_item_unit_id"]?>" >Delete</a>	</td>
  </tr>
<?php } ?>
</table>

</body>
<script type="text/javascript">


  	$(".delete").live("click", function(){
  		var id =$(this).attr('id');
		
  		if(confirm("you are deleting a Measurment Unit")){
  			
			$('#stk_'+id).remove();
			console.log(id);
			$.ajax({
			   type: "POST",
			   url: "includes/model/delete/delete_measur_unit.php",
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

