<?php 
require_once("../lib/report.class.php");
require_once("../lib/helper_functions.php");
	$REPORT = new Reports();
	
	
	$Data = $REPORT->retriveRawItemReport();
	if(empty($Data)){
		echo "No data";
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Daily Issue Report</title>
<link href="../css/report.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	border:#999999 1px solid;
}
*{
	font-family:Verdana, Arial, Helvetica, sans-serif;
}
body{
	width:120%;
}
-->
</style>
</head>
<body>
<table width="150%"  border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td height="94" align="center" valign="top"><table width="50%" height="67" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="26" align="center" valign="top"><h3>Square Textiles Ltd.</h3>
        <p>Saradaganj, Kashimpur, Gazipur </p>
            <h5>RAW ITEM REPORT</h5>
              <h5>Date : <?php echo date("Y-m-d"); ?></h5></td>
      </tr>
      <tr>
        <td height="20" align="center" valign="top"></td>
      </tr>
      <tr>
        <td align="center" valign="top"></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="94" align="center" valign="top"><table border="0" align="center" cellpadding="5" cellspacing="0">
      <tr class="report_item_name">
        <td width="2%" height="57" rowspan="2" align="center" valign="middle" class="style1"><div align="center">SL</div></td>
        <td width="4%" rowspan="2" align="center" valign="middle" class="style1"><div align="center">Code</div></td>
        <td width="4%" rowspan="2" align="center" valign="middle" class="style1"><div align="center">Date </div></td>
        <td width="5%" rowspan="2" align="center" valign="middle" class="style1"><div align="center">Origin </div></td>
        <td width="5%" rowspan="2" align="center" valign="middle" class="style1"><div align="center">Length</div></td>
        <td width="3%" rowspan="2" align="center" valign="middle" class="style1"><div align="center">Lot</div></td>
        <td width="4%" rowspan="2" align="center" valign="middle" class="style1"><div align="center">Avgt. </div></td>
        <td width="3%" rowspan="2" align="right" valign="middle" class="style1"><div align="center">LC</div></td>
        <td width="6%" rowspan="2" align="right" valign="middle" class="style1"><div align="center">Supplier </div></td>
        <td colspan="2" align="right" valign="middle" bgcolor="#D6D6D6" class="style1"><strong>Opening</strong></td>
        <td colspan="2" align="right" valign="middle" bgcolor="#D6D6D6" class="style1"><strong>Receiving</strong></td>
        <td colspan="4" align="right" valign="middle" bgcolor="#D6D6D6" class="style1"><div align="center"><strong>Consumption</strong></div></td>
        <td width="6%" align="right" valign="middle" bgcolor="#D6D6D6" class="style1"><strong>Transfer</strong></td>
        <td colspan="2" align="right" valign="middle" bgcolor="#D6D6D6" class="style1"><strong>Closing</strong></td>
        <td width="6%" align="right" valign="middle" bgcolor="#D6D6D6" class="style1">Location</td>
        <td width="3%" align="right" valign="middle" bgcolor="#D6D6D6" class="style1">QA</td>
      </tr>
      <tr class="report_item_name">
        <td width="4%" align="right" valign="middle" class="style1">Bale</td>
        <td width="6%" align="right" valign="middle" class="style1">Kg</td>
        <td width="2%" align="right" valign="middle" class="style1">Bale</td>
        <td width="6%" align="right" valign="middle" class="style1">Kg</td>
        <td width="4%" align="right" valign="middle" class="style1">Unit-I</td>
        <td width="4%" align="right" valign="middle" class="style1">unit-II</td>
        <td width="8%" align="right" valign="middle" class="style1">Rotor</td>
        <td width="7%" align="right" valign="middle" class="style1">Unit-III</td>
        <td width="6%" align="right" valign="middle" class="style1">&nbsp;</td>
        <td width="3%" align="right" valign="middle" class="style1">Bale</td>
        <td width="5%" align="right" valign="middle" class="style1">Kg</td>
        <td width="6%" align="right" valign="middle" class="style1">&nbsp;</td>
        <td width="3%" align="right" valign="middle" class="style1">&nbsp;</td>
      </tr>
      <?php
		 
            for ($i=0; $i<count($Data);$i++)
            {
            	
			
						
			?>
      <tr>
        <td align="center" valign="middle" class="table4"><?php echo $i+1; ?> </td>
        <td align="center" valign="middle" class="table5"><?php echo $Data[$i]['stock_code_m_id']; ?> </td>
        <td align="center" valign="middle" class="table5"><?php echo $Data[$i]['date']; ?> </td>
        <td align="center" valign="middle" class="table5" ><?php echo $Data[$i]['stock_item_grp_id']; ?> </td>
        <td align="center" valign="middle" class="table5"><?php echo $Data[$i]['length']; ?> </td>
        <td align="center" valign="middle" class="table5"><?php echo $Data[$i]['lot']; ?> </td>
        <td align="center" valign="middle" class="table5"><?php echo $Data[$i]['stock_part']; ?> </td>
        <td align="right" valign="middle"  class="table5"><?php echo $Data[$i]['lc'];  ?> </td>
        <td align="right" valign="middle" class="table5"><?php echo $Data[$i]['supplier']; ?> </td>
        <td align="right" valign="middle" class="table6"><?php echo $Data[$i]['stock_item_op_balance']; ?></td>
        <td align="right" valign="middle" class="table6"><?php  echo $Data[$i]['stock_item_op_balance'] * $Data[$i]['unit_relation2'] ; ?></td>
        <td align="right" valign="middle" class="table6"><?php echo $Data[$i]['stock_received_qty']; ?></td>
        <td align="right" valign="middle" class="table6"><?php  echo $Data[$i]['stock_received_qty'] * $Data[$i]['unit_relation2'] ; ?></td>
        <td align="right" valign="middle" class="table6"><?php if ($Data[$i]['issue_location']=='Unit-I') echo $Data[$i]['stock_issue_qty']; ?></td>
        <td align="right" valign="middle" class="table6"><?php if ($Data[$i]['issue_location']=='Unit-II') echo $Data[$i]['stock_issue_qty']; ?></td>
        <td align="right" valign="middle" class="table6"><?php if ($Data[$i]['issue_location']=='Rotor') echo $Data[$i]['stock_issue_qty']; ?></td>
        <td align="right" valign="middle" class="table6"><?php if ($Data[$i]['issue_location']=='Unit-III') echo $Data[$i]['stock_issue_qty']; ?></td>
        <td align="right" valign="middle" class="table6">&nbsp;</td>
        <td align="right" valign="middle" class="table6"><?php echo $Data[$i]['stock_item_cl_balance']; ?></td>
        <td align="right" valign="middle" class="table6"><?php echo $Data[$i]['stock_item_cl_balance']* $Data[$i]['unit_relation2'] ; ?></td>
        <td align="right" valign="middle" class="table6"><?php echo $Data[$i]['location']; ?></td>
        <td align="right" valign="middle" class="table6"><?php echo $Data[$i]['qa']; ?></td>
      </tr>
      <?php $grandTotalPrice=$grandTotalPrice+$TotalPrice;
		$grandTotalPrice=(float) $grandTotalPrice;
	  } ?>
      <tr >
        <td height="35" colspan="9" align="right" valign="middle" class="lastTable">Grand Total : </td>
        <td align="right" valign="middle" class="lastTable">&nbsp;</td>
        <td align="right" valign="middle" class="lastTable">&nbsp;</td>
        <td align="right" valign="middle" class="lastTable">&nbsp;</td>
        <td align="right" valign="middle" class="lastTable">&nbsp;</td>
        <td align="right" valign="middle" class="lastTable">&nbsp;</td>
        <td align="right" valign="middle" class="lastTable">&nbsp;</td>
        <td align="right" valign="middle" class="lastTable">&nbsp;</td>
        <td align="right" valign="middle" class="lastTable">&nbsp;</td>
        <td align="right" valign="middle" class="lastTable">&nbsp;</td>
        <td align="right" valign="middle" class="lastTable">&nbsp;</td>
        <td align="right" valign="middle" class="lastTable">&nbsp;</td>
        <td align="right" valign="middle" class="lastTable">&nbsp;</td>
        <td align="right" valign="middle" class="lastTable">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  
</table>
</body>
</html>