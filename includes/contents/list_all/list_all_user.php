<?php
require_once('../../../lib/user.class.php');
$objUser = new User;

$listAllUser=$objUser->GetUserList();
$rowListAllUser=count($listAllUser);
?>

<form  id="listAllUser" name="listAllUser" method="post" action="" class="thickbox">
<div id="note"> </div>	
<table width="100%" border="0">
  <tr>
    <td colspan="12"><a class="thickbox" href="/iims/home.php" title="Manufacture List" ></a></td>
    </tr>
  <tr>
    <td width="142"><strong>User Name </strong></td>
    <td width="138"><strong>Login Name </strong></td>
    <td width="139"><b>Password</b></td>
    <td width="142"><b>E-mail</b></td>
    <td width="169"><strong>Address</strong></td>
    <td width="169"><strong>Contact</strong></td>
    <td width="169"><strong>Section</strong></td>
    <td width="169"><strong>Department</strong></td>
    <td width="169"><strong>Office</strong></td>
    <td width="169"><strong>Designation</strong></td>
    <td colspan="2"><strong>Level</strong></td>
    </tr>
<?php 

for ($i=0;$i<$rowListAllUser;$i++)
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
    <td><?php echo $listAllUser["$i"]["user_name"];
				$userID = $listAllUser["$i"]["user_id"];
				$userSec_id = $listAllUser["$i"]["user_sec"];
				$user_dept_id = $listAllUser["$i"]["user_dept"];
				$office_id = $listAllUser["$i"]["user_office"];
				
				$otherUserInfo=$objUser->retriveUserInfoByID($userID);
				/*
				$StockDepSecNameID=$objManufacturerListAll->retriveStockSectionName($section_id);
				$StockDepNameID=$objManufacturerListAll->retriveStockDepartmentName($dept_id);*/
	?></td>
    <td><?php echo $listAllUser["$i"]["user_login"]; ?></td>
    <td><?php echo $listAllUser["$i"]["user_pass_digest"]; ?></td>
    <td><?php echo $listAllUser["$i"]["user_email"]; ?></td>
    <td><?php echo $listAllUser["$i"]["user_address"]; ?></td>
    <td><?php echo $listAllUser["$i"]["user_contact"]; ?></td>
    <td>
	<?php
	if($userSec_id ==0)
		echo "Primary";
	else	
		echo $otherUserInfo[0]["sec_name"];
	?>	</td>
    <td><?php
	if($user_dept_id ==0)
		echo "Primary";
	else	
		echo $otherUserInfo[0]["department_name"];
	?></td>
    <td><?php
	if($office_id ==0)
		echo "Primary";
	else	
		echo $otherUserInfo[0]["office_name"];
	?></td>
    <td><?php echo $listAllUser["$i"]["user_designation"]; ?></td>
    <td colspan="2">&nbsp;</td>
    </tr>
<?php } ?>
</table>
</form>
<script src="js/rajib_script.js" type="text/javascript"></script>

