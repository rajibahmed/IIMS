<?php

require_once('../../lib/helper_functions.php');
require_once ("../../lib/supplier.class.php");
$objSupplierInfo = new Supplier();
$SupplierInfo=$objSupplierInfo->retriveSupplierInfo();

$suppliers=options_for_select(	$SupplierInfo,
								'sup_id',
								'sup_name',
								true);
	
?>

<style type="text/css">
<!--
.style10 {font-size: xx-small; font-family: Verdana, Arial, Helveptica, sans-serif; }
.style11 {font-size: xx-small}
-->
</style>

<form id="qualityCertificate" name="qualityCertificate" method="post"  action="#" >

<div class="rightcontent1">
        <div class="bodybanner1"> </div>
        <div class="bodybanner2">Quality Certificate </div>
        <div class="bodybanner3"> 
		</div>
<div id="ajax_content">	

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="float:left" class="">
  <tr>
    <td><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="35">&nbsp;</td>
        <td width="9%" align="left" valign="top" class="font2">&nbsp;</td>
        <td width="30%" align="left" valign="bottom" class="font2">Date:<input type="text" name="date" value=""class="date"></td>
      </tr>
      <tr>
        <td width="61%" height="30">&nbsp;</td>
        <td colspan="2" align="left" valign="middle" class="font2">Materials</td>
      </tr>
      <tr>
        <td height="30">&nbsp;</td>
        <td colspan="2" align="left" valign="middle" class="font2">Supplier M/s: <select name="supplier" id="supplier">
		<?php echo $suppliers; ?>
        </select></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top"><table width="96%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td class="font2"><div align="justify">To <br>
          The head of the indenting department / section .................................................................. Please check the quality, size, country of origin, suitability etc, of the following materials received in the general store on ....................................... against purchase order no. ......................................... date ................................ challan no ....................................... date .............................................. and let me have your comments regarding its/their correctness and acceptability or otherwise, so that we can receive the same formally through a material receiving report. </div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="right" valign="top"><table width="94%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="28" align="right" valign="middle" class="font2"><div align="right">Store In-charge </div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top"><table width="94%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
      
      <tr>
        <td align="center" valign="top" class="font2"><div align="center">Sl. No. </div></td>
        <td align="center" valign="top" class="font2"><div align="center">G. R. R. No. </div></td>
        <td align="center" valign="top" class="font2"><div align="center">W.O./ Indent </div></td>
        <td align="center" valign="top" class="font2"><div align="center">Description of Materials </div></td>
        <td align="center" valign="top" class="font2"><div align="center">Quantity</div></td>
        <td align="center" valign="top" class="font2"><div align="center">Remarks</div></td>
      </tr>
      <tr>
        <td class="font2">&nbsp;</td>
        <td class="font2">&nbsp;</td>
        <td class="font2">&nbsp;</td>
        <td class="font2">&nbsp;</td>
        <td class="font2">&nbsp;</td>
        <td class="font2">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top"><table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="top" class="font2"><br>
          a) Checked and found correct, May be received<br>
          b) All not found in order, may be received as par may comments in the remarks column above,<br>
          c) Not found in order and not acceptable, rejected.<br></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top"><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2" align="center" valign="middle" class="font3"><div align="center"><br>
          REASONS (DETAILS):- </div></td>
        </tr>
      <tr>
        <td width="59%">&nbsp;</td>
        <td width="41%" align="center" valign="top" class="font2"><div align="center">Hd / of the Indenting<br>
          deptt / Section. </div></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<div class="clear">
<div class="rightimg3">
			<div class="downimg1"></div>
			<div class="downimg2"></div>
			<div class="downimg3"></div>
		</div>
		<div class="clear">
</div>