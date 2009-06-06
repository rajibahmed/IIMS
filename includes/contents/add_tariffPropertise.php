<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form  id="tariffPropertise" name="tariffPropertise" method="post"  onsubmit="return saveFormData(tariffPropertise)" action="includes/model/add_tarif_actions.php">
  <table width="60%" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td colspan="2"><span class="title">Tariff's Propertise </span></td>
    </tr>
    <tr>
      <td colspan="2" class="title">&nbsp;</td>
    </tr>
    <tr>
      <td width="39%">Tarrif name(max. 13 signs)</td>
      <td width="61%"><input type="text" name="txtTarifname" id="txtTarifname" /></td>
    </tr>
    <tr>
      <td>Minimal duration (in seconds)</td>
      <td><input name="txtMinimalDuration" type="text" id="txtMinimalDuration" value="1" /></td>
    </tr>
    <tr>
      <td>Resulation (in seconds)</td>
      <td><input name="ResulationInSecond" type="text" id="ResulationInSecond" value="1" /></td>
    </tr>
    <tr>
      <td>Surchase time (in seconds)</td>
      <td><input name="surchasetime" type="text" id="surchasetime" value="0" /></td>
    </tr>
    <tr>
      <td>Surchase amount</td>
      <td><input name="surchaseAmount" type="text" id="surchaseAmount" value="0" /></td>
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
      <td>Time span</td>
      <td><input name="chkTimeSpan" type="checkbox" id="chkTimeSpan" value="1" />      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="btnTariffProperstise" id="btnTariffProperstise" value="Submit" /></td>
    </tr>
  </table>
</form>
</body>
</html>
