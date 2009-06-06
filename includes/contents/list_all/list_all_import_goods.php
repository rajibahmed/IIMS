<?php
require_once ("../../../lib/importGoods.class.php");
$objImportGoodsInfo = new ImportGoods();
$ImportGoodsInfo=$objImportGoodsInfo->retriveImportGoods();
$rowImportGoodsInfo=count($ImportGoodsInfo);
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
    <td align="right"><a class="thickbox" href="includes/contents/create_import_goods.php?height=500&width=600" title="Import Goods" >Back</a></td>
  </tr>
  <tr>
    <td width="177"><b>Initial Offer Date</b></td>
    <td width="255"><b>Proforma Invoice number</b></td>
    <td width="144"><b>Proforma Invoice Date</b></td>
    <td width="144"><b>Factory Indent Number</b></td>
    <td width="144"><b>L/C No</b></td>
    <td width="144"><b>L/C No</b></td>
    <td width="144">&nbsp;</td>
    <td width="84">&nbsp;</td>
  </tr>
<?php 

for ($i=0;$i<$rowImportGoodsInfo;$i++)
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
    <td>
		<?php echo  $ImportGoodsInfo["$i"]["initial_offer_date"];
		
					$imp_gds_id = $ImportGoodsInfo["$i"]["id"];
					
        ?>    </td>
    <td align="left"><?php echo $ImportGoodsInfo["$i"]["pi_num"];?></td>
    <td align="left"><?php echo $ImportGoodsInfo["$i"]["pi_date"];?></td>
    <td align="left"><?php echo $ImportGoodsInfo["$i"]["factory_indent_num"];?></td>
    <td align="left"><?php echo $ImportGoodsInfo["$i"]["ic_num"];?></td>
    <td align="left"><?php echo $ImportGoodsInfo["$i"]["ic_date"];?></td>
    <td align="center"><a href="includes/contents/update/edit_import_goods.php?imp_gds_id=<?php echo $imp_gds_id;?>&height=500&width=650" class="thickbox">Edit</a></td>
    <td align="center">Delete</td>
  </tr>
<?php } ?>
</table>

	
<script type="text/javascript" language="javascript" src="js/thickbox-compressed.js"></script>