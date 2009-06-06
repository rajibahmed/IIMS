<?php
$idTariff=$_GET['idTariff'];

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form  id="tariffPropertise" name="tariffPropertise" method="post"  onsubmit="return saveFormData(tariffPropertise)" action="includes/model/single_tarif_properties_actions.php">
  <table width="60%" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" class="title">Tariff Propertise <hr></td>
    </tr>
    <tr>
      <td width="39%">Description</td>
      <td width="61%"><input type="text" name="txtTarifname" id="txtTarifname" /></td>
    </tr>
    <tr>
      <td>Prefix <br /></td>
      <td><input name="txtPrefix" type="text" id="txtPrefix" /></td>
    </tr>
    <tr>
      <td>Voice rate <br /></td>
      <td><input name="txtVoiceRate" type="text" id="txtVoiceRate" /></td>
    </tr>
    <tr>
      <td>Grace period <br /></td>
      <td><input name="txtGperiod" type="text" id="txtGperiod" value="0" /></td>
    </tr>
    <tr>
      <td>Minimal time</td>
      <td><input name="txtMintime" type="text" id="txtMintime" value="0" /></td>
    </tr>
    <tr>
      <td>Resolution <br /></td>
      <td><input name="txtres" type="text" id="txtres" /></td>
    </tr>
    <tr>
      <td>Rate multiplier</td>
      <td><input name="chkRetMultiplier" type="checkbox" id="chkRetMultiplier" value="1" />
      <input name="RateMultiplier" type="text" id="RateMultiplier" value="-1" /></td>
    </tr>
    <tr>
      <td>Rate Addition</td>
      <td><input name="chkRateAddition" type="checkbox" id="chkRateAddition" value="1" />
      <input name="txtRateAddition" type="text" id="txtRateAddition" value="-1" /></td>
    </tr>
    <tr>
      <td>Disable this prefix <br /></td>
      <td><input name="chkTimeSpan" type="checkbox" id="chkTimeSpan" value="1" />      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">Time span<hr></td>
    </tr>
    <tr>
      <td colspan="2"><table width="100%" border="0">
        <tr>
          <td width="25%">From day</td>
          <td width="25%"><select name="from_date" id="from_date">
          	 <option value="0">Sunday</option>
            <option value="1">Monday</option>
            <option value="2">Tuesday</option>
            <option value="3">wednesday</option>
            <option value="4">Thursday</option>
            <option value="5">Friday</option>
            <option value="6">Saturday</option>
           
          </select>          </td>
          <td colspan="2">to 
            <select name="to_date" id="to_date">
              <option value="0">Sunday</option>
              <option value="1">Monday</option>
              <option value="2">Tuesday</option>
              <option value="3">wednesday</option>
              <option value="4">Thursday</option>
              <option value="5">Friday</option>
              <option value="6">Saturday</option>
            </select></td>
          </tr>
        <tr>
          <td>From hour</td>
          <td><input name="from_hr" type="text" id="from_hr" value="00.00" /></td>
          <td width="7%">to</td>
          <td width="43%"><input name="to_hr" type="text" id="to_hr" value="24.00" /><input name="idTariff" type="hidden" value="<?php echo $idTariff ?>" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="btn_submit" id="btn_submit" value="Submit" /></td>
    </tr>
  </table>
</form>
</body>
</html>
