<?php 
	require_once ("../../../lib/purchaseOrder.class.php");
	require_once ("../../../lib/helper_functions.php");

	$P_order = new Purchaseorder;
	
	$P_orders = $P_order->PrintPurchaseOrderById( (int) $_GET[id]);
	// echo "<pre>";
	// 	var_dump($getPassDetails);
	// echo "</pre>";
	
	$row=count($P_orders);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print Purchase Order</title>
<style type="text/css">
.style1 {	
font-size: 14px;
font-weight: bold;
}

.font_content {
font-size:10px;
}

.style11 {
font-size:12px;
font-weight:bold;
}

p{
font-size:12px;
font-weight:bold;
}
</style>
<link href="../../../css/report.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="100%" border="0" class="form" cellpadding="0" cellspacing="0">
    <tr>
        <th colspan="7">
        <table width="50%" height="67" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="26" align="center" valign="top"><h1>Square Textiles Ltd.</h1>
          <p class="style1">Saradaganj, Kashimpur, Gazipur </p></td>
        </tr>
        <tr>
        <td height="26" align="center" valign="top"><p><b>Purchase Order</b></p></td>
    </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="3" class="table_border">
  <tr>
    <td>
    <!--1st Table Starts-->
    <!--<span class="table_border">-->
    <table width="100%" cellpadding="4" cellspacing="0">
      <tr>
        <td width="21%" align="left" class="table4">PO No:</td>
        <td width="17%" class="table4"><?php echo $P_orders[0]["pm_no"];?></td>
        <td width="35%" rowspan="2" class="table4">&nbsp;</td>
        <td width="14%" class="table6" style="border-left:1px solid #CCCCCC;">Date : </td>
        <td width="13%" class="table6"><?php echo formatted_date($P_orders[0]["date"]); ?></td>
      </tr>
      <tr>
        <td align="left" class="table4_1">Indent/Factory Ref:</td>
        <td class="table4_1"><?php echo $P_orders[0]["indent_code"];?> </td>
        <td class="table4_2" style="border-left:1px solid #CCCCCC;">&nbsp;</td>
        <td class="table4_2">&nbsp;</td>
      </tr>
    </table>
    <!--</span>-->
    <!--1st Table Ends-->
    
    <!--2nd Table Starts-->
    <table width="55%" border="0" cellspacing="0" cellpadding="4" align="left" style="padding-top:20px; padding-bottom:12px;">
      <tr>
        <td width="35%" align="left" class="table4">Suppleirs Name :</td>
        <td width="65%" class="table4" style="border-right:1px solid #CCCCCC;"><?php echo $P_orders[0]["sup_name"];?></td>
      </tr>
      <tr>
        <td align="left" class="table4_1">Address :</td>
        <td rowspan="2" class="table4_1" style="border-right:1px solid #CCCCCC;"><?php echo $P_orders[0]["sup_address"];?></td>
      </tr>
      <tr align="left" class="table4_2">
        <td class="table4_1">&nbsp;</td>
        </tr>
      <tr>
        <td align="left" class="table4_1">Attention :</td>
        <td class="table4_1"  style="border-right:1px solid #CCCCCC;">&nbsp;</td>
      </tr>
    </table>
    
    <!--2nd Table Ends-->
    <!--Plase Deliver Starts-->
        <p style="width:600px;" align="left"><!--Plase Deliver Ends-->
    <!--3rd Table Starts-->
    <table width="90%" border="0" cellspacing="0" cellpadding="0" align="left" style="padding-top:8px; padding-bottom:20px;">
      <tr>
        <td colspan="8" align="left"><span style="width:600px;">Please Deliver us the following Products/Service/Equipments as per agreed terms &amp; Conditions: </span></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
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
        <td colspan="2" valign="top" class="table6"><?php echo $P_orders[$j]["stock_item_name"]; ?></td>
        <td valign="top" class="table6"><?php echo $P_orders[$j]["stock_item_unit_name"]; ?></td>
        <td valign="top" class="table6" align="center"><?php echo $P_orders[$j]["stock_code"]; ?></td>
        <td valign="top" class="table6" align="right"><?php echo $P_orders[$j]["qunty"]; ?></td> 	
        <td valign="top" class="table6" align="right"><?php echo $P_orders[$j]["rate"]; ?></td>
        <td valign="top" class="table6" align="right"><?php echo $P_orders[$j]["amount"]; ?></td>
      </tr>
      <?php } ?>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="6">Total</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="right">In Words :</td>
        <td colspan="6" class="table5" style="border-left:1px solid #CCCCCC;border-right:1px solid #CCCCCC;">&nbsp;</td>
        </tr>
    </table>
    <!--3rd Table Ends-->
    
    <!--4th Table Starts-->
    <table width="80%" border="0" align="left" style="padding-top:8px; padding-bottom:20px;" cellpadding="0" cellspacing="0">
      <tr>
        <td align="left" class="table4">&nbsp;Delivery Place</td>
        <td class="table4" style="border-right:1px solid #CCCCCC;">H/O, Corporate Office, Factory address</td>
        </tr>
      <tr>
        <td align="left" class="table4_1">&nbsp;Delivery date</td>
        <td class="table4_1_right">&nbsp;</td>
        </tr>
      <tr>
        <td align="left" class="table4_1">&nbsp;Contact Person</td>
        <td class="table4_1_right">&nbsp;</td>
        </tr>
      <tr>
        <td align="left" class="table4_1">&nbsp;Designation &amp; Cell No.</td>
        <td class="table4_1_right">&nbsp;</td>
        </tr>
      <tr>
        <td align="left" class="table4_1">&nbsp;Terms &amp; Conditions</td>
        <td rowspan="2" align="center" class="table4_1_right"><?php echo $P_orders[0]["delivery_terms"]; ?> </td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        </tr>
    </table>
    <!--4th Table Ends-->
    
    <!--5th Table Starts-->
    <table width="100%" border="0" cellspacing="0" cellpadding="0" align="left" style="margin-top:50px; margin-bottom:20px; float:left;">
  <tr>
    <td width="25%">Thanks &amp; Regards</td>
    <td width="50%">&nbsp;</td>
    <td width="25%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td rowspan="2">&nbsp;</td>
    <td rowspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Authorised Signature</td>
    <td>&nbsp;</td>
    <td>Authorised Signature</td>
  </tr>
</table>
    <!--5th Table Ends-->
    
    </td>
  </tr>
  <tr>
    <td align="center" class="table5">PS: Please deliver by 8AM to 5PM</td>
  </tr>
</table>

</body>
</html>
