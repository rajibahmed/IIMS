<?php  
	require_once('../../lib/defination.class.php');
	include('../../lib/department.class.php');
?>

<div id="test">

<form id="officeForm" name="officeForm" method="post"   action="includes/model/office_actions.php" >
	<div id="note"> </div>	
	<div class="vertical_form">
		<p></p><p></p>
		<p>
			<label>Office Name:</label>
			<input type="text" class="txtfieldwidth" name="name" value="" id="department_name" />
		</p>
			
		<p>
			<label>Office Address:</label>
			<textarea class="txtfieldwidth" name="address"></textarea>
		</p>
	
		<p>
			<label>Office Phone:</label>
			<input type="text" class="txtfieldwidth" name="phone" value="" id="department_name" />
		</p>
		<p>
			<label>Office E-mail:</label>
			<input type="text" class="txtfieldwidth" name="mail" value="" id="department_name" />
		</p>
				
		<p></p>
		<div id="submit_set"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top"><table width="50%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="right" valign="middle"><a href="includes/contents/list_all/list_all_office.php?height=300&width=580" title="Office List"  class="thickbox button2">List All </a></td>
        <td align="right" valign="middle"><input class="button saveButtonwidth" name="submit" type="submit" value="Save"/></td>
        </tr>
    </table></td>
  </tr>
</table>

			
	  </div>
				
	</div>	
		
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

<script type="text/javascript" src="js/thickbox-compressed.js"> </script>	