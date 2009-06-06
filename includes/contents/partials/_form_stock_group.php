


	  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
	    <tr>
	      <td height="42" align="center" valign="top">&nbsp;</td>
        </tr>
	    
	    <tr> 
	      <td align="center" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="32%" align="right" valign="top">Name: &nbsp;</td>
              <td width="68%" height="30" align="left" valign="top"><input name="txtStkGrpName" type="text" class="inventori_txtfield" id="txtStkGrpName" value="<?php echo( $stock_group_name ?  $stock_group_name : ''); ?>" size="40" /></td>
            </tr>
            <tr>
              <td height="30" align="right" valign="top">Under: &nbsp;</td>
              <td align="left" valign="top"><select name="grpID" id="grpID" class="inventori_txtfield">
    
                	<?php
						$output="";
						
						for($i=0; $i<$rowStockGroUnderInfo; $i++)
						 {
							
							
							if($stock_group_p_id && ($StockGrpInfo[$i]['stock_group_id']==$stock_group_p_id)){
							
							$output.= "<option selected value='".$StockGrpInfo[$i]['stock_group_id']."' > ".$StockGrpInfo[$i]['stock_group_name']."</option>";
							}
							else{
								if($i==0){
									$output.= "<option value='0'>primary</option>";
									}
									else
									{
                						$output.= "<option value='".$StockGrpInfo[$i]['stock_group_id']."' > ".$StockGrpInfo[$i]['stock_group_name']."</option>";
									}
							}
							
							
						} 
						
					?>
					<?php echo $output ?>
              </select></td>
            </tr>
          </table></td>
        </tr>
	    <tr>
	      <td height="20">&nbsp;</td>
        </tr>
	    <tr>
	      <td align="center" valign="top"><table width="60%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  

