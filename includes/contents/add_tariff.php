<?php
require_once('../../lib/defination.class.php');
include('../../lib/forms.class.php');
include ('../../caleder.php');
$resellersId=$_SESSION[resellerid];
$reselltype=$_SESSION[resellertype];
$objtariff_info = new tariff_info();
$usertariff_infoData = $objtariff_info->retriveTariffListByIdresselersIdtariff($resellersId,$reselltype);
$tariffList=count($usertariff_infoData);
?>

<form  id="orderForm1" name="orderForm1" method="post"  onsubmit="return saveFormData(orderForm1)" action="includes/model/add_tarif_actions.php">
 
  <div id="form-contents">
  <table width="60%" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td colspan="2"><div id="saveContent">Tariff</div></td>
    </tr>
    <tr>
      <td width="39%">Diled number</td>
      <td width="61%"><input type="text" name="txtDiledNumber" id="txtDiledNumber" /></td>
    </tr>
    <tr>
      <td>Tariff</td>
      <td><select name="selTariff" id="selTariff">
        <option value="">- choose tariff -</option>
        <option value="">Base tariff</option>
        <?php
			   for($i=0; $i<$tariffList; $i++)
			   {
	   ?>
        <option value="<?php echo $usertariff_infoData[$i]['id_tariff']?>"><?php echo $usertariff_infoData[$i]['description']?></option>
        <?php }?>
      </select></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td>
          <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
      </td>
    </tr>
  </table>
 </div>
</form>
