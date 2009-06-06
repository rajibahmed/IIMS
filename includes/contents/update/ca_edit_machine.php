<?php
require_once ("../../../lib/stock.class.php");
require_once('../../../lib/defination.class.php');
$m_sec_id = $_GET['m_sec_id'];
$m_dep_id = $_GET['m_dep_id'];
$m_id=$_GET['m_id'];


$stock=new Stock();
$StockMachine=$stock->retriveStockMachineListByID($m_id);

$stockDeptName=$stock->retriveStockDepartmentListAll();
$rowDeptName=count($stockDeptName);

$stockSection=$stock->retriveStockSection();
$rowStockSection=count($stockSection);



?>



	<form  id="CreateMachineGroup" name="CreateMachineGroup" method="post" action="includes/model/stock_machine_update_actions.php" >
	<div id="note"> </div>
	  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
	<?php
	
		 require_once "../partials/_form_machine.php";

	
	?>
	  
                  <td align="center" valign="middle"><input type="hidden" value="<?php echo $m_id;?>" name="s_mac_id" id="s_mac_id" /></td>
                  <td align="center" valign="right"><input name="btn_StkGrp" type="submit" class="button" id="btn_StkGrp" value="Update" /></td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td align="center" valign="middle">&nbsp;</td>
                </tr>
              </table></td>
	    </tr>
	  </table>
</form>	
<script src="js/rajib_script.js" type="text/javascript"></script>