<?php
require_once('../../../lib/defination.class.php');
require_once ("../../../lib/supplier.class.php");
$objSupplierInfo = new Supplier();
$SupplierInfo=$objSupplierInfo->retriveSupplierInfo();
$rowSupplierInfo=count($SupplierInfo);
	
?>


<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right"><a class="thickbox" href="includes/contents/create_import_goods.php?height=500&width=600" title="Import Goods" >Back</a></td>
  </tr>
  <tr>
    <td width="148"><b>Supplier Name</b></td>
    <td width="97"><b>Catagory:</b></td>
    <td width="103"><b>Supplier E-mail</b></td>
    <td width="109"><b>Supplier Address</b></td>
    <td width="109"><b>Supplier Phone</b></td>
    <td width="92"><b>Supplier Fax</b></td>
    <td width="112"><b>Supplier Tin </b></td>
    <td width="100"><b>Suppiler Vat </b></td>
    <td width="106"><b>Supplier Trade</b></td>
    <td width="82"><b>Tax Validity</b></td>
    <td width="63">&nbsp;</td>
    <td width="60">&nbsp;</td>
  </tr>
<?php 

for ($i=0;$i<$rowSupplierInfo;$i++)
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
    <td align="left"><?php 
					$supplier_id = $SupplierInfo["$i"]["sup_id"];
					$supplier_cat_id = $SupplierInfo["$i"]["sup_cat_id"];
					$supplier_cat_name=$objSupplierInfo->retriveSupplierCategoryById($supplier_cat_id);
					echo $SupplierInfo["$i"]["sup_name"];?></td>
    <td align="left"><?php echo $supplier_cat_name[0]["supp_cat_name"];?></td>
    <td align="left"><?php echo $SupplierInfo["$i"]["sup_email"];?></td>
    <td align="left"><?php echo $SupplierInfo["$i"]["sup_address"];?></td>
    <td align="left"><?php echo $SupplierInfo["$i"]["sup_phone"];?></td>
    <td align="left"><?php echo $SupplierInfo["$i"]["sup_fax"];?></td>
    <td align="left"><?php echo $SupplierInfo["$i"]["sup_tin"];?></td>
    <td align="left"><?php echo $SupplierInfo["$i"]["sup_vat"];?></td>
    <td align="left"><?php echo $SupplierInfo["$i"]["sup_trade"];?></td>
    <td align="left"><?php echo $SupplierInfo["$i"]["sup_tax_validity"];?></td>
    <td align="center"><a href="includes/contents/update/edit_supplier.php?supplier_id=<?php echo $supplier_id;?>&height=500&width=650" class="thickbox">Edit</a></td>
    <td align="center">Delete</td>
  </tr>
<?php } ?>
</table>

<script type="text/javascript" language="javascript" src="js/thickbox-compressed.js"></script>