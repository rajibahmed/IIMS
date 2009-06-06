<?php

require_once('../../../lib/defination.class.php');
require_once ("../../../lib/stock.class.php");

$stk_section_id = $_GET['stk_section_id'];
$objStockSectionInfo = new Stock();

$StockSectionById=$objStockSectionInfo->retriveStockSectionById($stk_section_id);
$rowStockSectionById=count($StockSectionById);
for($j=0;$j<$rowStockSectionById;$j++)
{
	$stock_section_name=$StockSectionById[$j]['sec_name'];
	$stock_section_p_id=$StockSectionById[$j]['Section_p_id'];
	$stock_department_p_id=$StockSectionById[$j]['stock_dept_id'];
}

$stock=new Stock();

	$stockSection=options_for_select(	$stock->retriveStockSection(),
												'sec_id',
												'sec_name',
												true,
												$stock_section_p_id	
											);	

	$stockDept=options_for_select(	$stock->retriveStockDepartmentInfo(),
												'stock_dept_id',
												'stock_dept_name',
												true,
												$stock_department_p_id
											);

?>


<div id="note"> </div>

<form  id="CreateStocksec" name="CreateStocksec" method="post"  action="includes/model/stock_section_update_actions.php">
  <table width="100%" border="0" cellspacing="2" cellpadding="2">
   	<?php
		 require_once "../partials/_form_stock_section_department.php";
	?>

    <tr>
      <td>
        <div align="center">
          <table width="60%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td align="center" valign="middle">&nbsp;</td>
              <td align="center" valign="middle"><input type="hidden" name="stk_section_id" id="stk_section_id" value="<?php echo $stk_section_id;?>" /></td>
              <td align="center"><input name="btn_StkDept" type="submit" class="button2" id="btn_StkDept" value="Update" /></td>
              <td align="center" valign="middle">&nbsp;</td>
              <td align="center" valign="middle">&nbsp;</td>
            </tr>
          </table>
        </div></td>
    </tr>
  </table>
</form>
<script type="text/javascript" src="js/rajib_script.js"> </script>