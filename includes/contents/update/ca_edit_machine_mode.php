<?php
require_once ("../../../lib/stock.class.php");
require_once('../../../lib/defination.class.php');
$macMode_id = $_GET['macMode_id'];
$machine_id = $_GET['machine_id'];
$section_id=$_GET['Section_p_id'];
$dept_id=$_GET['stock_dept_id'];
$machine_mode=$_GET['machine_mode'];


$stock=new Stock();
$StockMachineMode=$stock->retriveMachineModelNameById($macMode_id);

$stockAllManufacturer=$stock->retriveManufecturer();
$rowManuYear=count($stockAllManufacturer);

$stockMacName=$stock->retriveMachineName();
$rowMacName=count($stockMacName);

$stockDeptName=$stock->retriveStockDepartmentListAll();
$rowDeptName=count($stockDeptName);

$stockSection=$stock->retriveStockSection();
$rowStockSection=count($stockSection);



?>



	<form  id="CreateManufactureGroup" name="CreateManufactureGroup" method="post" action="includes/model/stock_mac_mode_update_actions.php" >
	<div id="note"> </div>
	  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
	
	<?php
	
		  require_once "../partials/_form_stock_machine_mode.php";

	
	?>
	  
                  <td align="center" valign="middle"><input type="hidden" value="<?php echo $macMode_id;?>" name="s_mac_mod_id" id="s_mac_mod_id" /></td>
                  <td align="center" valign="right"><input name="btn_StkGrp" type="submit" class="button" id="btn_StkGrp" value="Update" /></td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td align="center" valign="middle">&nbsp;</td>
                </tr>
              </table></td>
	    </tr>
	  </table>
</form>	
<script src="js/rajib_script.js" type="text/javascript"></script>