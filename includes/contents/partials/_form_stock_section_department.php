 <tr>
      <td height="35" align="center" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td align="center" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="32%" height="30" align="right" valign="top">Name: &nbsp;</td>
          <td width="68%" height="30" align="left" valign="top"><input name="txtsectionName" type="text" id="txtsectionName" size="40" class="inventori_txtfield" value="<?php echo( $stock_section_name ?  $stock_section_name : ''); ?>"/></td>
        </tr>
        <tr>
          <td height="30" align="right" valign="top">Section: &nbsp;</td>
          <td height="30" align="left" valign="top"><select name="select_stock_section" id="select_stock_section" class="inventori_txtfield" >
            <?php echo $stockSection; ?>
          </select></td>
        </tr>
        <tr>
          <td height="30" align="right" valign="top">Department: &nbsp;</td>
          <td height="30" align="left" valign="top"><select name="StockCatUnderName" id="StockCatUnderName" class="inventori_txtfield" >
            <?php echo $stockDept; ?>
          </select></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>