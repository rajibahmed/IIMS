<?php
	require_once ("../../../lib/stock.class.php");
	
	$objStockEngineerInfo = new Stock();
	$EngineerListAll=$objStockEngineerInfo->retriveStockItem();
	$rowEngListAll=count($EngineerListAll);

?>



<div id="search">
	<h1>Search</h1>	
	<p>
		<form autocomplete="off" action='' method='get'>
			<label for="stock_item">Stock Item Name</label>
			<input type="text" id="rajib" style='width:200px' />
			<a id='edit_stock_item' class='button thickbox' href='#'>Edit</a>
			<a id='' class='button delete' href='#'>Delete</a>
		</form>		
	 </p>
</div>

<table width="100%" border="0" id='stock_items'>
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

for ($i=0;$i<$rowEngListAll;$i++)
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
  <tr id ="stk_<?php echo $EngineerListAll["$i"]["stock_item_id"]?>" bgcolor="<?php echo $bgc;?>">
    <td><?php echo $EngineerListAll["$i"]["stock_item_name"];
				$stock_item_id = $EngineerListAll["$i"]["stock_item_id"];
				$stock_item_grp_id = $EngineerListAll["$i"]["stock_item_grp_id"];
				$stock_grp_name=$objStockEngineerInfo->retriveStockGroupById($stock_item_grp_id);
			?></td>
    <td>
	<?php
	if($stock_item_grp_id==0)
		echo "Primary";
	else
	 echo $stock_grp_name["0"]["stock_group_name"];?></td>
    <td align="center"><a href="includes/contents/update/edit_engi_item.php?stc_itm_id=<?php echo $stock_item_id;?>&height=550&width=600" class="thickbox">Edit</a></td>
    <td align="center">	<a href="#" class='delete' id="<?php echo $stock_item_id;?>" >Delete</a>	</td>
  </tr>
<?php } ?>
</table>
<script type="text/javascript">


  	$(".delete").live("click", function(){
  		var id =$(this).attr('id');
		
  		if(confirm("you are deleting a Engineering Item")){
  			
			$('#stk_'+id).remove();
			//console.log(id);
			$.ajax({
			   type: "GET",
			   url: "includes/model/delete/delete_engi_item.php",
			   data: "delete=true&stc_itm_id="+id,
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

    
    /**
    * JQuery AutoComplete Plugin Impelentation
    *
    *
    */
    
    $('#rajib').autocomplete('includes/pages/stock_item_autocomplete.php',{
    	width: 320,
		max: 8
    }).result(function (evt, data, formatted) {
    	
    	var stock_id = parseInt(data[1]);
    	url = 'stc_itm_id='+stock_id;
    	
    	$('#search ').find('a:second').attr('id',stock_id);

	    $('#search')
			.find('a:first')
			.attr('href','includes/contents/update/edit_engi_item.php?height=400&width=600&'+url);
			
		
	});
	
	$('#stock_items tr:even').addClass('gray');	
	
    
</script>
