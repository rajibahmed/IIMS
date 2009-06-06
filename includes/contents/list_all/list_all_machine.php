<?php
require_once ("../../../lib/stock.class.php");
$objMachineListAll = new Stock();
$StockMachineListAll=$objMachineListAll->retriveStockMachineListAll();
$rowStockMachineListAll=count($StockMachineListAll);
?>


<body>
<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right"><a class="thickbox" href="includes/contents/create_stock_machine.php?height=200&width=500" title="Machine List" >Back</a></td>
  </tr>
  <tr>
    <td width="205"><b>Machine Name</b></td>
    <td width="220"><b>Section Name</b></td>
    <td width="243"><b>Department Name</b></td>
    <td width="98">&nbsp;</td>
    <td width="120">&nbsp;</td>
  </tr>
<?php 

for ($i=0;$i<$rowStockMachineListAll;$i++)
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
  <tr id ="stk_<?php echo $StockMachineListAll["$i"]["m_id"]?>" bgcolor="<?php echo $bgc;?>">
    <td><?php echo $StockMachineListAll["$i"]["m_name"];
				$m_id = $StockMachineListAll["$i"]["m_id"];
				$m_sec_id = $StockMachineListAll["$i"]["section_id"];
				$m_dep_id = $StockMachineListAll["$i"]["Department_id"];
				$StockDepSecnameID=$objMachineListAll->retriveStockDepartmentSectionName($m_sec_id);
				$StockDepNameID=$objMachineListAll->retriveStockDepartmentName($m_dep_id);
	?></td>
    <td><?php
	if($m_sec_id ==0)
		echo "Primary";
	else	
		echo $StockDepSecnameID[0]["sec_name"];
	?></td>
    <td><?php
	if($m_dep_id ==0)
		echo "Primary";
	else	
		echo $StockDepNameID[0]["stock_dept_name"];
	?></td>
    <td align="center"><a href="includes/contents/update/ca_edit_machine.php?m_id=<?php echo $m_id;?>&m_sec_id=<?php echo $m_sec_id;?>&m_dep_id=<?php echo $m_dep_id;?>&height=200&width=500" class="thickbox">Edit</a></td>
    <td align="center">	<a href="#" class='delete' id="<?php echo $m_id;?>" >Delete</a>	</td>
  </tr>
<?php } ?>
</table>

</body>
<script type="text/javascript">


  	$(".delete").live("click", function(){
  		var id =$(this).attr('id');
		
  		if(confirm("you are deleting a Machine")){
  			
			$('#stk_'+id).remove();
			console.log(id);
			$.ajax({
			   type: "POST",
			   url: "includes/model/delete/delete_stock_machine.php",
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

