<?php  
	require_once('../../lib/defination.class.php');
	include('../../lib/supplier.class.php');
	$objSuppCatInfo = new Supplier();
	
	$supplierCat=options_for_select($objSuppCatInfo->retriveSupplierCategoryInfo(),
											'supp_cat_id',
											'supp_cat_name',
											true	
										);
	
	
?>
<link href="../../css/stylesheet.css" rel="stylesheet" type="text/css" />


            	<div class="rightcontent1">
                	<div class="bodybanner1"></div>
                    <div class="bodybanner2">Create Supplier</div>
                    <div class="bodybanner3"></div>
                </div>
<div id="note"> </div>				
<form id="supplierForm" name="supplierForm" method="post"   action="includes/model/supplier_actions.php" >
	<table width="100%" border="0" cellpadding="2" cellspacing="2" class="form" >
		
		  <th colspan="2">
	  
		
		
         <div class="vertical_form">
            <p>
                <div align="left">
                	<label>Name:</label>
                    <input type="text" name="name" value="" id="name">
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
                 <input type="text" name="email" value="" id="email" />
                </div>
            </p> 
             <p>
                <div align="left">
                	<label>Company Address:</label>
                    <textarea name="address"></textarea>
                </div>
            </p> 
            <p>
                <div align="left">
                	<label>Company Phone:</label>
                    <input type="text" name="phone" value="" id="phone">
                </div>
            </p> 
            <p>
                <div align="left">
                	<label>Company Fax</label>
                    <input type="text" name="fax" value="" id="fax" />
                </div>
            </p> 
             
             <p>
                <div align="left">
                	<label>TIN :</label>
                    <input type="text" name="tin" value="" id="tin" />
                </div>
            </p>
            <p>
                <div align="left">
                	<label>VAT :</label>
                    <input type="text" name="vat" value="" id="vat" />
                </div>
            </p>
            <p>
                <div align="left">
                	<label>Trade Licance :</label>
                    <input type="text" name="tradelicance" value="" id="tradelicance" />
                </div>
            </p>
             <p>
                <div align="left">
                	<label>Tax Holiday:</label>
                     <input type="radio" name="taxholiday" id="taxholiday" value="Yes" class="rediobutton" />
                     <span class="rediobuttonfont">yes                     </span>
                     <span class="rediobuttonfont">
                 <input name="taxholiday" type="radio" class="rediobutton" id="taxholiday" value="No" /> 
                 No                </span></div>
      </p>
            <div id="submit_set">
              <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td align="right"><a href="includes/contents/list_all/list_all_supplier.php?height=200&width=600" title="Supplier" class="thickbox button2">List All </a>    
               </td>
                  <td>&nbsp;</td>
                  <td align="left"> <input class="button" name="Submit" type="submit" value="Submit" id="Submit"/></td>
                </tr>
              </table>
			</div>

           
          </div>  
						
		
	</table>		
</form>
<div class="rightimg3">
                    	<div class="downimg1"></div>
                        <div class="downimg2"></div>
                        <div class="downimg3"></div>
                    </div>

<script type="text/javascript" src="js/thickbox-compressed.js"> </script>	
				