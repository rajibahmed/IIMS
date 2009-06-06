<?php
require_once ("../../../lib/stock.class.php");
$objStockGroupListAll = new Stock();
$StockGrpListAll=$objStockGroupListAll->retriveStockGroupListAll();
$rowStockGroUnderListAll=count($StockGrpListAll);
?>


<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right"><a class="thickbox" href="includes/contents/ca_create_stock_group.php?height=200&width=500" title="Stock Group" >Back</a></td>
  </tr>
  <tr>
    <td width="140"><b>Group Name</b></td>
    <td width="125"><b>Group Parent</b></td>
    <td width="57">&nbsp;</td>
    <td width="67">&nbsp;</td>
  </tr>
<?php 

for ($i=0;$i<$rowStockGroUnderListAll;$i++)
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
  <tr  id ="stk_<?php echo $StockGrpListAll["$i"]["stock_group_id"]?>" bgcolor="<?php echo $bgc;?>">
    <td><?php echo $StockGrpListAll["$i"]["stock_group_name"];
				$parent_id = $StockGrpListAll["$i"]["stock_group_parent_id"];
				$s_grp_id = $StockGrpListAll["$i"]["stock_group_id"];
				$StockGrpPname=$objStockGroupListAll->retriveStockGroupParentName($parent_id);
	?></td>
    <td><?php
	if($parent_id ==0)
		echo "Primary";
	else	
		echo $StockGrpPname[0]["stock_group_name"];
	?></td>
    <td align="center"><a href="includes/contents/update/ca_edit_stock_group.php?s_grp_id=<?php echo $s_grp_id;?>&height=200&width=500" class="thickbox">Edit</a></td>
    <td align="center">	<a href="#" class='delete' id="<?php echo $s_grp_id;?>" >Delete</a>	</td>
  </tr>
<?php } ?>
</table>
<script type="text/javascript">


  	$(".delete").live("click", function(){
  		var id =$(this).attr('id');
		
  		if(confirm("you are deleting a stock group")){
  			
			$('#stk_'+id).remove();
			console.log(id);
			$.ajax({
			   type: "POST",
			   url: "includes/model/delete/delete_stock_grp.php",
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
