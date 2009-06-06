<?php
require_once ("../../../lib/office.class.php");
$officeid = $_GET['officeid'];

$objOffice=new Office();
$officeInfo=$objOffice->GetOfficesByID($officeid);

?>




<form  id="OfficeInfo" name="OfficeInfo" method="post" action="includes/model/office_update_actions.php" >
<div id="note"> </div>	
	<div class="vertical_form">
		
		<p>
			<label>Office Name:</label>
			<input name="officeName" type="text" value="<?php  echo $officeInfo[0]['office_name'];  ?>" id="txtMname" class="inventori_txtfield" />
		</p>
			
		<p>
			<label>Office Address:</label>
			<textarea name="address" class="inventori_txtfield"><?php  echo $officeInfo[0]['office_address'];  ?></textarea>
		</p>
	
	  <p>
			<label>Office Phone:</label>
			<input type="text" class="inventori_txtfield" name="phone" value="<?php  echo $officeInfo[0]['office_phone'];  ?>" id="phone" />
		</p>
		<p>
			<label>Office E-mail:</label>
			<input type="text" class="inventori_txtfield" name="mail" value="<?php  echo $officeInfo[0]['office_mail'];  ?>" id="department_name" />
		</p>
				
		
		<div id="submit_set"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top"><table width="46%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="22%" align="center" valign="middle"><input type="hidden" name="officeID" id="officeID" value="<?php echo $officeid;?>" /></td>
        <td width="78%" align="center" valign="middle"><input name="btn_StkGrp" type="submit" class="button" id="btn_StkGrp" value="Update" /></td>
        </tr>
    </table></td>
  </tr>
</table>

			
			
	  </div>
				
	</div>	
		
</form>

<script src="js/rajib_script.js" type="text/javascript"></script>