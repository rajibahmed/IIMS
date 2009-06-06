<?php
require_once ("../../../lib/stock.class.php");
$objManufacturerListAll = new Stock();
$StockManufacturerListAll=$objManufacturerListAll->retriveManufecturer();
$rowStockManufacturerListAll=count($StockManufacturerListAll);
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
    <td align="right"><a class="thickbox" href="includes/contents/create_stock_manufacture.php?height=200&width=500" title="Manufacture List" >Back</a></td>
  </tr>
  <tr>
    <td width="142"><b>Manufacturer Name</b></td>
    <td width="138"><strong>Year</strong></td>
    <td width="139"><b>Machine Name</b></td>
    <td width="142"><b>Section Name</b></td>
    <td width="169"><b>Department Name</b></td>
    <td width="63">&nbsp;</td>
    <td width="85">&nbsp;</td>
  </tr>
<?php 

for ($i=0;$i<$rowStockManufacturerListAll;$i++)
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
  <tr id ="stk_<?php echo $StockManufacturerListAll["$i"]["manu_id"]?>" bgcolor="<?php echo $bgc;?>">
    <td><?php echo $StockManufacturerListAll["$i"]["manu_name"];
				$manu_id = $StockManufacturerListAll["$i"]["manu_id"];
				$machine_id = $StockManufacturerListAll["$i"]["machine_id"];
				$section_id = $StockManufacturerListAll["$i"]["section_id"];
				$dept_id = $StockManufacturerListAll["$i"]["dept_id"];
				
				$StockMachinenameID=$objManufacturerListAll->retriveStockMachineListByID($machine_id);
				$StockDepSecNameID=$objManufacturerListAll->retriveStockSectionName($section_id);
				$StockDepNameID=$objManufacturerListAll->retriveStockDepartmentName($dept_id);
	?></td>
    <td><?php echo $StockManufacturerListAll["$i"]["manu_year"]; ?></td>
    <td><?php
	if($machine_id ==0)
		echo "Primary";
	else	
		echo $StockMachinenameID[0]["m_name"];
	?>
	
	</td>
    <td><?php
	if($section_id ==0)
		echo "Primary";
	else	
		echo $StockDepSecNameID[0]["sec_name"];
	?></td>
    <td><?php
	if($dept_id ==0)
		echo "Primary";
	else	
		echo $StockDepNameID[0]["stock_dept_name"];
	?></td>
    <td align="center"><a href="includes/contents/update/ca_edit_manufacturer.php?manu_id=<?php echo $manu_id;?>&machine_id=<?php echo $machine_id;?>&section_id=<?php echo $section_id;?>&dept_id=<?php echo $dept_id;?>&height=300&width=500" class="thickbox">Edit</a></td>
    <td align="center">	<a href="#" class='delete' m_id="<?php echo $manu_id;?>" >Delete</a>	</td>
  </tr>
<?php } ?>
</table>

</body>
<script type="text/javascript">


  	$(".delete").live("click", function(){
  		var id =$(this).attr('m_id');
		
  		if(confirm("you are deleting a stock Manufacturer")){
  			
			$('#stk_'+id).remove();
			console.log(id);
			$.ajax({
			   type: "POST",
			   url: "includes/model/delete/delete_stock_manufac.php",
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
    
