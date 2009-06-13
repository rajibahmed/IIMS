<?php  
	require_once ("../../../lib/consumption.class.php");
	require_once ("../../../lib/helper_functions.php");

	$consumption = new Consumption;
	
	$consumption_details = $consumption->FindDetailsOfConsumption( (int) $_GET[p_m_id]);
	// echo "<pre>";
	// 	var_dump($getPassDetails);
	// echo "</pre>";
	
	$row=count($consumption_details);
	 	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print Consumption</title>
<link href="../../../css/report.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
    <td width="25%" height="94" align="center" valign="top">
    <td width="50%" height="26" align="center" valign="top"><h1>Square Textiles Ltd.</h1>
          <p class="style1">Saradaganj, Kashimpur, Gazipur </p>
          <h3>ISSUE </h3>
    <h4>&nbsp;</h4>		</td>
  <tr>
    <td colspan="2">Consumption No. &nbsp;<?php echo $consumption_details[0]["consumption_num"]; ?></td>
    <td width="9%">&nbsp;</td>
    <td width="27%">Date:<?php echo formatted_date($consumption_details[0]["created_at"]); ?></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0" align="left" style="padding-top:8px; padding-bottom:20px;">
      <tr Class="report_item_name">
        <td width="6%" align="center" class="table1">Serial #</td>
        <td colspan="2" align="center" class="table2">Item Name</td>
        <td width="6%" align="center" class="table2">Unit</td>
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
        <td colspan="2" valign="top" class="table6"><?php echo $consumption_details[$j]["stock_item_name"]; ?></td>
        <td valign="top" class="table6"><?php echo $consumption_details[$j]["stock_item_unit_name"]; ?></td>
        <td valign="top" class="table6" align="center"><?php echo $consumption_details[$j]["stock_code"]; ?></td>
        <td valign="top" class="table6" align="right"><?php echo $consumption_details[$j]["consumptions_qunatity"]; ?></td> 	
        <td valign="top" class="table6" align="right"><?php echo $consumption_details[$j]["consumptions_rate"]; ?></td>
        <td valign="top" class="table6" align="right"><?php echo $consumption_details[$j]["consumption_value"]; ?></td>
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