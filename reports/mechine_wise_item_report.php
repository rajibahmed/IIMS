<?php 
require_once('../lib/defination.class.php');
require_once("../lib/stock.class.php");

	$Stock = new Stock();
	
$stockMachineName=options_for_select(	$Stock->retriveMachineName(),
											'm_id',
											'm_name',
											true	
										);	
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
    <td align="center" valign="top"><form  action="reports/mechine_wise_report_print.php" method="post">
      <table width="70%" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="44%" align="right" valign="top">Stock Group Name : </td>
          <td width="3%" align="left" valign="top">&nbsp;</td>
          <td width="53%" align="left" valign="top"><label>
            <select name="stkMName" id="stkMName" class="inventori_txtfield" >
			<?php echo $stockMachineName; ?>			
      </select>
          </label></td>
        </tr>
        <tr>
          <td align="right" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
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