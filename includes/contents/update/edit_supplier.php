<?php
require_once ("../../../lib/supplier.class.php");
require_once('../../../lib/defination.class.php');

$objSupplierInfo = new Supplier();
$supplier_id = $_GET['supplier_id'];

$SupplierById=$objSupplierInfo->retriveSupplierById($supplier_id);
$rowSupplierById=count($SupplierById);
for($j=0;$j<$rowSupplierById;$j++)
{
		$name =$SupplierById[$j]['sup_name'];
		$cat_id =$SupplierById[$j]['sup_cat_id'];
		$email =$SupplierById[$j]['sup_email'];
		$address =$SupplierById[$j]['sup_address'];
		$phone =$SupplierById[$j]['sup_phone'];
		$fax =$SupplierById[$j]['sup_fax'];
		$tin =$SupplierById[$j]['sup_tin'];
		$vat =$SupplierById[$j]['sup_vat'];
		$tradelicance =$SupplierById[$j]['sup_trade'];
		$taxholiday=$SupplierById[$j]['sup_tax_validity'];
}

	$objSuppCatInfo = new Supplier();
	
	$supplierCat=options_for_select($objSuppCatInfo->retriveSupplierCategoryInfo(),
											'supp_cat_id',
											'supp_cat_name',
											true,$cat_id
										);

?>





			
<form id="supplierForm" name="supplierForm" method="post" action="includes/model/supplier_actions_update.php" >

<div id="note"> </div>
	<table width="100%" border="0" cellpadding="2" cellspacing="2" class="form" >
		
		  <th colspan="2">
	  
		
		
         <div class="vertical_form">
            <p>
                <div align="left">
                	<label>Name:</label>
                    <input type="text" name="name" value="<?php echo $name;?>" id="name">
                </div>
            </p> 
            <p>
                <div align="left">
                	<label>Catagory:</label>
                      <select name="select">
                   <?php echo $supplierCat ; ?>
                    </select>	
                </div>
            </p>                              
            <p>
                <div align="left">
                	<label>Email :</label>
                 <input type="text" name="email" value="<?php echo $email;?>" id="email" />
                </div>
            </p> 
             <p>
                <div align="left">
                	<label>Company Address:</label>
                    <textarea name="address"><?php echo $address;?></textarea>
                </div>
            </p> 
            <p>
                <div align="left">
                	<label>Company Phone:</label>
                    <input type="text" name="phone" value="<?php echo $phone;?>" id="phone">
                </div>
            </p> 
            <p>
                <div align="left">
                	<label>Company Fax</label>
                    <input type="text" name="fax" value="<?php echo $fax;?>" id="fax" />
                </div>
            </p> 
             
             <p>
                <div align="left">
                	<label>TIN :</label>
                    <input type="text" name="tin" value="<?php echo $tin;?>" id="tin" />
                </div>
            </p>
            <p>
                <div align="left">
                	<label>VAT :</label>
                    <input type="text" name="vat" value="<?php echo $vat;?>" id="vat" />
                </div>
            </p>
            <p>
                <div align="left">
                	<label>Trade Licance :</label>
                    <input type="text" name="tradelicance" value="<?php echo $tradelicance;?>" id="tradelicance" />
                </div>
            </p>
             <p>
                <div align="left">
                	<label>Tax Holiday:</label>
                     <input type="radio" name="taxholiday" id="taxholiday" value="Yes" class="rediobutton" <?php 
					 if($taxholiday=="Yes"){ ?> checked="checked" <?php } ?>/>
                     <span class="rediobuttonfont">yes                     </span>
                     <span class="rediobuttonfont">
                 <input name="taxholiday" type="radio" class="rediobutton" id="taxholiday" value="No" <?php 
					 if($taxholiday=="No"){ ?> checked="checked" <?php } ?> /> 
                 No                </span></div>
      </p>
            <div id="submit_set">
              <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="41%" align="right">&nbsp;</td>
                  <td width="32%">&nbsp;</td>
                <td width="27%" align="left"><input type="hidden" name="supplier_id" id="supplier_id" value="<?php echo $supplier_id;?>"/> <input class="button" name="Submit" type="submit" value="Update" id="Submit"/></td>
                </tr>
              </table>
			</div>

           
          </div>  
						
		
	</table>		
</form>

<script src="js/rajib_script.js" type="text/javascript"></script>
		