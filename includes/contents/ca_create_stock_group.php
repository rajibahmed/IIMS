<?php
require_once ("../../lib/stock.class.php");
$objStockGroupInfo = new Stock();
$StockGrpInfo=$objStockGroupInfo->retriveStockGroupUnderInfo();
 $rowStockGroUnderInfo=count($StockGrpInfo);
?>
<div id="test">
	
	<form  id="CreateStockGroup" name="CreateStockGroup" method="post"   action="includes/model/stock_group_actions.php">
	<?php
		 require_once "partials/_form_stock_group.php";
	?>
                      
                      <td align="center" valign="middle"><a href="includes/contents/list_all/list_all_stock_group.php?height=200&width=500" title="Stock Group"  class="thickbox button2">List All </a></td>
                      <td align="center" valign="middle">&nbsp;</td>
                  <td align="center" valign="middle"><input name="btn_StkGrp" type="submit" class="button2" id="btn_StkGrp" value="Save" /></td>
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