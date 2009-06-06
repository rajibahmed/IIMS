<?php 

require_once("../lib/stock.class.php");

	$Stock = new Stock();
	extract($_POST);
	
	$Data = $Stock->retriveStockItem();
	
	
	
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
    <td colspan="11" align="center" valign="top"><table width="50%" height="68" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="top"><h1>Square Textiles Ltd.</h1>          
          <p class="style1">Saradaganj, Kashimpur, Gazipur </p>
          <h3>GROUP WISE STOCK REPORT</h3>          
          <h4>As on Date : <?php echo date("Y-m-d"); ?></h4></td>
      </tr>
      <tr>
        <td align="center" valign="top">&nbsp;</td>
      </tr>
      
    </table></td>
  </tr>
  <tr class="report_item_name">
    <td width="10%" height="35" align="center" valign="middle" class="table1">Store Code </td>
    <td width="8%" align="center" valign="middle" class="table2">Item Name </td>
    <td width="8%" align="center" valign="middle" class="table2">Part No. </td>
    <td width="15%" align="center" valign="middle" class="table2">Opening Balance </td>
    <td width="8%" align="center" valign="middle" class="table2">Received </td>
    <td width="4%" align="center" valign="middle" class="table2">Issue</td>
    <td width="7%" align="center" valign="middle" class="table2">Rejected</td>
    <td width="14%" align="center" valign="middle" class="table2">Closing Balance </td>
    <td width="4%" align="center" valign="middle" class="table2">Unit</td>
    <td width="12%" align="right" valign="middle" class="table2">Average Price </td>
    <td width="10%" align="right" valign="middle" class="table3">Total Price </td>
  </tr>
  
    <?
   for ($i=0; $i<count($Data);$i++)
            {
			?>
  
  <tr>
    <td align="center" valign="middle" class="table4"><?php echo $Data[$i]['stock_code_m_id']; ?></td>
    <td align="center" valign="middle" class="table4"><?php echo $Data[$i]['stock_item_name']; ?></td>
    <td align="center" valign="middle" class="table4"><?php echo $Data[$i]['stock_part_m_id']; ?></td>
    <td align="center" valign="middle" class="table4"><?php echo $Data[$i]['stock_item_op_balance']; ?></td>
    <td align="center" valign="middle" class="table4"><?php echo $Data[$i]['stock_received_qty']; ?></td>
    <td align="center" valign="middle" class="table4"><?php echo $Data[$i]['stock_issue_qty']; ?></td>
    <td align="center" valign="middle" class="table4"><?php echo $Data[$i]['stock_rejected_qty']; ?></td>
    <td align="center" valign="middle" class="table4"><?php echo $Data[$i]['stock_item_cl_balance']; ?></td>
    <td align="center" valign="middle" class="table4"><?php echo $Data[$i]['stock_item_unit_id']; ?></td>
    <td align="left" valign="middle" class="table4">&nbsp;</td>
    <td align="left" valign="middle" class="table6">&nbsp;</td>
  </tr>
  
  <?php } 
  ?>
  
</table>
</body>
</html>
