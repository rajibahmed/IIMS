 <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
  <p>
    
    <tr>
      <td width="15" align="right"></td>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td align="right"></td>
      <td width="10%">Name :</td>
      <td colspan="2"><input type="text" name="txtSuppCatName" id="txtSuppCatName" class="inventori_txtfield" value="<?php echo( $sup_cat_name ?  $sup_cat_name : ''); ?>" /></td>
    </tr>

    <tr>
      <td align="right"><p>&nbsp;</p></td>
      <td>Under :</td>
      <td colspan="2"><select name="deptPId" id="deptPId" class="inventori_txtfield">
                	<?php
						$output="";
						
						for($i=0; $i<$rowSuppCat; $i++)
						 {
							
							
							if($cat_parent_id && ($SuppCatInfo[$i]['supp_cat_id']==$cat_parent_id)){
							
							$output.= "<option selected value='".$SuppCatInfo[$i]['supp_cat_id']."' > ".$SuppCatInfo[$i]['supp_cat_name']."</option>";
							}
							else{
								if($i==0){
									$output.= "<option value='0'>Primary</option>";
									}
									else
									{
                						$output.= "<option value='".$SuppCatInfo[$i]['supp_cat_id']."' > ".$SuppCatInfo[$i]['supp_cat_name']."</option>";
									}
							}
							
							
						} 
						
					?>
					<?php echo $output ?>
      </select></td>
    </tr>

    <tr>
      <td colspan="2" align="right">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
