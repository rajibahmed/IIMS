


<div id="test">

<form  id="CreateStockUnit" name="CreateStockUnit" method="post"   action="includes/model/stock_unit_actions.php">
  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
    <tr>
      <td height="30">&nbsp;</td>
      </tr>
    <tr>
      <td align="center" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="36%" height="30" align="right" valign="top">Symbol: &nbsp;</td>
          <td width="64%" align="left" valign="top"><input name="stockUnitSymbol" type="text" id="stockUnitSymbol" class="inventori_txtfield" /></td>
        </tr>
        <tr>
          <td height="30" align="right" valign="top">Formal Name: &nbsp; </td>
          <td align="left" valign="top"><input name="stockUnitFormalName" type="text" id="stockUnitFormalName" class="inventori_txtfield" /></td>
        </tr>
        <tr>
          <td height="30" align="right" valign="top">Number of decimal places: &nbsp; </td>
          <td align="left" valign="top"><input name="stockUnitDecimalPlace" type="text" id="stockUnitDecimalPlace" class="inventori_txtfield"/></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td>
        <div align="center">
          <table width="55%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td align="right" valign="middle"><a href="includes/contents/list_all/list_all_measurment_unit.php?height=300&width=550" title="Measurment Unit List"  class="thickbox button2">List All</a></td>
              <td align="right" valign="middle"><input name="btn_create_unit" type="submit" class="button saveButtonwidth" id="btn_create_unit" value="Save" /></td>
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
