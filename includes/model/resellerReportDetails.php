<?php
require_once('../../lib/defination.class.php');
include('../../lib/forms.class.php');
include ('../../caleder.php');
$resellersId=$_SESSION[resellerid];
$reselltype=$_SESSION[resellertype];

$btnResellerDetails=$_POST[btnResellerDetails];
if(isset($btnResellerDetails))
{
	$txtLogin =$_POST[txtLogin];
	$txtPassword =$_POST[txtPassword];
	$selTariff =$_POST[selTariff];
	$selPeriod =$_POST[selPeriod];
	$txt_Start_date =$_POST[txt_Start_date];
	$txt_end_date =$_POST[txt_end_date];
	$selResellerId =$_POST[selResellerId];
	$radByPrefix =$_POST[radByPrefix];
	$radByCountry =$_POST[radByCountry];
	$radNone=$_POST[radNone];
	
	$objtariff_info = new tariff_info();
	$usertariff_infoData = $objtariff_info->retriveTariffListByIdresselersIdtariff($resellersId,$reselltype);
	$tariffList=count($usertariff_infoData);

}
?>
<table width="100%" border="0" cellspacing="0" cellpadding="3">
      <tr>
        <td width="6%" bgcolor="#2078AC" class="resulttitle">SL.</td>
        <td width="8%" bgcolor="#2078AC" class="resulttitle">Login</td>
        <td width="13%" bgcolor="#2078AC" class="resulttitle">Password</td>
        <td width="7%" bgcolor="#2078AC" class="resulttitle">Tarif</td>
        <td width="15%" bgcolor="#2078AC" class="resulttitle">Client Cost</td>
        <td width="15%" bgcolor="#2078AC" class="resulttitle">Revenue res.</td>
        <td width="20%" bgcolor="#2078AC" class="resulttitle">Profit </td>
        <td width="8%" bgcolor="#2078AC" class="resulttitle">Prefix</td>
        <td width="8%" bgcolor="#2078AC" class="resulttitle">Tariff</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="2"><strong>Summary </strong></td>
        <td colspan="2">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="2">Total cost: </td>
        <td colspan="2">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="2">Total reseller cost: </td>
        <td colspan="2">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="2">Total profit: </td>
        <td colspan="2">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>