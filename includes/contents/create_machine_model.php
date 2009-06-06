<?php
require_once('../../lib/defination.class.php');
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
$stockManufacturer=options_for_select(	$stock->retriveManufecturer(),
											'manu_id',
											'manu_name',
											true	
										);
$stockMachineName=options_for_select(	$stock->retriveMachineName(),
											'm_id',
											'm_name',
											true	
										);										


?>

<div id="test">

<body>
<form  id="CreateMModel" name="CreateMModel" method="post"  action="includes/model/stock_mmodel_actions.php">
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

<?php
	
		 require_once "partials/_form_stock_machine_mode.php";

	
	?>

    </tr>
    <tr>
      <td align="center" valign="top"><table width="55%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td align="center" valign="middle"><a href="includes/contents/list_all/list_all_machine_model.php?height=300&width=700" title="Machine Mode List"  class="thickbox button2">List All</a></td>
            <td align="center" valign="middle"><input name="btn_StkDept" type="submit" class="button saveButtonwidth" id="btn_StkDept" value="Save" /></td>
          </tr>
        </table></td>
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