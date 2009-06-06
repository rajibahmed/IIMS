<?php
require_once ("../../../lib/staple_length.class.php");
$objSta_LenListAll = new Sta_Len();
$Sta_LenListAll=$objSta_LenListAll->retriveSta_LenInfo();
$rowSta_LenListAll=count($Sta_LenListAll);
?>


<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right"><a class="thickbox" href="includes/contents/create_staple_length.php?height=200&width=500" title="Staple Lenght" >Back</a></td>
  </tr>
  <tr>
    <td width="443"><b>Staple Length Name</b></td>
    <td width="161">&nbsp;</td>
    <td width="210">&nbsp;</td>
  </tr>
<?php 

for ($i=0;$i<$rowSta_LenListAll;$i++)
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
  <tr id ="stk_<?php echo $Sta_LenListAll["$i"]["sta_len_id"]?>" bgcolor="<?php echo $bgc;?>">
    <td><?php echo $Sta_LenListAll["$i"]["sta_len_name"];
				$sta_len_id = $Sta_LenListAll["$i"]["sta_len_id"];
	?></td>
    <td align="center"><a href="includes/contents/update/edit_staple_length.php?sta_len_id=<?php echo $sta_len_id;?>&height=200&width=500" class="thickbox">Edit</a></td>
   <td align="center">	<a href="#" class='delete' id="<?php echo $sta_len_id;?>" >Delete</a>	</td>
  </tr>
<?php } ?>
</table>
<script type="text/javascript">


  	$(".delete").live("click", function(){
  		var id =$(this).attr('id');
		
  		if(confirm("you are deleting a Staple Length")){
  			
			$('#stk_'+id).remove();
			console.log(id);
			$.ajax({
			   type: "POST",
			   url: "includes/model/delete/delete_staple_length.php",
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