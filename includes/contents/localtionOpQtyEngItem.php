<?php
require_once ("../../lib/stock.class.php");
require_once('../../lib/defination.class.php');
$objStockItemInfo = new Stock();


$StockLocationInfo=$objStockItemInfo->retriveLocation();
$rowStockLocation=count($StockLocationInfo);


$stockMachineName=options_for_select(	$objStockItemInfo->retriveMachineName(),
											'm_id',
											'm_name',
											true	
										);





?>
<link href="../../css/stylesheet.css" rel="stylesheet" type="text/css" />
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
<script type="text/javascript" src="lang/calendar-en.js"></script>


<script type="text/javascript" language="javascript" src="../../js/jquery.autocomplete.pack.js"></script>

<form  id="CreateStockItem" name="CreateStockItem" method="post"   action="../model/localtionOpQty_actions.php">

<br>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="font3">Location</td>
    <td class="font3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Qty</td>
    <td class="font3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rate</td>
    <td class="font3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Value</td>
  </tr>
  
  <tr class="small_row_elements">
    <td><select name="locationID[]" id="locationID[]" class="inventori_txtfield" >
            <option value="0">Primary </option>
            <?php
					for($i=0; $i<$rowStockLocation; $i++)
					 {
				
				 ?>
            <option value="<?php echo $StockLocationInfo[$i]['stock_location_id']; ?>" > <?php echo $StockLocationInfo[$i]['stock_location_name']; ?></option>
            <?php } ?>
          </select></td>
    <td><input type="text"  name="item_qty[]"  class="item_qty"/></td>
    <td>			<input type="text"  name="item_rate[]"  class="item_rate" />
</td>
    <td><input type="text" name="item_total[]" value="" class="item_total"/></td>
  </tr>
  <tr >
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
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
	
	$('.item_rate').blur(function(){
		var parent= $(this).parent().parent();
		var qty  = parseFloat(parent.find('.item_qty:first').val());
		var rate = parseFloat(parent.find('.item_rate:first').val());
		//alert(qty);
		var total= qty*rate;
		parent.find('.item_total:first').attr('value',total);
		return false;
	})   
	
	$(".date").dynDateTime({
	//showsTime: true,
	ifFormat:"%Y-%m-%d %H:%M:%S",
	});	    
	
		
</script>

		