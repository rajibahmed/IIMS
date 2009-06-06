<?php
require_once ("../../../lib/stock.class.php");
$objStockDepartmentListAll = new Stock();
$StockDepartListAll=$objStockDepartmentListAll->retriveStockDepartmentListAll();
$rowStockDepartListAll=count($StockDepartListAll);
?>


<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right"><a class="thickbox" href="includes/contents/create_stock_department.php?height=200&width=500" title="Stock Group" >Back</a></td>
  </tr>
  <tr>
    <td width="140"><b>Group Name</b></td>
    <td width="125"><b>Group Parent</b></td>
    <td width="57">&nbsp;</td>
    <td width="67">&nbsp;</td>
  </tr>
<?php 

for ($i=0;$i<$rowStockDepartListAll;$i++)
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
  <tr id ="stk_<?php echo $StockDepartListAll["$i"]["stock_dept_id"]?>" bgcolor="<?php echo $bgc;?>">
    <td><?php echo $StockDepartListAll["$i"]["stock_dept_name"];
				$parent_id = $StockDepartListAll["$i"]["stock_dept_p_id"];
				$stk_depart_id = $StockDepartListAll["$i"]["stock_dept_id"];
				$StockDepartPname=$objStockDepartmentListAll->retriveStockDepartParentName($parent_id);
	?></td>
    <td><?php
	if($parent_id ==0)
		echo "Primary";
	else	
		echo $StockDepartPname[0]["stock_dept_name"];
	?></td>
    <td align="center"><a href="includes/contents/update/ca_edit_department.php?stk_depart_id=<?php echo $stk_depart_id;?>&height=200&width=500" class="thickbox">Edit</a></td>
    <td align="center">	<a href="#" class='delete' id="<?php echo $stk_depart_id;?>" >Delete</a>	</td>
  </tr>
<?php } ?>
</table>
<script type="text/javascript">


  	$(".delete").live("click", function(){
  		var id =$(this).attr('id');
		
  		if(confirm("you are deleting a stock Department")){
  			
			$('#stk_'+id).remove();
			console.log(id);
			$.ajax({
			   type: "POST",
			   url: "includes/model/delete/delete_stock_department.php",
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
