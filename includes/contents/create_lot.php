<?php  
	require_once('../../lib/lot.class.php');
?>

<div id="test">			
<form id="lotForm" name="lotForm" method="post"   action="includes/model/lot_actions.php" >

     <?php 
	require_once "partials/_form_lot.php";
	?>
    
           <div id="submit_set">
             <table width="100%" border="0" cellpadding="0" cellspacing="0">
               <tr>
                 <td width="55%" align="right"><a href="includes/contents/list_all/list_all_lot.php?height=200&width=600" title="Lot" class="thickbox button2">List All </a>                 </td>
                 <td width="3%">&nbsp;</td>
                 <td width="42%" align="left"> <input class="button saveButtonwidth" name="Submit" type="submit" value="Save" id="Submit"/></td>
               </tr>
             </table>
		   </div>
        </div>  
	</table>		
</form>


</div>


<script type="text/javascript" charset="utf-8">
	
	var options={
			target:'#test',
			beforeSubmit:function(){
				$("#test").slideUp(200).html("");	
			},
			success:function(){
				$("#test").slideDown(200);
			},
	}
		
	$("form").submit(function(){
		$('#btn_save').attr('disabled');
		$(this).ajaxSubmit(options);
		return false;
	})

/*---------------------------------------------------*/
</script>
				