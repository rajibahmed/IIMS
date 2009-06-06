<?php
require_once ("../../../lib/office.class.php");
$objOffice = new Office;

$listAllOffice=$objOffice->GetOffices();
$rowListAllOffice=count($listAllOffice);
?>

<form  id="listAllOffice" name="listAllOffice" method="post" action="" class="thickbox">
<div id="note"> </div>	
<table width="100%" border="0">
  <tr>
    <td colspan="5">&nbsp;</td>
    <td align="right"><a class="thickbox" href="../create_office.php?height=300&width=500" title="Office List" ></a></td>
  </tr>
  <tr>
    <td width="142" align="left" valign="top"><strong>Office Name  </strong></td>
    <td width="138" align="left" valign="top"><strong>Address </strong></td>
    <td width="139" align="left" valign="top"><b>Phone No. </b></td>
    <td align="left" valign="top"><b>E-mail</b></td>
    <td width="63">&nbsp;</td>
    <td width="85">&nbsp;</td>
  </tr>
<?php 

for ($i=0;$i<$rowListAllOffice;$i++)
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
    <td align="left" valign="top"><?php echo $listAllOffice["$i"]["office_name"];
				$officeID = $listAllOffice["$i"]["office_id"];
				
	?></td>
    <td align="left" valign="top"><?php echo $listAllOffice["$i"]["office_address"]; ?></td>
    <td align="left" valign="top"><?php echo $listAllOffice["$i"]["office_phone"]; ?></td>
    <td align="left" valign="top"><?php echo $listAllOffice["$i"]["office_mail"]; ?></td>
    <td align="center"><a href="includes/contents/update/edit_office_info.php?width=500&height=300&officeid=<?php echo $officeID; ?>" class="thickbox" title="Update Office">Edit</a></td>
    <td align="center">Delete</td>
  </tr>
<?php } ?>
</table>
</form>
<script src="js/rajib_script.js" type="text/javascript"></script>

