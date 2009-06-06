<?php

require_once ("../../lib/supplier.class.php");
$objSuppCatInfo = new Supplier();

 
$SuppCatInfo=$objSuppCatInfo->retriveSupplierCategoryInfo();
$rowSuppCat=count($SuppCatInfo);


?>
<link href="../../css/stylesheet.css" rel="stylesheet" type="text/css" />


            	<div class="rightcontent1">
                	<div class="bodybanner1"></div>
                    <div class="bodybanner2">Create Supplier</div>
                    <div class="bodybanner3"></div>
                </div>
<div id="note"> </div>	

<form  id="CreateStockDept1" name="CreateStockdept1" method="post" action="includes/model/supplier_category_action.php">

     <?php 
	require_once "partials/_form_supplier_cat.php";
	?>
    <tr>
        <td colspan="2" align="right"><a href="includes/contents/list_all/list_all_supplier_category.php?height=200&width=600" title="Supplier" class="thickbox button2">List All </a> </td>
        <td width="15%">&nbsp;</td>
        <td width="44%"><input name="btn_Supp_Cat" type="submit" class="button" id="btn_Supp_Cat" value="Create " /></td>
  </tr>
  </table>
</form>
<div class="rightimg3">
                    	<div class="downimg1"></div>
                        <div class="downimg2"></div>
                        <div class="downimg3"></div>
                    </div>
<script type="text/javascript" src="js/rajib_script.js"> </script>
<script type="text/javascript" src="js/thickbox-compressed.js"> </script>	