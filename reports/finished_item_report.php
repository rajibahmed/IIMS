<?php 
require_once("../lib/report.class.php");
require_once("../lib/helper_functions.php");
	$REPORT = new Reports();
	
	
	$Data = $REPORT->retriveFinishedItemReport();
	if(empty($Data)){
		echo "No data";
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Finished Item Report</title>
<link href="../css/report.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	font-size: 14px;
	font-weight: bold;
}
.gray{
	background:#e2e2e2;
}
-->
</style>
</head>

<body>
<table width="98%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td height="94" align="center" valign="top"><table width="50%" height="67" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="26" align="center" valign="top"><h1>Square Textiles Ltd.</h1>
          <p class="style1">Saradaganj, Kashimpur, Gazipur </p>
          <h3>Finished Item Report</h3>
		  <h4>As on Date : <?php echo date("Y-m-d"); ?></h4>		</td>
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
    <td height="94" align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
  
      
      <tr class="report_item_name">
        <td height="35" align="center" valign="middle" class="table1">Group</td>
        <td align="center" valign="middle" class="table2">Serial</td>
        <td align="center" valign="middle" class="table2">Stock Code </td>
        <td align="center" valign="middle" class="table2">Count</td>
        <td align="center" valign="middle" class="table2">Knit/Wing </td>
        <td align="center" valign="middle" class="table2">Lot</td>
        <td align="center" valign="middle" class="table2">Opening</td>
        <td align="center" valign="middle" class="table2">Receving</td>
        <td align="right" valign="middle" class="table2">Delivery</td>
        <td align="right" valign="middle" class="table2">Machine Name</td>
        <td align="right" valign="middle" class="table3">Closing</td>
        <td align="right" valign="middle" class="table3">QA</td>
        <td align="right" valign="middle" class="table3">Prod. Part</td>
        <td align="right" valign="middle" class="table3">Remark</td>        
      </tr>
      <?php
		 
    for ($i=0; $i<count($Data);$i++)
    {
    	
	?>
      <tr <?php echo ($i%2==0)?'class="gray"':'' ?>>
        <td align="center" valign="middle" class="table4">
        	<?php echo $Data[$i]['stock_item_grp_id']; ?>
    	</td>
    	
        <td align="center" valign="middle" class="table5">
        	<?php  $j = $i; echo $j+1 ?>
    	</td>
    	
        <td align="center" valign="middle" class="table5">
        	<?php echo $Data[$i]['stock_code_m_id']; ?>
    	</td>
    	
        <td align="center" valign="middle" class="table5" >
        	<?php echo $Data[$i]['count']; ?>
    	</td>
    	
        <td align="center" valign="middle" class="table5">
        	<?php echo $Data[$i]['knit']; ?>
    	</td>
    	
        <td align="center" valign="middle" class="table5">
        	<?php echo $Data[$i]['lot']; ?>
    	</td>
    	
        <td align="center" valign="middle" class="table5">
        	<?php echo $Data[0]['stock_item_op_balance']; ?>
    	</td>
    	
        <td align="right" valign="middle"  class="table5">
        	<?php echo $Data[$i]['stock_received_qty']; ?>
    	</td>
    	
        <td align="right" valign="middle" class="table5">
        	<?php echo $Data[$i]['consumptions_rate']; ?>
    	</td>
    	
        <td align="right" valign="middle" class="table5">
        	<?php echo $Data[$i]['machine_name']; ?>
    	</td>
    	
        <td align="right" valign="middle" class="table5">
        	<?php echo $Data[$i]['stock_item_cl_balance']; ?>
    	</td>
    	
        <td align="right" valign="middle" class="table5">
        	<?php echo $Data[$i]['qa']; ?>
    	</td>    
    		    	    	
        <td align="right" valign="middle" class="table5">
        	<?php echo $Data[$i]['remark'];?>
    	</td>
        <td align="right" valign="middle" class="table6">
        	<?php echo $Data[$i]['remark'];?>
    	</td>    	
      </tr>
      <?
	  }
	   ?>

    </table></td>
  </tr>

</table>
</body>
</html>
