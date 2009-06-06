<?php 
require_once("../lib/stock.class.php");

	$REPORT = new Stock();
	
	extract($_POST);

	
	$Data = $REPORT->retriveStockItemByMechine($stkMName);
	$machine_name = $Data[0]['m_name'];
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Machine Wise Report</title>
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
    <td colspan="10" align="center" valign="top">
    
    <table width="50%" height="67" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="26" align="center" valign="top"><h1>Square Textiles Ltd.</h1>
              <p class="style1">Saradaganj, Kashimpur, Gazipur </p>
              <h3>Machine Name : <?php echo $machine_name;?></h3></td>
      </tr>
      <tr>
        <td align="center" valign="top">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr  class="report_item_name">
    <td width="7%" height="35" align="center" valign="middle" class="table1">Sl No. </td>
    <td width="10%" align="center" valign="middle" class="table2">Code No.</td>
    <td width="13%" align="center" valign="middle" class="table2">Stock Name</td>
    <td width="27%" align="center" valign="middle" class="table2">Description</td>
    <td width="8%" align="center" valign="middle" class="table2">Part No.</td>
    <!--<td align="center" valign="middle" class="table2">Item Name </td>-->
    <td width="6%" align="center" valign="middle" class="table2">Unit </td>
    <td width="11%" align="right" valign="middle" class="table2">Current Balance</td>
    <td width="12%" align="right" valign="middle" class="table3">Re-Order Quantity</td>
  </tr>
  <?php
		 
            for ($i=0; $i<count($Data);$i++)
            {
			
				//$DataItemUnit = $REPORT->retriveDailyRecivedItemUnitReports($Data[$i]['stock_item_unit_id']);
			?>
  <tr>
    <td align="center" valign="middle" class="table4"><?php echo $i+1; ?></td>
    <td align="center" valign="middle" class="table5"><?php echo $Data[$i]['stock_code']; ?></td>
    <td align="center" valign="middle" class="table5"><?php echo $Data[$i]['stock_item_name']; ?></td>
    <td align="justify" valign="middle" class="table5"><?php echo $Data[$i]['stock_item_desc']; ?></td>
    <td align="center" valign="middle" class="table5"><?php echo $Data[$i]['stock_part']; ?></td>
    <td align="center" valign="middle" class="table5"><?php echo $Data[$i]['stock_item_unit_name']; ?></td>
   <!-- <td align="center" valign="middle" class="table5"><?php //echo $DataItemUnit[0]['stock_item_unit_name']; ?></td>-->
    <td align="right" valign="middle" class="table5"><?php echo $Data[$i]['stock_item_cl_balance']; ?></td>
    <td align="right" valign="middle" class="table6"><?php echo $Data[$i]['stock_reorder_qty']; ?></td>
    <!--<td align="right" valign="middle" class="table6"><?php //echo $TotalPrice=($Data[$i]['consumptions_qunatity']* $Data[$i]['consumptions_rate']); ?></td>-->
  </tr>
  <?php } ?>

</table>
</body>
</html>
