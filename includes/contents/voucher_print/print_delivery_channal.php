<?php  
	require_once ("../../../lib/delivery.class.php");
	require_once ("../../../lib/helper_functions.php");

	$delivery= new Delivery;
	
	$delivery_details = $delivery->PrintDetailsOfDelivery( (int) $_GET[id]);
	// echo "<pre>";
	// 	var_dump($getPassDetails);
	// echo "</pre>";
	 $row=count($delivery_details);
	
	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print Gate Pass</title>
<link href="../../../css/report.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="33%" colspan="2">Challan No. &nbsp;<?php echo $delivery_details[0]["delivery_challan_no"]; ?></td>
    <td width="48%">&nbsp;</td>
    <td width="30%">Date:<?php echo formatted_date($delivery_details[0]["create_date"]); ?></td>
  </tr>
  <tr>
    <td colspan="4">To Mr./Ms : &nbsp;<?php echo $delivery_details[0]["contact_name"] ?> </td>
  </tr>
  
  
  <tr>
    <td>Consignee`s Ref. No. &nbsp;<?php echo $delivery_details[0]["consignee_ref"] ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="33%">Our Ref. No.<?php echo $delivery_details[0]["our_ref_no"] ?></td>
    <td width="33%">&nbsp;</td>
    <td width="48%">&nbsp;</td>
    <td width="30%">&nbsp;</td>
  </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0" align="left" style="padding-top:8px; padding-bottom:20px;">
      <tr Class="report_item_name">
        <td width="6%" align="center" class="table1">Serial #</td>
        <td colspan="2" align="center" class="table2">Item Name</td>
        <td width="6%" align="center" class="table2">Unit</td>
        <td width="14%" align="center" class="table3">Code No.</td>
        <td width="6%" align="center" class="table3">Quantity</td>
        <td width="16%" align="center" class="table3">Gate Pass No.</td>
        <td width="18%" align="center" class="table3">Remarks</td>
      </tr>
      <?php 
	  	for($j=0;$j<$row;$j++)
		
		{
	  ?>
      <tr>
        <td valign="top" class="table6" style="border-left:1px solid #CCCCCC;"><?php echo $j+1;?></td>
        <td colspan="2" valign="top" class="table6"><?php echo $delivery_details[$j]["stock_item_name"]; ?></td>
        <td valign="top" class="table6"><?php echo $delivery_details[$j]["stock_item_unit_name"]; ?></td>
        <td valign="top" class="table6"><?php echo $delivery_details[$j]["stock_code"]; ?></td>
        <td valign="top" class="table6"><?php echo $delivery_details[$j]["qunty"]; ?></td> 	
        <td valign="top" class="table6"><?php echo $delivery_details[$j]["gate_pass_no"]; ?></td>
        <td valign="top" class="table6"><?php echo $delivery_details[$j]["naration"]; ?></td>
      </tr>
      <?php } ?>
      <tr>
        <td colspan="5">Recieved the above in good <br />condition for handling and delivery.</td>
        <td class="table5">&nbsp;</td>
        <td class="table5">&nbsp;</td>
        <td class="table5">&nbsp;</td>
      </tr>
    </table>

<table width="100%" border="0" cellspacing="0" cellpadding="0" align="left" style="padding-top:8px; padding-bottom:20px;">
  <tr>
    <td align="center">Handling Contractor</td>
    <td align="center">&nbsp;</td>
    <td align="center">Goods Recieved by</td>
  </tr>
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
