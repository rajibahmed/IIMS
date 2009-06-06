<?php
require_once ("../../lib/stock.class.php");
require_once('../../lib/defination.class.php');
include('../../lib/supplier.class.php');
include('../../lib/lc.class.php');
include('../../lib/lot.class.php');

$objStockItemInfo = new Stock();


$StockLocationInfo=$objStockItemInfo->retriveLocation();
$rowStockLocation=count($StockLocationInfo);


$stockMachineName=options_for_select(	$objStockItemInfo->retriveMachineName(),
											'm_id',
											'm_name',
											true	
										);
										
$Supplier = new Supplier;
$outputSupplierItem=options_for_select($Supplier->retriveSupplierInfo(),
									'sup_id',
									'sup_name',
									true);	
$LC = new LC;
$outputLC=options_for_select($LC->retriveLcInfo(),
									'lc_id',
									'lc_name',
									true);	
$Lot = new Lot;
$outputLot=options_for_select($Lot->retriveLotInfo(),
									'lot_id',
									'lot_name',
									true);											

										




?>
<link href="../../css/stylesheet.css" rel="stylesheet" type="text/css" />
<link type="text/css" href="../../css/dyndatetime/calendar-blue2.css" rel="stylesheet"/>
<script language="javascript" type="text/javascript" src="../../js/ajax.js"></script>
<script type="text/javascript" language="javascript" src="../../js/ajax_utils_1.js"></script>
<script type="text/javascript" language="javascript" src="../../js/sdmenu.js"> </script>

<script type="text/javascript" src="../../js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../../js/jquery-ui-1.7.1.custom.min.js"></script>
<script type="text/javascript" language="javascript" src="../../js/thickbox-compressed.js"></script>
<script language="javascript" type="text/javascript" src="../../js/tree.js"></script>
<script language="javascript" type="text/javascript" src="../../js/stock_item_tree.js"></script>
<script type="text/javascript" language="javascript" src="../../js/jquery.form.js"></script>
<script type="text/javascript" language="javascript" src="../../js/jquery.validate.pack.js"></script> 
<script type="text/javascript" language="javascript" src="../../js/jquery.dynDateTime.min.js"></script> 
<script type="text/javascript" src="../../lang/calendar-en.js"></script>


<script type="text/javascript" language="javascript" src="../../js/jquery.autocomplete.pack.js"></script>

<form  id="CreateStockItem" name="CreateStockItem" method="post"   action="../model/localtionOpQty_actions.php">

<br>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>Date</td>
    <td>Location</td>
    <td>Lot</td>
    <td>LC</td>
    <td>Supplier</td>
    <td>Machine</td>
    <td>Qty</td>
    <td>Rate</td>
    <td>Value</td>
  </tr>
  
  <tr class="small_row_elements">
    <td><input type="text" name="date_of_submit" value="" id="submit_date" class="date" /></td>
    <td><select name="locationID[]" id="locationID[]" class="inventori_txtfield" >
            <option value="0">Primary </option>
            <?php
					for($i=0; $i<$rowStockLocation; $i++)
					 {
				
				 ?>
            <option value="<?php echo $StockLocationInfo[$i]['stock_location_id']; ?>" > <?php echo $StockLocationInfo[$i]['stock_location_name']; ?></option>
            <?php } ?>
          </select></td>
    <td><select name="select" id="select" class="inventori_txtfield" >
      <?php echo $outputLot; ?>
    </select></td> 
    <td><select name="select" id="select" class="inventori_txtfield" >
      <?php echo $outputLC; ?>
    </select></td>
    <td><select name="select" id="select" class="inventori_txtfield" >
      <?php echo $outputSupplierItem; ?>
    </select></td>
    <td><select name="stkMName" id="stkMName" class="inventori_txtfield" style="width:150px" >
      <?php echo $stockMachineName; ?>
    </select></td>
    <td><input type="text"  name="item_qty[]"  class="item_qty"/></td>
    <td><input type="text"  name="item_rate[]"  class="item_rate" /></td>
    <td><input type="text" name="item_total[]" value="" class="item_total"/></td>
  </tr>
</table>
	



<div id="add_remove"> 
	<a class='button' href="#" id="add_input" >Add Item </a>
	<a class='button' href="#" id="remove_input" >Remove Item </a>
</div>


   
			<input class='button' id="btn_save"type="submit" 
			name="submit" value="Save" />
		
</form>
		
<script type='text/javascript'>


  	
   	
   	

  
	
		function add_element() {
		var parent =$('.small_row_elements:last');
		parent
			.clone(true)
			.insertAfter(parent)
			.find('input').attr('value','')
			.effect();
	}

	
	$("#remove_input").click(function (){
		$(".small_row_elements:last")
			.slideUp(function(){
				$(this).remove();
			}); 
		return false;
	})
	
	
  	$("#add_input").live("click", function(){
      	add_element();
      	return false;
    });
	
	$(".date").dynDateTime({
	//showsTime: true,
	ifFormat:"%Y-%m-%d %H:%M:%S",
	});	 
	
	$('.item_rate').blur(function(){
		var parent= $(this).parent().parent();
		var qty  = parseFloat(parent.find('.item_qty:first').val());
		var rate = parseFloat(parent.find('.item_rate:first').val());
		//alert(qty);
		var total= qty*rate;
		parent.find('.item_total:first').attr('value',total);
		return false;
	})   
	
		
</script>

		