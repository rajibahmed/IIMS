<?php
require_once ("../../../lib/stock.class.php");
$objFinishGoodsList = new Stock();
$FinishListAll=$objFinishGoodsList->retriveFinishGoodsList();
$rowFinishListAll=count($FinishListAll);
?>


<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="129" align="right" valign="top">&nbsp;</td>
    <td width="158" align="right" valign="top"><a class="thickbox" href="includes/contents/create_engn_item.php">Back</a></td>
  </tr>
  <tr>
    <td width="243"><b>Item Name</b></td>
    <td width="280"><b>Stock Group  Name</b></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
<?php 
for ($i=0;$i<$rowFinishListAll;$i++)
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
  <tr id ="stk_<?php echo $FinishListAll["$i"]["stock_item_id"]?>" bgcolor="<?php echo $bgc;?>">
    <td><?php echo $FinishListAll["$i"]["stock_item_name"];
				$stock_item_id = $FinishListAll["$i"]["stock_item_id"];
				$stock_item_grp_id = $FinishListAll["$i"]["stock_item_grp_id"];
				$stock_grp_name=$objFinishGoodsList->retriveStockGroupById($stock_item_grp_id);
			?></td>
    <td>
	<?php
	if($stock_item_grp_id==0)
		echo "Primary";
	else
	 echo $stock_grp_name["0"]["stock_group_name"];?></td>
    <td align="center"><a href="includes/contents/update/edit_finish.php?stc_itm_id=<?php echo $stock_item_id;?>&height=550&width=600" class="thickbox">Edit</a></td>
    <td align="center">	<a href="#" class='delete' id="<?php echo $stock_item_id;?>" >Delete</a>	</td>
  </tr>
<?php } ?>
</table>
<script type="text/javascript">


  	$(".delete").live("click", function(){
  		var id =$(this).attr('id');
		
  		if(confirm("you are deleting a Engineering Item")){
  			
			$('#stk_'+id).remove();
			console.log(id);
			$.ajax({
			   type: "POST",
			   url: "includes/model/delete/delete_engi_item.php",
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
