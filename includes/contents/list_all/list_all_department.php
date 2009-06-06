<?php
require_once ("../../../lib/department.class.php");
require_once ("../../../lib/office.class.php");
$objOffice = new Office;
$objDepartment = new Department;

$listAllDepartment=$objDepartment->GetDepartments();
$rowListAllDepartment=count($listAllDepartment);
?>

<form  id="listAllOffice" name="listAllOffice" method="post" action="" class="thickbox">
<div id="note"> </div>	
<table width="100%" border="0">
  <tr>
    <td colspan="3">&nbsp;</td>
    <td align="right"><a class="thickbox" href="../create_office.php?height=300&width=500" title="Office List" ></a></td>
  </tr>
  <tr>
    <td width="142" align="left" valign="top"><strong>Department Name  </strong></td>
    <td align="left" valign="top"><strong>Office Name  </strong></td>
    <td width="63">&nbsp;</td>
    <td width="85">&nbsp;</td>
  </tr>
<?php 

for ($i=0;$i<$rowListAllDepartment;$i++)
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
  <tr bgcolor="<?php echo $bgc;?>">
    <td align="left" valign="top"><?php echo $listAllDepartment["$i"]["department_name"];
				$departmentID = $listAllDepartment["$i"]["department_id"];
				$department_office_id = $listAllDepartment["$i"]["department_office_id"];
				$officeNameByDep=$objOffice->GetOfficesByID($department_office_id);
	?></td>
    <td align="left" valign="top">
	<?php
	if($department_office_id ==0)
		echo "Primary";
	else
	echo $officeNameByDep["0"]["office_name"]; ?></td>
    <td align="center"><a href="includes/contents/update/edit_department_info.php?width=500&height=300&depid=<?php echo $departmentID; ?>" class="thickbox" title="Update Department">Edit</a></td>
    <td align="center">Delete</td>
  </tr>
<?php } ?>
</table>
</form>
<script src="js/rajib_script.js" type="text/javascript"></script>

