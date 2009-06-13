<?php  
	require_once ("../../../lib/gatePass.class.php");
	require_once ("../../../lib/helper_functions.php");

	$Gatepass =new GatePass;
	$getPassDetails = $Gatepass->FindDetailsOfGatePass( (int) $_GET[p_m_id]);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print Gate Pass</title>
<link href="../../../css/report.css" rel="stylesheet" type="text/css" />
<style>
.getPass td{
	text-align:center;
	border: #999999 1px solid;
}
</style>
</head>

<body>
<table width="50%" height="67" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="26" align="center" valign="top"><h1>Square Textiles Ltd.</h1>
          <p class="style1">Saradaganj, Kashimpur, Gazipur </p></td>
        </tr>
        <tr>
        <td height="26" align="center" valign="top"><p><b>Gate Pass</b></p></td>
    </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="33%">Gate Pass No. <?php echo $getPassDetails[0][gate_pass_no]; ?></td>
    <td width="48%">&nbsp;</td>
    <td width="19%">Date:<?php echo formatted_date($getPassDetails[0][create_date]); ?></td>
  </tr>
  <tr>
    <td colspan="3">Permission is hereby given to Mr./Ms :<?php echo $getPassDetails[0][contact_name] ?> </td>
  </tr>
  <tr>
    <td colspan="3">Address :<?php echo $getPassDetails[0][contact_add] ?>&nbsp;&nbsp;
    to take out the following materials and beconfirmed that the receiving person is responsible for returning of said items within stipulated period</td>
  </tr>
  
  <tr>
    <td colspan="2" width="70%">&nbsp;</td>
    <td width="30%">Order No. :<?php echo $getPassDetails[0][consumption_num] ?></td>
  </tr>
</table>

<table class='getPass' width="100%" border="0" cellspacing="0" cellpadding="0" align="left" style="padding-top:8px; padding-bottom:20px;">
      <tr Class="report_item_name">
        <td width="8%" class="table1">Serial #</td>
        <td width="13%" class="table1">Item Name</td>
       <td width="8%" class="table2">Unit</td>
        <td width="13%" class="table2">Part No.<br />
        /M/C Type</td>
        <td width="8%" align="center" class="table2">ST. Code</td>
        <td width="19%" align="center" class="table3">Issued Quantity</td>
        <td width="31%" align="center" class="table3">Remarks</td>
  </tr>
	<?php $i=1; ?>
	<?php foreach($getPassDetails as $getPass): ?>
      <tr>
        <td ><div ><?php echo $i; $i++; ?></div></td>
        <td ><div ><?php echo $getPass[stock_item_name] ?></div></td>
        <td ><div ><?php echo $getPass[stock_item_unit_name] ?></div></td>
        <td ><div ><?php echo $getPass[stock_code] ?></div></td>
        <td ><div ><?php echo $getPass[stock_part] ?></div></td>
        <td ><div ><?php echo $getPass[qunty] ?></div></td>
        <td ><div ><?php echo $getPass[naration] ?></div></td>
      </tr>
	<?php endforeach ?>

    </table>

<table width="100%" border="0" cellspacing="0" cellpadding="0" align="left" style="padding-top:8px; padding-bottom:20px;">

  <tr>
    <td class="getPass">&nbsp;</td>
    <td align="right" class="getPass">&nbsp;</td>
    <td colspan="2" class="table5">&nbsp;</td>
    <td class="table5">Materials Received By</td>
    <td class="table5">&nbsp;</td>
    <td width="33%" align="left">Prepared By</td>
    <td width="33%" align="center">Store-In-charge</td>
    <td width="33%" align="right">Authorised</td>
  </tr>
</table>

</body>
</html>
