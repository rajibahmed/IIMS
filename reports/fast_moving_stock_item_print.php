<?php 
require_once("../lib/report.class.php");

	$REPORT = new Reports();
	
	extract($_POST);

	
	$Data = $REPORT->retriveFastMovingStockItemReports($date_from,$date_to);
	$grandTotalPrice=0;
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
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
    <td colspan="6" align="center" valign="top"><table width="50%" height="67" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="26" align="center" valign="top"><h1>Square Textiles Ltd.</h1>
              <p class="style1">Saradaganj, Kashimpur, Gazipur </p>
              <h3> FAST MOVING ITEM REPORT</h3></td>
      </tr>
      <tr>
        <td align="center" valign="top">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr  class="report_item_name">
    <td height="35" align="center" valign="middle" class="table1">Store Code </td>
    <td align="center" valign="middle" class="table2">Item Name</td>
    <td align="center" valign="middle" class="table2">Item Part No. </td>
    <td align="center" valign="middle" class="table2">Item Specification  </td>
    <td colspan="2" align="center" valign="middle" class="table3">Stock Quantity </td>
  </tr>
  <?php
		 
            for ($i=0; $i<count($Data);$i++)
            {
			
				//$DataItemUnit = $REPORT->retriveDailyRecivedItemUnitReports($Data[$i]['stock_item_unit_id']);
			?>
  <tr >
    <td align="center" valign="middle" class="table4"><?php echo $Data[$i]['stock_item_id']; ?></td>
    <td align="center" valign="middle" class="table5"><?php echo $Data[$i]['stock_item_name']; ?></td>
    <td align="center" valign="middle" class="table5"><?php echo $Data[$i]['stock_part_m_id']; ?></td>
    <td align="center" valign="middle" class="table5"><?php echo $Data[$i]['stock_item_desc']; ?></td>
    <td colspan="2" align="center" valign="middle" class="table6"><?php echo $Data[$i]['stock_item_cl_balance']; ?></td>
  </tr>
  <?php $grandTotalPrice=$grandTotalPrice+$TotalPrice;
		$grandTotalPrice=(float) $grandTotalPrice;
	  } ?>
</table>
</body>
</html>