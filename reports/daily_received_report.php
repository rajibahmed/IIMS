<?php 
require_once("../lib/report.class.php");
require_once("../lib/helper_functions.php");

	$REPORT = new Reports();
	
	
	$Data = $REPORT->retriveDailyRecivedReports();
	$totalPrice=0;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Daily Recieved Report</title>
<link href="../css/report.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src='../js/jquery-1.3.2.min.js' charset="utf-8"></script>
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
  <tr class='report'>
    <td colspan="9" align="center"><table width="50%" height="69" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="top"><h1>Square Textiles Ltd.</h1>          
          <p class="style1">Saradaganj, Kashimpur, Gazipur </p>
          <h3>DAILY RECEIVED REPORT</h3>          <h4>As on Date : <?php echo formatted_date(date("Y-m-d")); ?></h4></td>
      </tr>
      <tr>
        <td align="center" valign="top">&nbsp;</td>
      </tr>
      
    </table></td>
  </tr>
  <tr class="report_item_name">
    <td height="35" align="center" valign="middle" class="table1">MRR No.</td>
    <td align="center" valign="middle" class="table2">Purchase No. </td>
    <td align="center" valign="middle" class="table2">Store Code </td>
    <td align="center" valign="middle" class="table2">Item Name</td>
    <td align="center" valign="middle" class="table2">Item Part Number </td>
    <td align="center" valign="middle" class="table2">Received Quantity </td>
    <td align="center" valign="middle" class="table2">Item Unit </td>
    <td align="right" valign="middle" class="table2">Unit Price </td>
    <td align="right" valign="middle" class="table3">Total Price </td>
  </tr>
  
 		 <?php
		 
            for ($i=0; $i<count($Data);$i++)
            {
			
			?>
			  <tr>
				<td align="center" valign="middle" class="table4">
					<?php echo $Data[$i]['mrr_number']; ?>
				</td>

				<td align="center" valign="middle" class="table5">
					<?php echo $Data[$i]['pm_no']; ?>
				</td>

				<td align="center" valign="middle" class="table5">
					<?php echo $Data[$i]['stock_code']; ?>
				</td>

				<td align="center" valign="middle" class="table5">
					<?php echo $Data[$i]['stock_item_name']; ?>
				</td>

				<td align="center" valign="middle" class="table5">
					<?php echo $Data[$i]['stock_part']; ?>

				</td>

				<td align="center" valign="middle" class="table5">
					<?php echo $Data[$i]['qunty']; ?>
				</td>

				<td align="center" valign="middle" class="table5">
					<?php echo $Data[$i]['stock_item_unit_name']; ?>
				</td>

				<td align="right" valign="middle" class="table5">
					<?php echo $Data[$i]['rate']; ?>
				</td>

				<td align="right" valign="middle" class="table6">
					<?php echo $Data[$i]['amount']; ?>
				</td>

			  </tr>
  
  	<?php $totalPrice=$totalPrice+($Data[$i]['amount']);
		$totalPrice=(float) $totalPrice;
	  } ?>
  
   <tr>
    <td height="35" colspan="8" align="right" valign="middle" class="lastTable">Grand Total : </td>
    <td align="right" valign="middle" class="lastTable"><?php echo $totalPrice;  ?></td>
  </tr> 
</table>
</body>
</html>
