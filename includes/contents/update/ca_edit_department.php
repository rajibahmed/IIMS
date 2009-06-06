<?php
require_once ("../../../lib/stock.class.php");
$stk_depart_id = $_GET['stk_depart_id'];

$objStockDeptInfo = new Stock();
$StockDeptInfo=$objStockDeptInfo->retriveStockDepartmentInfo(); // call function through obj name  Exp   objname->functionName
$rowStockdept=count($StockDeptInfo);

$StockDepartById=$objStockDeptInfo->retriveStockDepartById($stk_depart_id);
$rowStockDepartById=count($StockDepartById);
for($j=0;$j<$rowStockDepartById;$j++)
{
	$stock_department_name=$StockDepartById[$j]['stock_dept_name'];
	$stock_department_p_id=$StockDepartById[$j]['stock_dept_p_id'];}

?>


<form  id="CreateStockDept1" name="CreateStockdept1" method="post" action="includes/model/stock_machine_update_actions.php">
<div id="note"> </div>

  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
    <?php 
	require_once "../partials/_form_stock_department.php";
	?>
      <td colspan="2" align="right"><table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
        <tr>
          <td align="right"></td>
          <td align="center">
          <input type="hidden" value="<?php echo $stk_depart_id;?>" name="stk_depart_id" id="stk_depart_id" />
          </td>
          <td align="center"><input name="btn_StkGrp" type="submit" class="button2" id="btn_StkGrp" value="Update" /></td>
        </tr>
      </table></td>
      </tr>
</table>
</form>
<script src="js/rajib_script.js" type="text/javascript"></script>
