<?php 

require_once("../lib/stock.class.php");

	$Stock = new Stock();
	extract($_POST);
	
	$Data = $Stock->retriveStockItemByPartByCode();
	
	
	
	$grandTotalPrice=0;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../css/report.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
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
    <td colspan="4" align="center" valign="top"><table width="50%" height="68" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="top"><h1>Square Textiles Ltd.</h1>          
          <p class="style1">Saradaganj, Kashimpur, Gazipur </p>
          <h3>STOCK ITEM  REPORT</h3></td>
      </tr>
      
      <tr>
        <td align="center" valign="top">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr class="report_item_name">
    <td width="32%" height="35" align="center" valign="middle" class="table2">Item Name </td>
	<td width="16%" align="center" valign="middle" class="table2">Code No. </td>
    <td width="16%" align="center" valign="middle" class="table2">Part No. </td>
    <td width="23%" align="center" valign="middle" class="table2">Opening Balance </td>
    <td width="13%" align="center" valign="middle" class="table2">Closing Balance </td>
  </tr>
  
    <?
   for ($i=0; $i<count($Data);$i++)
            {
			?>
  
  <tr>
    <td align="left" valign="middle" class="table5"><?php echo $Data[$i]['stock_item_name']; ?></td>
	<td align="center" valign="middle" class="table5"><?php echo $Data[$i]['stock_code']; ?></td>
    <td align="center" valign="middle" class="table5"><?php echo $Data[$i]['stock_part']; ?></td>
    <td align="center" valign="middle" class="table5"><?php echo $Data[$i]['stock_item_op_balance']; ?></td>
    <td align="center" valign="middle" class="table5"><?php echo $Data[$i]['stock_item_cl_balance']; ?></td>
  </tr>
  
  <?php } 
  ?>
</table>
</body>
</html>
