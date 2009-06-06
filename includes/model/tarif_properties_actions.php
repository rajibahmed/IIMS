<?php
require_once('../../lib/defination.class.php');
include('../../lib/forms.class.php');
include ('../../caleder.php');
$resellersId=$_SESSION[resellerid];
$reselltype=$_SESSION[resellertype];
$objtariff_info = new tariff_info();
$reselltypetable1="";

$param=$_GET['param'];
// get tariff description / name by id
$usertariff_infoData = $objtariff_info->retriveRariffsnamesById($param);

	
    
	
if($param)
{	
	
?>	


<form  id="tariffPropertise" name="tariffPropertise" method="post"  onsubmit="return saveFormData(tariffPropertise)" action="includes/model/tarif_properties_actions.php">
  <table width="60%" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" class="title">Tariff Propertise </td>
    </tr>
    <tr>
      <td width="39%">Tarrif name(max. 13 signs)</td>
      <td width="61%"><input type="text" name="txtTarifname" id="txtTarifname" value="<?php echo $usertariff_infoData[0]['description']?>"  /></td>
    </tr>
    <tr>
      <td>Minimal duration (in seconds)</td>
      <td><input name="txtMinimalDuration" type="text" id="txtMinimalDuration" value="<?php echo $usertariff_infoData[0]['minimal_time']?>" /></td>
    </tr>
    <tr>
      <td>Resulation (in seconds)</td>
      <td><input name="ResulationInSecond" type="text" id="ResulationInSecond" value="<?php echo $usertariff_infoData[0]['resolution']?>" /></td>
    </tr>
    <tr>
      <td>Surchase time (in seconds)</td>
      <td><input name="surchasetime" type="text" id="surchasetime" value="<?php echo $usertariff_infoData[0]['surcharge_time']?>" /></td>
    </tr>
    <tr>
      <td>Surchase amount</td>
      <td><input name="surchaseAmount" type="text" id="surchaseAmount" value="<?php echo $usertariff_infoData[0]['surcharge_amount']?>" /></td>
    </tr>
    <tr>
      <td>Rate multiplier</td>
      <td><input name="RateMultiplier" type="text" id="RateMultiplier" value="<?php echo $usertariff_infoData[0]['rate_multiplier']?>" /></td>
    </tr>
    <tr>
      <td>Rate Addition</td>
      <td><input name="txtRateAddition" type="text" id="txtRateAddition" value="<?php echo $usertariff_infoData[0]['rate_addition']?>" /></td>
    </tr>
    <tr>
      <td>Time span</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td><input type="hidden" name="tariifId" value="<?php echo $usertariff_infoData[0]['id_tariff']; ?>"">
      <td><input type="submit" name="btnUpdate" id="btnUpdate" value="Submit" /></td>
    </tr>
  </table>
</form>

<? } 
if(isset($btnUpdate))

{

$txtTarifname = $_POST[txtTarifname];
$txtMinimalDuration = $_POST[txtMinimalDuration];
$ResulationInSecond = $_POST[ResulationInSecond];
$surchasetime = $_POST[surchasetime];
$surchaseAmount = $_POST[surchaseAmount];
$RateMultiplier = $_POST[RateMultiplier];
$txtRateAddition = $_POST[txtRateAddition];
$txtMinimalDuration = $_POST[txtMinimalDuration];

$tariifId = $_POST[tariifId];

$updateData= "set description='$txtTarifname',minimal_time='$selTariff',resolution='$ResulationInSecond',surcharge_time='$surchasetime',surcharge_amount='$surchaseAmount',rate_multiplier='$RateMultiplier',rate_addition='$txtRateAddition' where  id_tariff='$tariifId'";
 $objtariff_info->UpdateRariffsnamesById($updateData);

echo "Updated Successfully ";


}




?>