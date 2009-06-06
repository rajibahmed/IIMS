<?php
require_once ("../../../lib/count.class.php");
$objCountListAll = new Count();
$CountListAll=$objCountListAll->retriveCountInfo();
$rowCountListAll=count($CountListAll);
?>


<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right"><a class="thickbox" href="includes/contents/create_count.php?height=200&width=500" title="Count" >Back</a></td>
  </tr>
  <tr>
    <td width="140"><b>Count Name</b></td>
    <td width="57">&nbsp;</td>
    <td width="67">&nbsp;</td>
  </tr>
<?php 

for ($i=0;$i<$rowCountListAll;$i++)
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
  <tr id ="stk_<?php echo $CountListAll["$i"]["count_id"]?>" bgcolor="<?php echo $bgc;?>">
    <td><?php echo $CountListAll["$i"]["count_name"];
				$count_id = $CountListAll["$i"]["count_id"];
	?></td>
    <td align="center"><a href="includes/contents/update/edit_count.php?count_id=<?php echo $count_id;?>&height=200&width=500" class="thickbox">Edit</a></td>
    <td align="center">	<a href="#" class='delete' id="<?php echo $count_id;?>" >Delete</a>	</td>
  </tr>
<?php } ?>
</table>

<script type="text/javascript">


  	$(".delete").live("click", function(){
  		var id =$(this).attr('id');
		
  		if(confirm("you are deleting a Count")){
  			
			$('#stk_'+id).remove();
			console.log(id);
			$.ajax({
			   type: "POST",
			   url: "includes/model/delete/delete_count.php",
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