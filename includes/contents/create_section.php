<?php
	require_once('../../lib/defination.class.php');	
	include('../../lib/department.class.php');
	include('../../lib/office.class.php');
	
	$deparment = new Department;
	$office =new Office;
	
	$output=options_for_select(	$deparment->GetDepartments(),
								'department_id',
								'department_name',
								true);



	$office_output=options_for_select(	$office->GetOffices(),
								'office_id',
								'office_name',
								true);

	
?>

<link href="../../css/stylesheet.css" rel="stylesheet" type="text/css" />

 


<form id="userSection" name="userSection" method="post"  action="includes/model/user_section_actions.php" >
	<div id="note"> </div>	
	
	<div class="vertical_form01">
		<br /><br /><p></p><p></p>
				
	  <p> 
			<label>  Section Name:</label>
			<input type="text" class="txtfieldwidth" 	name="section_name"  />
	  </p>
	  
	  <p> 
			<label>  Department: </label>
			<select name="department" ><?php e($output); ?></select>
	  </p>
	  
	  <p> 
			<label>  Office: </label>
			<select name="office" ><?php e($office_output); ?></select>
	  </p>
		<p></p>	
	
	  <div id="submit_set">
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle"><table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="68%" align="right" valign="middle"><a href="includes/contents/list_all/list_all_section.php?height=300&width=580" title="Section"  class="thickbox button2 saveButtonwidth ">List All </a></td>
        <td width="10%" align="right" valign="middle">&nbsp;</td>
        <td width="22%" align="right" valign="middle"><input class="button saveButtonwidth" name="submit" type="submit" value="Save"/></td>
      </tr>
    </table></td>
  </tr>
</table>

			</p>
	  </div>		
	</div>	
</form>

<script type="text/javascript" src="js/rajib_script.js"> </script>	