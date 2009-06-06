  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
    <tr>
      <td height="42" align="center" valign="top">&nbsp;</td>
    </tr>
    
    <tr>
      <td align="center" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="32%" height="30" align="right" valign="top">Name: &nbsp;</td>
          <td width="64%" align="left" valign="top"><input name="txtMname" type="text" value="<?php if(isset($_GET['m_id'])) echo $StockMachine[0]['m_name'];  ?>" id="txtMname" size="40" class="inventori_txtfield" /></td>
        </tr>
        <tr>
          <td height="30" align="right" valign="top">Section: &nbsp;</td>
          <td align="left" valign="top">
		  
		   <?php if(isset($_GET['m_id']))
		   
		   {?>
		   		<select name="stockSectionID" id="stockSectionID">
					<option value="0">Primary</option>
					<?php for($i=0; $i<$rowStockSection; $i++)
					{?>
					<option <?php if($m_sec_id==$stockSection[$i]['sec_id']) echo 'selected'  ?> value="<?php echo $stockSection[$i]['sec_id']?>"><?php echo $stockSection[$i]['sec_name']?></option>
					<?php }?>
				  </select>
		   <?php 
		   }else{
		   ?>
		  <select name="stockSectionID" class="inventori_txtfield">
            <?php echo $stockSection; ?>
          </select>
		  <?php }?>
		  
		  </td>
        </tr>
        <tr>
          <td height="30" align="right" valign="top">Department: &nbsp;</td>
          <td align="left" valign="top">
		  <?php if(isset($_GET['m_id']))
		   
		   {?>
		   		<select name="stockDepartmentID" id="stockDepartmentID">
					<option value="0">Primary</option>
					<?php for($i=0; $i<$rowDeptName; $i++)
					{?>
					<option <?php if($m_dep_id==$stockDeptName[$i]['stock_dept_id']) echo 'selected'  ?> value="<?php echo $stockDeptName[$i]['stock_dept_id']?>"><?php echo $stockDeptName[$i]['stock_dept_name']?></option>
					<?php }?>
				  </select>
		   <?php 
		   }else{
		   ?>
		  <select name="stockDepartmentID" class="inventori_txtfield">
            <?php echo $stockDept; ?>
          </select>
		  <?php }?>
		  
		  </td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td align="center" valign="top">&nbsp;</td>