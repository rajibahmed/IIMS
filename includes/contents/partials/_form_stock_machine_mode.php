    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="72" align="center" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="30" align="right" valign="top">Model Name: &nbsp;</td>
          <td width="68%" align="left" valign="top"><input name="txtMname" type="text" value="<?php if(isset($_GET['macMode_id'])) echo $StockMachineMode[0]['machine_model_name']; ?>" id="txtMname" size="40" class="inventori_txtfield" /></td>
        </tr>
		
		<tr>
          <td height="30" align="right" valign="top">Machine Name: &nbsp;</td>
          <td align="left" valign="top">
		  
		  
		  <?php if(isset($_GET['macMode_id']))
		   
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
			 <select name="stockMachinNameID" class="inventori_txtfield" >
           		 <?php echo $stockMachineName; ?>
          	</select>
		  <?php }?>
		  
		  </td>
        </tr>
         <tr>
          <td height="30" align="right" valign="top">Manufacturer: &nbsp;</td>
          <td height="30" align="left" valign="top">
		  
		  
		  <?php if(isset($_GET['macMode_id']))
		   
		   {?>
		   		<select name="stockManufacturerID" id="stockManufacturerID">
					<option value="0">Primary</option>
					<?php for($i=0; $i<$rowManuYear; $i++)
					{?>
					<option <?php if($machine_mode==$stockAllManufacturer[$i]['manu_id']) echo 'selected'  ?> value="<?php echo $stockAllManufacturer[$i]['manu_id']?>"><?php echo $stockAllManufacturer[$i]['manu_name']?></option>
					<?php }?>
		    </select>
		   <?php 
		   }else{
		   ?>
			 <select name="stockManufacturerID" id="stockManufacturerID" class="inventori_txtfield" >
            	<?php echo $stockManufacturer; ?>
          	</select>
		  <?php }?>
		  
		  
		  
		  </td>
        </tr>
        
        <tr>
          <td height="30" align="right" valign="top">Section: &nbsp;</td>
          <td align="left" valign="top">
		  
		  
		   <?php if(isset($_GET['macMode_id']))
		   
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
				<select name="stockSectionID" class="inventori_txtfield" >
				<?php echo $stockSection; ?>
			  </select>
		  <?php }?>
		  
		  
		  
		  </td>
        </tr>
        <tr>
          <td height="30" align="right" valign="top">Department: &nbsp;</td>
          <td align="left" valign="top">
		  
		  <?php if(isset($_GET['macMode_id']))
		   
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
			<select name="stockDepartmentID" class="inventori_txtfield" >
            <?php echo $stockDept; ?>
          </select>		 
		 <?php }?>
		  
		  
		  </td>
        </tr>

      </table></td>
    </tr>
    <tr>
      <td height="21">&nbsp;</td>