<?php
require_once ("../../../lib/section.class.php");
$objSection = new Section;

$listAllSection=$objSection->GetUserSection();
$rowListAllSection=count($listAllSection);
?>

<form  id="listAllOffice" name="listAllOffice" method="post" action="" class="thickbox">
<div id="note"> </div>	
<table width="100%" border="0">
  <tr>
    <td colspan="4">&nbsp;</td>
    <td align="right">&nbsp;</td>
  </tr>
  <tr>
    <td width="142" align="left" valign="top"><strong>Section Name</strong></td>
    <td width="142" align="left" valign="top"><strong>Department Name  </strong></td>
    <td align="left" valign="top"><strong>Office Name  </strong></td>
    <td width="63">&nbsp;</td>
    <td width="85">&nbsp;</td>
  </tr>
<?php 

for ($i=0;$i<$rowListAllSection;$i++)
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
    <td align="left" valign="top"><?php echo $listAllSection["$i"]["sec_name"];
				$sec_id = $listAllSection["$i"]["sec_id"];
				$dep_id = $listAllSection["$i"]["dep_id"];
				$office_id = $listAllSection["$i"]["office_id"];
				
				$sectioninfo=$objSection->GetSectionByID($sec_id);
	?></td>
    <td align="left" valign="top">
	<?php
	if($dep_id ==0)
		echo "Primary";
	else
		echo $sectioninfo["0"]["department_name"];
	?>
		</td>
    <td align="left" valign="top">
	<?php
	if($office_id ==0)
		echo "Primary";
	else
	 echo $sectioninfo["0"]["office_name"]; ?></td>
    <td align="center"><a href="includes/contents/update/edit_section_info.php?sec_id=<?php echo $sec_id; ?>" class="thickbox" title="Update Section">Edit</a></td>
    <td align="center">Delete</td>
  </tr>
<?php } ?>
</table>
</form>
<script src="js/rajib_script.js" type="text/javascript"></script>

