<?php

require_once ("../../lib/stock.class.php");
$objStockLocationInfo = new Stock();
$StockLocationInfo=$objStockLocationInfo->retriveLocation();
$rowStockLocation=count($StockLocationInfo);


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript">
function addFormField() {

}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="../../css/stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!--<p><a href="#" onClick="addFormField(); return false;">Add</a></p>
<form action="" method="get">

<input type=hidden id='id' value='1'>
<div id="divTxt"></div>
<input type='submit' value='Submit' name='submit'>
</form>-->
<div id="test">
<form  id="CreateLocations" name="CreateLocations" method="post"   action="includes/model/stock_location_actions.php">
<div id="note"> </div>
  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
    <tr>
      <td height="42">&nbsp;</td>
    </tr>
    <tr>
      <td align="center" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="32%" height="30" align="right" valign="top">Name: &nbsp;</td>
          <td width="64%" align="left" valign="top"><input name="locationName" type="text" id="locationName" size="40" class="inventori_txtfield" /></td>
        </tr>
        <tr>
          <td height="30" align="right" valign="top">Under: &nbsp;</td>
          <td align="left" valign="top"><select name="underLocation" id="underLocation" class="inventori_txtfield" >
            <option value="0">Primary </option>
            <?php
					for($i=0; $i<$rowStockLocation; $i++)
					 {
				
				 ?>
            <option value="<?php echo $StockLocationInfo[$i]['stock_location_id']; ?>" > <?php echo $StockLocationInfo[$i]['stock_location_name']; ?></option>
            <?php } ?>
          </select></td>
        </tr>
        <tr>
          <td height="30" align="right" valign="top">Address: &nbsp;</td>
          <td align="left" valign="top"><input name="locationAdd" type="text" id="locationAdd" size="40" class="inventori_txtfield" /></td>
        </tr>
        <tr>
          <td height="30" align="right" valign="top">City: &nbsp;</td>
          <td align="left" valign="top"><input name="LocationCity" type="text" id="LocationCity" size="40" class="inventori_txtfield"/></td>
        </tr>
        <tr>
          <td height="30" align="right" valign="top">Phone: &nbsp;</td>
          <td align="left" valign="top"><input name="LocationPhone" type="text" id="LocationPhone" size="40" class="inventori_txtfield"/></td>
        </tr>
        <tr>
          <td height="30" align="right" valign="top">Fax: &nbsp;</td>
          <td align="left" valign="top"><input name="LocationFax" type="text" id="LocationFax" size="40" class="inventori_txtfield" /></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center" valign="top">
        <div align="center">
          <table width="55%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td align="center" valign="middle">&nbsp;</td>
              <td align="right" valign="middle"><a href="includes/contents/list_all/list_all_location.php?height=300&width=650" title="Location"  class="thickbox button2">List All </a></td>
              <td align="right" valign="middle"><input type="submit" class="button saveButtonwidth" name="Submit3" value="Save" /></td>
            </tr>
          </table>
        </div></td>
    </tr>
  </table>
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