<?php
require_once ("../../../lib/stock.class.php");
$s_grp_id = $_GET['s_grp_id'];

$objStockGroupInfo = new Stock();
$StockGrpInfo=$objStockGroupInfo->retriveStockGroupUnderInfo();
$rowStockGroUnderInfo=count($StockGrpInfo);

$StockGrpById=$objStockGroupInfo->retriveStockGroupById($s_grp_id);
$rowStockGroById=count($StockGrpById);
for($j=0;$j<$rowStockGroById;$j++)
{
	$stock_group_name=$StockGrpById[$j]['stock_group_name'];
	$stock_group_p_id=$StockGrpById[$j]['stock_group_parent_id'];
}
?>


	<form  id="CreateStockGroup" name="CreateStockGroup" method="post" action="includes/model/stock_group_update_actions.php?height=200&width=500" class="thickbox">
<div id="note"> </div>	
	  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
	<?php
	
		 require_once "../partials/_form_stock_group.php";

	
	?>
	  
                  <td align="center" valign="middle"><input type="hidden" value="<?php echo $s_grp_id;?>" name="s_grp_id" id="s_grp_id" /></td>
                  <td align="center" valign="right"><input name="btn_StkGrp" type="submit" class="button" id="btn_StkGrp" value="Update" /></td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td align="center" valign="middle">&nbsp;</td>
                </tr>
              </table></td>
	    </tr>
	  </table>
</form>	

<script src="js/rajib_script.js" type="text/javascript"></script>