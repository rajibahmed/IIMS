<?php 
require_once("../lib/report.class.php");
require_once("../lib/helper_functions.php");

	$REPORT = new Reports();
	
	extract($_POST);

	
	$Data = $REPORT->retriveGroupIssueReports($stock_group,$date_from,$date_to);
	$grandTotalPrice=0;
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Group Issue Report</title>
<link href="../css/report.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {	font-size: 14px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="10" align="center" valign="top"><table width="50%" height="67" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="26" align="center" valign="top"><h1>Square Textiles Ltd.</h1>
              <p class="style1">Saradaganj, Kashimpur, Gazipur </p>
              <h3> GROUP ISSUE REPORT</h3></td>
      </tr>
      <tr>
        <td align="center" valign="top">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr  class="report_item_name">
    <td height="35" align="center" valign="middle" class="table1">Issue No. </td>
    <td align="center" valign="middle" class="table2">Issue Date </td>
    <td align="center" valign="middle" class="table2">M/C Code </td>
    <td align="center" valign="middle" class="table2">Machine Name </td>
    <td align="center" valign="middle" class="table2">Item Code</td>
    <td align="center" valign="middle" class="table2">Item Name </td>
    <td align="center" valign="middle" class="table2">Part No. </td>
    <td align="right" valign="middle" class="table2">Issue Quantity</td>
    <td align="right" valign="middle" class="table2">Unit Price </td>
    <td align="right" valign="middle" class="table3">Total Price </td>
  </tr>
  <?php
		 
            for ($i=0; $i<count($Data);$i++)
            {

			?>
  <tr >
    <td align="center" valign="middle" class="table4"><?php echo $Data[$i]['cm_id']; ?></td>
    <td align="center" valign="middle" class="table5"><?php echo formatted_date($Data[$i]['created_at']); ?></td>
    <td align="center" valign="middle" class="table5"><?php echo $Data[$i]['m_id']; ?></td>
    <td align="center" valign="middle" class="table5"><?php echo $Data[$i]['m_name']; ?></td>
    <td align="center" valign="middle" class="table5"><?php echo $Data[$i]['stock_item_id']; ?></td>
    <td align="center" valign="middle" class="table5"><?php echo $Data[$i]['stock_item_name']; ?></td>
    <td align="center" valign="middle" class="table5"><?php //echo $DataItemUnit[0]['stock_item_unit_name']; ?></td>
    <td align="right" valign="middle" class="table5"><?php echo $Data[$i]['consumptions_qunatity']; ?></td>
    <td align="right" valign="middle" class="table5"><?php echo $Data[$i]['consumptions_rate']; ?></td>
    <td align="right" valign="middle" class="table6"><?php echo $TotalPrice=($Data[$i]['consumptions_qunatity']* $Data[$i]['consumptions_rate']); ?></td>
  </tr>
  <?php $grandTotalPrice=$grandTotalPrice+$TotalPrice;
		$grandTotalPrice=(float) $grandTotalPrice;
	  } ?>
  <tr>
    <td height="35" colspan="9" align="right" valign="middle" class="lastTable">Grand Total : </td>
    <td align="right" valign="middle" class="lastTable"><?php echo $grandTotalPrice;  ?></td>
  </tr>
</table>
</body>
</html>
