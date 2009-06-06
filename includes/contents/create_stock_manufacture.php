
<?php
require_once("../../lib/defination.class.php");
require_once ("../../lib/stock.class.php");

$stock=new Stock();


$stockDept=options_for_select(	$stock->retriveStockDepartmentInfo(),
											'stock_dept_id',
											'stock_dept_name',
											true	
										);
$stockSection=options_for_select(	$stock->retriveStockSection(),
											'sec_id',
											'sec_name',
											true	
										);	
$stockMachineModelName=options_for_select(	$stock->retriveMachineModelName(),
											'machine_model_id',
											'machine_model_name',
											true	
										);
$stockMachineName=options_for_select(	$stock->retriveMachineName(),
											'm_id',
											'm_name',
											true	
										);
																				


?>

<div id="test">

<form  id="CreateStockmanufacture" name="CreateStockmanufacture" method="post"   action="includes/model/stock_manufacture_actions.php">
  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
<?php
	
		 require_once "partials/_form_manufacture.php";

	
	?>
    </tr>
    <tr>
      <td>
        <div align="center">
          <table width="55%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="68%" align="center" valign="middle"><a href="includes/contents/list_all/list_all_stock_manufacturer.php?height=300&width=550" title="Manufacturer List"  class="thickbox button2">List All</a></td>
              <td width="32%" align="center" valign="middle"><input name="btn_StkDept" type="submit" class="button saveButtonwidth" id="btn_StkDept" value="Save" /></td>
            </tr>
          </table>
        </div></td>
    </tr>
  </table>
</form>
</div>


<script type="text/javascript" charset="utf-8">
	
	var options={
			target:'#test',
			beforeSubmit:function(){
				$("#test").slideUp(200).html("");	
			},
			success:function(){
				$("#test").slideDown(200);
			},
	}
		
	$("form").submit(function(){
		$('#btn_save').attr('disabled');
		$(this).ajaxSubmit(options);
		return false;
	})

/*---------------------------------------------------*/
</script>
