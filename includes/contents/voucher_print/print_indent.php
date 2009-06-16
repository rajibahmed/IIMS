<?php  
	require_once ("../../../lib/indent.class.php");
	require_once ("../../../lib/helper_functions.php");

	
	$Indent= new Indent;

	
	
	$Indent = $Indent->PrintDetailsOfIndent( (int) $_GET[id]);
	
	
	$row=count($Indent);
	 	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print MRR</title>
<link href="../../../css/report.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="120%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td width="25%" height="94" align="center" valign="top"></td>
    <td width="50%" height="26" align="center" valign="top"><h1>Square Textiles Ltd.</h1>
        <p class="style1">Saradaganj, Kashimpur, Gazipur </p>
      <h3>Indent Form </h3>
      <h4>&nbsp;</h4></td>
  </tr>
  <tr>
    <td colspan="2">Indent No. &nbsp;<?php echo $Indent[0]["indent_code"]; ?></td>
    <td width="9%">&nbsp;</td>
    <td width="27%" align="right">Date:<?php echo formatted_date($Indent[0]["created_at"]); ?></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">Remarks : <?php echo $Indent[0]["indent_remarks"]; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="120%" border="0" cellspacing="0" cellpadding="0" align="left" style="padding-top:8px; padding-bottom:20px;">
      <tr Class="report_item_name">
        <td width="6%" align="center" class="table1" style="border-right:2px solid #000000;">Serial #</td>
        <td colspan="2" align="center" class="table3">Item Name</td>
        <td width="6%" align="center" class="table3">Unit</td>
        <td width="14%" align="center" class="table3">Code No.</td>
        <td width="13%" align="center" class="table3">Part No. </td>
        <td width="11%" align="center" class="table3">Current stock </td>
        <td width="10%" align="center" class="table3">Reoder Qty </td>
        <td width="8%" align="center" class="table3">Indent Qty </td>
        <td width="12%" align="center" class="table3">ETA</td>
      </tr>
      <?php 
	  	for($j=0;$j<$row;$j++)
		
		{
	  ?>
      <tr>
        <td valign="top" class="table6" style="border-left:1px solid #CCCCCC;"><?php echo $j+1;?></td>
        <td colspan="2" valign="top" class="table6"><?php echo $Indent[$j]["stock_item_name"]; ?></td>
        <td valign="top" class="table6" align="center"><?php echo $Indent[$j]["stock_item_unit_name"]; ?></td>
        <td valign="top" class="table6" align="center"><?php echo $Indent[$j]["stock_code"]; ?></td>
        <td valign="top" class="table6" align="center"><?php echo $Indent[$j]["stock_part"]; ?></td>
        <td valign="top" class="table6" align="right"><?php echo $Indent[$j]["stock_item_cl_balance"]; ?></td>
        <td valign="top" class="table6" align="right"><?php echo $Indent[$j]["stock_reorder_qty"]; ?></td> 	
        <td valign="top" class="table6" align="right"><?php echo $Indent[$j]["indent_qty"]; ?></td>
        <td valign="top" class="table6" align="right"><?php echo formatted_date($Indent[$j]["required_within"]); ?></td>
      </tr>
      <?php } ?>
      
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
 
</table>

</body>
</html>
