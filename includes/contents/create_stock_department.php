<?php
require_once ("../../lib/stock.class.php");
$objStockDeptInfo = new Stock();
$StockDeptInfo=$objStockDeptInfo->retriveStockDepartmentInfo(); // call function through obj name  Exp   objname->functionName
$rowStockdept=count($StockDeptInfo);
?>
<div id="test">

<form  id="CreateStockDept1" name="CreateStockdept1" method="post" action="includes/model/stock_depart_actions.php">
  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
    <?php 
	require_once "partials/_form_stock_department.php";
	?>
      <td colspan="2" align="right"><table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
        <tr>
          <td align="right"><a href="includes/contents/list_all/list_all_stock_department.php?height=200&width=500" title="Stock Department"  class="thickbox button2">List All </a></td>
          <td align="center">&nbsp;</td>
          <td align="left"><input name="btn_StkGrp" type="submit" class="button2 " id="btn_StkGrp" value="Save" /></td>
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
<script type="text/javascript" src="js/thickbox-compressed.js"> </script>