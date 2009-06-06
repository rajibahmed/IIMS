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


?>


<div id="test">

<form  id="CreateStocksec" name="CreateStocksec" method="post"  action="includes/model/stock_section_actions.php">
  <table width="100%" border="0" cellspacing="2" cellpadding="2">
   	<?php
		 require_once "partials/_form_stock_section_department.php";
	?>

    <tr>
      <td>
        <div align="center">
          <table width="55%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td align="center" valign="middle">
              <a href="includes/contents/list_all/list_all_stock_section.php?height=200&width=500" title="Stock Section"  class="thickbox button2">List All </a>              </td>
              <td align="center" valign="middle"><input name="btn_StkDept" type="submit" class="button saveButtonwidth" id="btn_StkDept" value="Save" /></td>
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