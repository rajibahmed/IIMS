<?php
require_once ("../../../lib/supplier.class.php");
$objSupplierCatList = new Supplier();
$SupplierCatList=$objSupplierCatList->retriveSupplierCategoryInfoListView();
$rowSupplierCatList=count($SupplierCatList);
?>


<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right"><!--<a class="thickbox" href="includes/contents/create_supplier_category.php?height=200&width=500" title="Stock Group" >Back</a>--></td>
  </tr>
  <tr>
    <td width="140"><b>Group Name</b></td>
    <td width="125"><b>Group Parent</b></td>
    <td width="57">&nbsp;</td>
    <td width="67">&nbsp;</td>
  </tr>
<?php 

for ($i=0;$i<$rowSupplierCatList;$i++)
{
if($i%2==0)
  {
   $bgc="#F7F7F7";
  }
  else
  {
   $bgc="#F1F1F1";
  }
?>
  <tr bgcolor="<?php echo $bgc;?>">
    <td><?php echo $SupplierCatList["$i"]["supp_cat_name"];
				$sup_cat_parent_id = $SupplierCatList["$i"]["supp_cat_p_id"];
				$sup_cat_id = $SupplierCatList["$i"]["supp_cat_id"];
				$SupplierCatParentname=$objSupplierCatList->retriveSupplierCategoryParentName($sup_cat_parent_id);
	?></td>
    <td><?php
	if($sup_cat_parent_id ==0)
		echo "Primary";
	else	
		echo $SupplierCatParentname[0]["supp_cat_name"];
	?></td>
    <td align="center"><a href="includes/contents/update/edit_supplier_category.php?sup_cat_id=<?php echo $sup_cat_id;?>&height=200&width=500" class="thickbox">Edit</a></td>
    <td align="center">Delete</td>
  </tr>
<?php } ?>
</table>

<script type="text/javascript" language="javascript" src="js/thickbox-compressed.js"></script>
