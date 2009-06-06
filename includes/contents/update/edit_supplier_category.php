<?php
require_once ("../../../lib/supplier.class.php");
require_once('../../../lib/defination.class.php');

$objSuppCatInfo = new Supplier();
$sup_cat_id = $_GET['sup_cat_id'];

$SupplierCatById=$objSuppCatInfo->retriveSupplierCategoryById($sup_cat_id);
$rowSupplierCatById=count($SupplierCatById);

		$sup_cat_name =$SupplierCatById[0]['supp_cat_name'];
		$cat_parent_id =$SupplierCatById[0]['supp_cat_p_id'];

$SuppCatInfo=$objSuppCatInfo->retriveSupplierCategoryInfo();
$rowSuppCat=count($SuppCatInfo);

?>

<link href="../../css/stylesheet.css" rel="stylesheet" type="text/css" />

<div id="note"> </div>	

<form  id="CreateStockDept1" name="CreateStockdept1" method="post" action="includes/model/supplier_category_update_actions.php">

     <?php 
	require_once "../partials/_form_supplier_cat.php";
	?>
    <tr>
        <td colspan="2" align="right"><input type="hidden" name="sup_cat_id" id="sup_cat_id" value="<?php echo $sup_cat_id;?>" /></td>
        <td width="15%" align="center"><input name="btn_Supp_Cat" type="submit" class="button" id="btn_Supp_Cat" value="Update " /></td>
        <td width="44%">&nbsp;</td>
    </tr>
  </table>
</form>

<script type="text/javascript" src="js/rajib_script.js"> </script>
	