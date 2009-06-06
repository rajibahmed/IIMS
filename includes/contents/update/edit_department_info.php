<?php  
	include('../../../lib/department.class.php');
	include('../../../lib/office.class.php');
	$department=new Department;
	$office = new Office;
	
	$depid = $_GET['depid'];
	$allOfficeName=$office->GetOffices();
	$rowOffice=count($allOfficeName);
	
	$objDepartment=$department->GetDepartmentsByID($depid);
	$depOfficeID=$objDepartment["0"]["department_office_id"];	
?>
<link href="../../css/stylesheet.css" rel="stylesheet" type="text/css" />



<form id="departmentForm" name="departmentForm" method="post"  action="includes/model/department_update_actions.php" >
<div id="note"> </div>	

	<div class="vertical_form">
		
		<p> 
			<label>Department Name:</label>
			<input type="text" class="inventori_txtfield"	name="department_name" value="<?php echo $objDepartment["0"]["department_name"]; ?>" id="department_name" />
		</p>
			
				
		<p> 
			<label>Office Name:</label>			 
			<select class="inventori_txtfield" name="officeName" id="officeName">
					<option value="0">Primary</option>
					<?php for($i=0; $i<$rowOffice; $i++)
					{?>
					<option <?php if($depOfficeID==$allOfficeName[$i]['office_id']) echo 'selected'  ?> value="<?php echo $allOfficeName[$i]['office_id']?>"><?php echo $allOfficeName[$i]['office_name']?></option>
					<?php }?>
			</select>
		</p>
		<div id="submit_set"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top"><table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="middle"></td>
        <td align="center" valign="middle"><input type="hidden" name="depid" id="depid" value="<?php echo $depid;?>" /></td>
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
