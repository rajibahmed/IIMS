<?php  
	require_once ("../../../lib/stkReturn.class.php");
	require_once ("../../../lib/helper_functions.php");

	$StockReturn =new StockReturn;
	
	$stock_returns = $StockReturn->PrintDetailsOfStockReturn( (int) $_GET[id]);
	// echo "<pre>";
	// 	var_dump($getPassDetails);
	// echo "</pre>";
	
	$row=count($stock_returns);
	 	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print Stock Return</title>
<link href="../../../css/report.css" rel="stylesheet" type="text/css" />
</head>

<body>

<table width="50%" height="67" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="26" align="center" valign="top"><h1>Square Textiles Ltd.</h1>
          <p class="style1">Saradaganj, Kashimpur, Gazipur </p></td>
        </tr>
        <tr>
        <td height="26" align="center" valign="top"><p><b>Stock Return</b></p></td>
    </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
  
  <tr>
    <td colspan="2">Consumption No. &nbsp;<?php echo $stock_returns[0]["stock_return_no"]; ?></td>
    <td width="9%">&nbsp;</td>
    <td width="27%" align="right">Date:<?php echo formatted_date($stock_returns[0]["create_date"]); ?></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0" align="left" style="padding-top:8px; padding-bottom:20px;">
<tr Class="report_item_name">
        <td width="6%" align="center" class="table1" style="border-right:2px solid #000000;">Serial #</td>
        <td colspan="2" align="center" class="table3">Item Name</td>
        <td width="6%" align="center" class="table3">Unit</td>
        <td width="14%" align="center" class="table3">Code No.</td>
        <td width="6%" align="center" class="table3">Quantity</td>
        <td width="16%" align="center" class="table3">Rate</td>
        <td width="18%" align="center" class="table3">Value</td>
      </tr>
      <?php 
	  	for($j=0;$j<$row;$j++)
		
		{
	  ?>
      <tr>
        <td align="center" valign="top" class="table6" style="border-left:1px solid #CCCCCC;"><?php echo $j+1;?></td>
        <td colspan="2" valign="top" class="table6"><?php echo $stock_returns[$j]["stock_item_name"]; ?></td>
        <td align="center" valign="top" class="table6"><?php echo $stock_returns[$j]["stock_item_unit_name"]; ?></td>
        <td valign="top" class="table6" align="center"><?php echo $stock_returns[$j]["stock_code"]; ?></td>
        <td valign="top" class="table6" align="center"><?php echo $stock_returns[$j]["qunty"]; ?></td> 	
        <td valign="top" class="table6" align="center"><?php echo $stock_returns[$j]["rate"]; ?></td>
        <td valign="top" class="table6" align="center"><?php echo $stock_returns[$j]["amount"]; ?></td>
  </tr>
      <?php } ?>
      <tr>
        <td colspan="5">&nbsp;</td>
        <td class="table5">&nbsp;</td>
        <td class="table5">&nbsp;</td>
        <td class="table5">&nbsp;</td>
      </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0" align="left" style="padding-top:8px; padding-bottom:20px;">
  <tr>
    <td align="left">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="right">&nbsp;</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="right">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%" align="left">Prepared By</td>
    <td width="33%" align="center">Store-In-charge</td>
    <td width="33%" align="right">Authorised</td>
  </tr>
</table>

</body>
</html>
