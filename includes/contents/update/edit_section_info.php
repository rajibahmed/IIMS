<?php 
	include('../../../lib/section.class.php'); 
	include('../../../lib/department.class.php');
	include('../../../lib/office.class.php');
	$objSection=new Section;
	$office = new Office;
	$objDepartment = new Department;
	
	$sec_id = $_GET['sec_id'];
	$allOfficeName=$office->GetOffices();
	$rowOffice=count($allOfficeName);
	
	$allDepartmentName=$objDepartment->GetDepartments();
	$rowAllDepartmentName=count($allDepartmentName);
	
	$sectionInfo=$objSection->GetUserSectionById($sec_id);
	$secDepID=$sectionInfo["0"]["dep_id"];
	$secOfficeID=$sectionInfo["0"]["office_id"];	
?>
<link href="../../css/stylesheet.css" rel="stylesheet" type="text/css" />



<form id="sectionForm" name="sectionForm" method="post" action="includes/model/section_update_actions.php" >
	<div id="note"> </div>
	<div class="vertical_form">
		
		<p> 
			<label>Section Name:</label>
			<input type="text" class="inventori_txtfield" 	name="section_name" value="<?php echo $sectionInfo["0"]["sec_name"]; ?>" id="section_name" />
		</p>
			
				
		<p> 
			<label>Department:</label>			 
			<select class="inventori_txtfield" name="department" id="department">
					<option value="0">Primary</option>
					<?php for($i=0; $i<$rowAllDepartmentName; $i++)
					{?>
					<option <?php if($secDepID==$allDepartmentName[$i]['department_id']) echo 'selected'  ?> value="<?php echo $allDepartmentName[$i]['department_id']?>"><?php echo $allDepartmentName[$i]['department_name']?></option>
					<?php }?>
			</select>
		</p>
		
		<p> 
			<label>Office:</label>			 
			<select class="inventori_txtfield" name="officeName" id="officeName">
					<option value="0">Primary</option>
					<?php for($i=0; $i<$rowOffice; $i++)
					{?>
					<option <?php if($secOfficeID==$allOfficeName[$i]['office_id']) echo 'selected'  ?> value="<?php echo $allOfficeName[$i]['office_id']?>"><?php echo $allOfficeName[$i]['office_name']?></option>
					<?php }?>
			</select>
		</p>
		
		<div id="submit_set"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top"><table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="middle"></td>
        <td align="center" valign="middle"><input type="hidden" name="secid" id="secid" value="<?php echo $sec_id;?>" /></td>
        <td align="center" valign="middle"><input class="button" name="submit" type="submit" value="Update"/></td>
      </tr>
    </table></td>
  </tr>
</table>

			 </p>
		</div>		
  </div>	
</form>

<script src="js/rajib_script.js" type="text/javascript"></script>