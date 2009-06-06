<?php
require_once ("../../../lib/stock.class.php");
$objMachineModelListAll = new Stock();
$StockMacModelAll=$objMachineModelListAll->retriveMachineModelName();
$rowMachineModelListAll=count($StockMacModelAll);
?>


<body>
<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right"><a class="thickbox" href="includes/contents/create_machine_model.php">Back</a></td>
  </tr>
  <tr>
    <td width="142"><b>Mobel Name</b></td>
    <td width="139"><b>Machine Name</b></td>
    <td width="139"><b>Machine Mode</b></td>
    <td width="142"><b>Section Name</b></td>
    <td width="169"><b>Department Name</b></td>
    <td width="63">&nbsp;</td>
    <td width="85">&nbsp;</td>
  </tr>
<?php 

for ($i=0;$i<$rowMachineModelListAll;$i++)
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
  <tr id ="stk_<?php echo $StockMacModelAll["$i"]["machine_model_id"]?>" bgcolor="<?php echo $bgc;?>">
    <td><?php echo $StockMacModelAll["$i"]["machine_model_name"];
				$macMode_id = $StockMacModelAll["$i"]["machine_model_id"];
				$machine_id = $StockMacModelAll["$i"]["machine_id"];
				$Section_p_id = $StockMacModelAll["$i"]["Section_p_id"];
				$stock_dept_id = $StockMacModelAll["$i"]["stock_dept_id"];
				$machine_mode = $StockMacModelAll["$i"]["manufacturer_id"];
				
				$StockMachineManuModeID=$objMachineModelListAll->getManufacturerById($machine_mode);
				$StockMachinenameID=$objMachineModelListAll->retriveStockMachineListByID($machine_id);
				$StockDepSecNameID=$objMachineModelListAll->retriveStockSectionName($Section_p_id);
				$StockDepNameID=$objMachineModelListAll->retriveStockDepartmentName($stock_dept_id);
	?></td>
    <td><?php
	if($machine_id==0)
		echo "Primary";
	else	
		echo $StockMachinenameID[0]["m_name"];
	?>	</td>
    <td><?php
	if($machine_mode==0)
		echo "Primary";
	else	
		echo $StockMachineManuModeID[0]["manu_name"];
	?></td>
    <td><?php
	if($Section_p_id ==0)
		echo "Primary";
	else	
		echo $StockDepSecNameID[0]["sec_name"];
	?></td>
    <td><?php
	if($stock_dept_id ==0)
		echo "Primary";
	else	
		echo $StockDepNameID[0]["stock_dept_name"];
	?></td>
    <td align="center"><a href="includes/contents/update/ca_edit_machine_mode.php?macMode_id=<?php echo $macMode_id;?>&machine_id=<?php echo $machine_id;?>&Section_p_id=<?php echo $Section_p_id;?>&stock_dept_id=<?php echo $stock_dept_id;?>&machine_mode=<?php echo $machine_mode;?>&height=300&width=500" class="thickbox">Edit</a></td>
    <td align="center">	<a href="#" class='delete' id="<?php echo $macMode_id;?>" >Delete</a>	</td>
  </tr>
<?php } ?>
</table>

</body>
<script type="text/javascript">


  	$(".delete").live("click", function(){
  		var id =$(this).attr('id');
		
  		if(confirm("you are deleting a stock Machine Model")){
  			
			$('#stk_'+id).remove();
			console.log(id);
			$.ajax({
			   type: "POST",
			   url: "includes/model/delete/delete_stock_mac_model.php",
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