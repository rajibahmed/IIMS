<?php  
	require_once('../../lib/count.class.php');
?>

<div id="test">			
<form id="countForm" name="countForm" method="post"   action="includes/model/count_actions.php" >

     <?php 
	require_once "partials/_form_count.php";
	?>
    
           <div id="submit_set">
             <table width="100%" border="0" cellpadding="0" cellspacing="0">
               <tr>
                 <td width="54%" align="right"><a href="includes/contents/list_all/list_all_count.php?height=200&width=600" title="Count" class="thickbox button2">List All </a>                 </td>
                 <td width="7%">&nbsp;</td>
                 <td width="39%" align="left"> <input class="button saveButtonwidth" name="Submit" type="submit" value="Save" id="Submit"/></td>
               </tr>
             </table>
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