<tr>
      <td align="right">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="33%" align="right">Name: </td>
      <td><input name="txtStkdeptName" type="text" id="txtStkdeptName" size="40" class="inventori_txtfield" value="<?php echo( $stock_department_name ?  $stock_department_name : ''); ?>" /></td>
    </tr>
    <tr>
      <td align="right">Under:</td>
      <td><select name="deptPId" id="deptPId" class="inventori_txtfield">
        <option value="0">Primary </option>
                	<?php
						$output="";
						
						for($i=0; $i<$rowStockdept; $i++)
						{
							if($stock_department_p_id && ($StockDeptInfo[$i]['stock_dept_id']==$stock_department_p_id))
							{
							$output.= "<option selected value='".$StockDeptInfo[$i]['stock_dept_id']."' > ".$StockDeptInfo[$i]['stock_dept_name']."</option>";
							}
							else
							{
                			$output.= "<option value='".$StockDeptInfo[$i]['stock_dept_id']."' > ".$StockDeptInfo[$i]['stock_dept_name']."</option>";
							}
						} 
						
					?>
					<?php echo $output ?>
      </select></td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>