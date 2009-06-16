<?php  
	require_once ("../../../lib/qc.class.php");
	require_once ("../../../lib/helper_functions.php");

	$QC= new QC;
	
	
	$QC = $QC->PrintDetailsOfQC( (int) $_GET[id]);
	
	$row=count($QC);
	 	

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
        <td height="26" align="center" valign="top"><p><b>QUALITY CERTIFICATE</b></p></td>
    </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="10%">&nbsp;</td>
    <td width="48%">&nbsp;</td>
    <td width="25%">&nbsp;</td>
    <td width="17%">Q.C. No. <?php echo $QC[0]["qc_number"]; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Date: <?php echo formatted_date($QC[0]["qc_create_date"]); ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">Supplier M/s <?php echo $QC[0]["sup_name"]; ?></td>
  </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding-bottom:20px; padding-top:5px;">
  <tr>
    <td>To</td>
  </tr>
  <tr>
    <td>The head of the indenting department / section ................................... Please check the quality, size, country of origin, suitability etc. of the following materials recieved in the general store on ......................... against purchase order no. <?php echo $QC[0]["pm_no"]; ?> date <?php echo formatted_date($QC[0]["date"]); ?>  and let me have your comments regarding its/their correctness and acceptability or otherwise, so that we can receive the same formally through a material receiving report.</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">Store In-charge</td>
  </tr>
</table>


<table width="100%" border="0" cellspacing="0" cellpadding="0" align="left" style="padding-top:8px; padding-bottom:20px;">
<tr Class="report_item_name">
        <td width="6%" align="center" class="table1" style="border-right:2px solid #000000;">Serial #</td>
        <td colspan="2" align="center" class="table3">MRR No.</td>
       
    <td width="31%" align="center" class="table3">Item Name</td>
    <td width="8%" align="center" class="table3">Quantity</td>
    <td width="18%" align="center" class="table3">Value</td>
      </tr>
      <?php 
	  	for($j=0;$j<$row;$j++)
		
		{
	  ?>
      <tr>
        <td align="center" valign="top" class="table6" style="border-left:1px solid #CCCCCC;"><?php echo $j+1;?></td>
        <td colspan="2" valign="top" class="table6"><?php echo $QC[$j]["mrr_number"]; ?></td>
       
        <td valign="top" class="table6" align="center"><?php echo $QC[$j]["stock_item_name"]; ?></td>
        <td valign="top" class="table6" align="center"><?php echo $QC[$j]["qunty"]; ?></td> 	
        <td valign="top" class="table6" align="center"><?php echo $QC[$j]["amount"]; ?></td>
  </tr>
      <?php } ?>
      <tr>
        <td colspan="5">&nbsp;</td>
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
    <td colspan="2" align="left">a) Checked and found correct, May be received</td>
    <td align="right">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="left">b) All not found in order, may be received as per my comments in the remarks column above</td>
    <td align="right">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="left">c) Not found in order and not accpected, rejected.</td>
    <td align="right">&nbsp;</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td height="50" align="center">&nbsp;</td>
    <td align="right">&nbsp;</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="center"><h1>REASONS (DETAILS):-</h1></td>
    <td align="right">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%" align="left">&nbsp;</td>
    <td width="33%" align="center">&nbsp;</td>
    <td width="33%" align="right"><p>Hd/of the Indenting <br />deptt/Section.</p>
    </td>
  </tr>
</table>

</body>
</html>
