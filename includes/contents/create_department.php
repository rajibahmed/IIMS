<?php  
	require_once('../../lib/defination.class.php');
	require_once('../../lib/department.class.php');
	require_once('../../lib/office.class.php');
	
	$department=new Department;
	$office = new Office;
	
	
		
		$output=options_for_select(	$office->GetOffices(),
									'office_id',
									'office_name',
									true);
		
		$department_output=options_for_select(	$department->GetDepartments(),
									'department_id',
									'department_name',
									false);
			
	
?>

<div id="test">
<form id="companyForm" name="companyForm" method="post"   action="includes/model/department_actions.php" >

	<div class="vertical_form01">
		<p></p><p></p><p></p>
		
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
		  <tr>
		    <td width="10%">&nbsp;</td>
			<td width="90%"><p> 
			<label>Department Name:</label>
			<input type="text" class="txtfieldwidth" name="department_name" value="" id="department_name" />
		</p>
			
				
		<p> 
			<label>Office Name:</label>			 
			<select name='office'>
				<?php e($output); ?>
			</select>
		</p></td>
		  </tr>
	  </table>

		
		<div id="submit_set"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top"><table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="47%" align="center" valign="middle"><div align="right"><a href="includes/contents/list_all/list_all_department.php?height=300&width=580" title="Department List"  class="thickbox button2">List All </a></div></td>
        <td width="7%" align="center" valign="middle">&nbsp;</td>
        <td width="46%" align="left" valign="middle"><input class="button" name="submit" type="submit" value="Save"/></td>
      </tr>
    </table></td>
  </tr>
</table>

			 </p>
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