
    <tr>
      <td height="35">&nbsp;</td>
    </tr>
    <tr>
      <td align="center" valign="top"><table width="98%" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="32%" height="30" align="right" valign="top">Name: &nbsp;</td>
          <td width="68%" height="30" align="left" valign="top"><input name="txtMname" type="text" value="<?php if(isset($_GET['manu_id'])) echo $StockManufacturer[0]['manu_name'];  ?>" id="txtMname" size="40" class="inventori_txtfield" /></td>
        </tr>
        <tr>
          <td height="30" align="right" valign="top">Manufacture year: &nbsp;</td>
          <td height="30" align="left" valign="top">
		  <?php if(isset($_GET['manu_id']))
		   
		   {?>
		   		<select name="stockManufacturerYearID" id="stockManufacturerYearID">
					<option value="0">Primary</option>
					<?php for($i=0; $i<$rowManuYear; $i++)
					{?>
					<option <?php if($manu_id==$stockAllManufacturer[$i]['manu_id']) echo 'selected'  ?> value="<?php echo $stockAllManufacturer[$i]['manu_year']?>"><?php echo $stockAllManufacturer[$i]['manu_year']?></option>
					<?php }?>
				  </select>
		   <?php 
		   }else{
		   ?>
				<input name="mfg_year" type="text" id="mfg_year" class="inventori_txtfield"/>

		  <?php }?>
		  
		  </td>
        </tr>
        <!--<tr>
          <td height="30" align="right" valign="top">Machine Mode: &nbsp;</td>
          <td height="30" align="left" valign="top"><select name="machModel" id="machModel" class="inventori_txtfield" >
            <?php //echo $stockMachineModelName; ?>
          </select></td>
        </tr>-->
        <tr>
          <td height="30" align="right" valign="top">Machine Name: &nbsp;</td>
          <td height="30" align="left" valign="top">
		  
		  
		  <?php if(isset($_GET['manu_id']))
		   
		   {?>
		   		<select name="stockMachinNameID" id="stockMachinNameID">
					<option value="0">Primary</option>
					<?php for($i=0; $i<$rowMacName; $i++)
					{?>
					<option <?php if($machine_id==$stockMacName[$i]['m_id']) echo 'selected'  ?> value="<?php echo $stockMacName[$i]['m_id']?>"><?php echo $stockMacName[$i]['m_name']?></option>
					<?php }?>
				  </select>
		   <?php 
		   }else{
		   ?>
			 <select name="machName" id="machName" class="inventori_txtfield">
				<?php echo $stockMachineName; ?>
			  </select>
		  <?php }?>
		  
		  
		  </td>
        </tr>
        <tr>
          <td height="30" align="right" valign="top">Section: &nbsp;</td>
          <td height="30" align="left" valign="top">
		  <?php if(isset($_GET['manu_id']))
		   
		   {?>
		   		<select name="stockSectionID" id="stockSectionID">
					<option value="0">Primary</option>
					<?php for($i=0; $i<$rowStockSection; $i++)
					{?>
					<option <?php if($section_id==$stockSection[$i]['sec_id']) echo 'selected'  ?> value="<?php echo $stockSection[$i]['sec_id']?>"><?php echo $stockSection[$i]['sec_name']?></option>
					<?php }?>
				  </select>
		   <?php 
		   }else{
		   ?>
		    <select name="Section" id="Section" class="inventori_txtfield" >
            <?php echo $stockSection; ?>
          </select>
		  <?php }?>
		  
		  
		</td>
        </tr>
        <tr>
          <td height="30" align="right" valign="top">Department: &nbsp;</td>
          <td height="30" align="left" valign="top">
		  <?php if(isset($_GET['manu_id']))
		   
		   {?>
		   		<select name="stockDepartmentID" id="stockDepartmentID">
					<option value="0">Primary</option>
					<?php for($i=0; $i<$rowDeptName; $i++)
					{?>
					<option <?php if($dept_id==$stockDeptName[$i]['stock_dept_id']) echo 'selected'  ?> value="<?php echo $stockDeptName[$i]['stock_dept_id']?>"><?php echo $stockDeptName[$i]['stock_dept_name']?></option>
					<?php }?>
				  </select>
		   <?php 
		   }else{
		   ?>
			<select name="dept" id="dept" class="inventori_txtfield">
            <?php echo $stockDept; ?>
          	</select>		 
		 <?php }?>
		  
		  
		  </td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>