<?php  
	require_once ("../../../lib/mrr.class.php");
	require_once ("../../../lib/helper_functions.php");

	$mrr = new MRR;
	
	$mrr_details = $mrr->PrintDetailsOfMrr( (int) $_GET[id]);
	// echo "<pre>";
	// 	var_dump($getPassDetails);
	// echo "</pre>";
	
	$row=count($mrr_details);
	 	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print MRR</title>
<link href="../../../css/report.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
    <td width="25%" height="94" align="center" valign="top">
        <td width="50%" height="26" align="center" valign="top"><h1>Square Textiles Ltd.</h1>
          <p class="style1">Saradaganj, Kashimpur, Gazipur </p>
          <h3>MRR</h3>
    <h4>&nbsp;</h4>		</td>
  <tr>
    <td colspan="2">Consumption No. &nbsp;<?php echo $mrr_details[0]["mrr_number"]; ?></td>
    <td width="9%">&nbsp;</td>
    <td width="27%" align="right">Date:<?php echo formatted_date($mrr_details[0]["mrr_create_date"]); ?></td>
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
        <td valign="top" class="table6" style="border-left:1px solid #CCCCCC;"><?php echo $j+1;?></td>
        <td colspan="2" valign="top" class="table6"><?php echo $mrr_details[$j]["stock_item_name"]; ?></td>
        <td valign="top" class="table6"><?php echo $mrr_details[$j]["stock_item_unit_name"]; ?></td>
        <td valign="top" class="table6" align="center"><?php echo $mrr_details[$j]["stock_code"]; ?></td>
        <td valign="top" class="table6" align="right"><?php echo $mrr_details[$j]["qunty"]; ?></td> 	
        <td valign="top" class="table6" align="right"><?php echo $mrr_details[$j]["rate"]; ?></td>
        <td valign="top" class="table6" align="right"><?php echo $mrr_details[$j]["amount"]; ?></td>
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
