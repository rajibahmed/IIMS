<?php
require_once ("../../../lib/stock.class.php");
$objStockSectionListAll = new Stock();
$StockSectListAll=$objStockSectionListAll->retriveStockSection();
$rowStockSectListAll=count($StockSectListAll);
?>


<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right"><a class="thickbox" href="includes/contents/create_stock_section.php?height=200&width=500" title="Stock Group" >Back</a></td>
  </tr>
  <tr>
    <td width="177"><b>Section Name</b></td>
    <td width="254"><b>Section Parent</b></td>
    <td width="255"><b>Stock Department</b></td>
    <td width="144">&nbsp;</td>
    <td width="84">&nbsp;</td>
  </tr>
<?php 

for ($i=0;$i<$rowStockSectListAll;$i++)
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
  <tr id ="stk_<?php echo $StockSectListAll["$i"]["sec_id"]?>" bgcolor="<?php echo $bgc;?>">
    <td><?php echo $StockSectListAll["$i"]["sec_name"];
				$section_parent_id = $StockSectListAll["$i"]["Section_p_id"];
				$stk_section_id = $StockSectListAll["$i"]["sec_id"];
				$stk_depart_id = $StockSectListAll["$i"]["stock_dept_id"];
				$StockSectionname=$objStockSectionListAll->retriveStockSectionName($section_parent_id);
				$StockDepartPname=$objStockSectionListAll->retriveStockDepartParentName($stk_depart_id);
	?></td>
    <td><?php
	if($section_parent_id ==0)
		echo "Primary";
	else	
		echo $StockSectionname[0]["sec_name"];
	?></td>
    
    <td><?php
	if($stk_depart_id=="Primary")
		echo "Primary";
	else	
		echo $StockDepartPname[0]["stock_dept_name"];
	?></td>
    <td align="center"><a href="includes/contents/update/ca_edit_section_department.php?stk_section_id=<?php echo $stk_section_id;?>&height=200&width=500" class="thickbox">Edit</a></td>
    <td align="center">	<a href="#" class='delete' id="<?php echo $stk_section_id;?>" >Delete</a>	</td>
  </tr>
<?php } ?>
</table>
<script type="text/javascript">


  	$(".delete").live("click", function(){
  		var id =$(this).attr('id');
		
  		if(confirm("you are deleting a stock Section")){
  			
			$('#stk_'+id).remove();
			console.log(id);
			$.ajax({
			   type: "POST",
			   url: "includes/model/delete/delete_stock_section.php",
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
