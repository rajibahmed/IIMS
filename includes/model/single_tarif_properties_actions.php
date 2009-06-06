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
$userBaseTariff_infoData = $objtariff_info->retriveSingleTariffById($param);

if(isset($btn_submit))
{

$txtTarifname=$_POST['txtTarifname'];
$txtPrefix=$_POST['txtPrefix'];
$txtVoiceRate=$_POST['txtVoiceRate'];
$txtGperiod=$_POST['txtGperiod'];
$txtMintime=$_POST['txtMintime'];
$txtres=$_POST['txtres'];
$RateMultiplier=$_POST['RateMultiplier'];
$txtRateAddition=$_POST['txtRateAddition'];
$from_date=$_POST['from_date'];
$to_date=$_POST['to_date'];
$from_hr=$_POST['from_hr'];
$to_hr=$_POST['to_hr'];
$to_hr1=substr($to_hr,0,2);
 $to_hr2=$to_hr1."00";
$idTariff=$_POST['idTariff'];

 $getData = "'','$idTariff','$txtPrefix','$txtTarifname','$txtVoiceRate','$to_date','$from_date','$from_hr','$to_hr2','$txtGperiod','$txtMintime','$txtres','$RateMultiplier','$txtRateAddition'";
		
		//tarif insert operation
		$objtariff_info->insertSingleTariffInfo($getData);
		echo "Data Save Successfully";

}





	
    
	
if($param)
{	
	
?>	


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
      <td width="61%"><input type="text" name="txtTarifname" id="txtTarifname" value="<?php echo $userBaseTariff_infoData[0]['description']?>" /></td>
    </tr>
    <tr>
      <td>Prefix <br /></td>
      <td><input name="txtPrefix" type="text" id="txtPrefix" value="<?php echo $userBaseTariff_infoData[0]['prefix']?>" /></td>
    </tr>
    <tr>
      <td>Voice rate <br /></td>
      <td><input name="txtVoiceRate" type="text" id="txtVoiceRate" value="<?php echo $userBaseTariff_infoData[0]['voice_rate']?>" /></td>
    </tr>
    <tr>
      <td>Grace period <br /></td>
      <td><input name="txtGperiod" type="text" id="txtGperiod" value="<?php echo $userBaseTariff_infoData[0]['grace_period']?>" /></td>
    </tr>
    <tr>
      <td>Minimal time</td>
      <td><input name="txtMintime" type="text" id="txtMintime" value="<?php echo $userBaseTariff_infoData[0]['minimal_time']?>" /></td>
    </tr>
    <tr>
      <td>Resolution <br /></td>
      <td><input name="txtres" type="text" id="txtres" value="<?php echo $userBaseTariff_infoData[0]['resolution']?>" /></td>
    </tr>
    <tr>
      <td>Rate multiplier</td>
      <td><input name="chkRetMultiplier" type="checkbox" id="chkRetMultiplier" />
      <input name="RateMultiplier" type="text" id="RateMultiplier" value="<?php echo $userBaseTariff_infoData[0]['rate_multiplier']?>" /></td>
    </tr>
    <tr>
      <td>Rate Addition</td>
      <td><input name="chkRateAddition" type="checkbox" id="chkRateAddition" />
      <input name="txtRateAddition" type="text" id="txtRateAddition" value="<?php echo $userBaseTariff_infoData[0]['rate_addition']?>" /></td>
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
          	 <option value="0" <?php if($userBaseTariff_infoData[0]['from_day']==0){echo "selected";}?>>Sunday</option>
            <option value="1" <?php if($userBaseTariff_infoData[0]['from_day']==1){echo "selected";}?>>Monday</option>
            <option value="2" <?php if($userBaseTariff_infoData[0]['from_day']==2){echo "selected";}?>>Tuesday</option>
            <option value="3" <?php if($userBaseTariff_infoData[0]['from_day']==3){echo "selected";}?>>wednesday</option>
            <option value="4" <?php if($userBaseTariff_infoData[0]['from_day']==4){echo "selected";}?>>Thursday</option>
            <option value="5" <?php if($userBaseTariff_infoData[0]['from_day']==5){echo "selected";}?>>Friday</option>
            <option value="6" <?php if($userBaseTariff_infoData[0]['from_day']==6){echo "selected";}?>>Saturday</option>
           
          </select>          </td> 
          <td colspan="2">to 
            <select name="to_date" id="to_date">
              <option value="0" <?php if($userBaseTariff_infoData[0]['to_day']==0){echo "selected";}?>>Sunday</option>
              <option value="1" <?php if($userBaseTariff_infoData[0]['to_day']==1){echo "selected";}?>>Monday</option>
              <option value="2" <?php if($userBaseTariff_infoData[0]['to_day']==2){echo "selected";}?>>Tuesday</option>
              <option value="3" <?php if($userBaseTariff_infoData[0]['to_day']==3){echo "selected";}?>>wednesday</option>
              <option value="4" <?php if($userBaseTariff_infoData[0]['to_day']==4){echo "selected";}?>>Thursday</option>
              <option value="5" <?php if($userBaseTariff_infoData[0]['to_day']==5){echo "selected";}?>>Friday</option>
              <option value="6" <?php if($userBaseTariff_infoData[0]['to_day']==6){echo "selected";}?>>Saturday</option>
            </select></td>
          </tr>
        <tr>
          <td>From hour</td>
          <td><input name="from_hr" type="text" id="from_hr" value="<?php echo $userBaseTariff_infoData[0]['from_hour']?>"" /></td>
          <td width="7%">to</td>
          <td width="43%"><input name="to_hr" type="text" id="to_hr" value="<?php echo $userBaseTariff_infoData[0]['to_hour']?>"" /><input name="idTariff" type="hidden" value="<?php echo $param ?>" /></td>
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
      <td><input type="submit" name="btn_Update" id="btn_Update" value="Submit" /></td>
    </tr>
  </table>
</form>

<? } 
if(isset($btn_Update))

{

$txtTarifname=$_POST['txtTarifname'];
$txtPrefix=$_POST['txtPrefix'];
$txtVoiceRate=$_POST['txtVoiceRate'];
$txtGperiod=$_POST['txtGperiod'];
$txtMintime=$_POST['txtMintime'];
$txtres=$_POST['txtres'];
$RateMultiplier=$_POST['RateMultiplier'];
$txtRateAddition=$_POST['txtRateAddition'];
$from_date=$_POST['from_date'];
$to_date=$_POST['to_date'];
$from_hr=$_POST['from_hr'];
$to_hr=$_POST['to_hr'];
$to_hr1=substr($to_hr,0,2);
 $to_hr2=$to_hr1."00";
$idTariff=$_POST['idTariff'];

 $idTariff = $_POST['idTariff'];

$updateData= "set prefix='$txtPrefix',description='$txtTarifname',voice_rate='$txtVoiceRate',from_day='$from_date',to_day='$to_date',from_hour='$from_hr',to_hour='$to_hr2',grace_period='$txtGperiod',minimal_time='$txtMintime',resolution='$txtres',rate_multiplier='$RateMultiplier',rate_addition='$txtRateAddition' where  id_tariffs_key='$idTariff'";
 $objtariff_info->UpdateSingleTeriffById($updateData);

echo "Updated Successfully ";


}




?>