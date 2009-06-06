<?php 
require_once("../lib/stock.class.php");

	$Stock = new Stock();
	
	
	$Data = $Stock->retriveStockGroupUnderInfo();
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="64" align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="top"><form  action="reports/stock_item_report_print.php" method="post">
      <table width="70%" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="44%" align="right" valign="top">Stock Group Name : </td>
          <td width="3%" align="left" valign="top">&nbsp;</td>
          <td width="53%" align="left" valign="top"><label>
            <select name="group_issue_id" id="group_issue_id">
              <?php
		 
            for ($i=0; $i<count($Data);$i++)
            {?>
              <option value="<?php echo $Data[$i]['stock_group_id']; ?>"><?php echo $Data[$i]['stock_group_name']; ?></option>
              <?php } ?>
            </select>
          </label></td>
        </tr>
        <tr>
          <td align="right" valign="top">From Date : </td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top"><input name="date_from" type="text" class="date" id="date_from" /></td>
        </tr>
        <tr>
          <td align="right" valign="top">To Date : </td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top"><input name="date_to" type="text" class="date" id="date_to" /></td>
        </tr>
        <tr>
          <td align="right" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top"><input type="submit" name="Submit" value="Submit" /></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
</body>
</html>
