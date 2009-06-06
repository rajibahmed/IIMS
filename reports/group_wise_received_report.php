<?php 
require_once("../lib/stock.class.php");

	$Stock = new Stock();
	
	
	$Data = $Stock->retriveStockGroupUnderInfo();
	
?>



<body>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="64" align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="top"><form  action="reports/group_issue_received_print.php" method="post">
      <table width="70%" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="44%" align="right" valign="top">Stock Group Name : </td>
          <td width="3%" align="left" valign="top">&nbsp;</td>
          <td width="53%" align="left" valign="top"><label>
            <select name="stock_group" id="stock_group">
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

<script  type="text/javascript">

$(".date").dynDateTime({
							//showsTime: true,
							ifFormat:"%Y-%m-%d %H:%M:%S",
							});	 

</script>