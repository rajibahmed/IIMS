<?php
require_once ("../../../lib/stock.class.php");

$stk_location_id = $_GET['stk_location_id'];

$objStockLocationInfo = new Stock();
$StockLocationInfo=$objStockLocationInfo->retriveLocation();
$rowStockLocation=count($StockLocationInfo);

$StockLocationById=$objStockLocationInfo->retriveLocationById($stk_location_id);
$rowStockSectionById=count($StockLocationById);
for($j=0;$j<$rowStockSectionById;$j++)
{
	$stock_location_name=$StockLocationById[$j]['stock_location_name'];
	$stock_location_address=$StockLocationById[$j]['stock_location_address'];
	$stock_location_city=$StockLocationById[$j]['stock_location_city'];
	$stock_location_phone_no=$StockLocationById[$j]['stock_location_phone_no'];
	$stock_location_fax=$StockLocationById[$j]['stock_location_fax'];
	$stock_location_p_id=$StockLocationById[$j]['stock_location_p_id'];
}

?>


<div id="note"> </div>
<form  id="CreateLocations" name="CreateLocations" method="post"   action="includes/model/stock_location__update_actions.php">
<div id="note"> </div>
  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
    <tr>
      <td height="42">&nbsp;</td>
    </tr>
    <tr>
      <td align="center" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="32%" height="30" align="right" valign="top">Name: &nbsp;</td>
          <td width="64%" align="left" valign="top"><input name="locationName" type="text" id="locationName" size="40" class="inventori_txtfield" value="<?php echo $stock_location_name;?>" /></td>
        </tr>
        <tr>
          <td height="30" align="right" valign="top">Under: &nbsp;</td>
          <td align="left" valign="top"><select name="underLocation" id="underLocation" class="inventori_txtfield" >
        <option value="0">Primary </option>
                	<?php
						$output="";
						
						for($i=0; $i<$rowStockLocation; $i++)
						{
							if($stock_location_p_id && ($StockLocationInfo[$i]['stock_location_id']==$stock_location_p_id))
							{
							$output.= "<option selected value='".$StockLocationInfo[$i]['stock_location_id']."' > ".$StockLocationInfo[$i]['stock_location_name']."</option>";
							}
							else
							{
                			$output.= "<option value='".$StockLocationInfo[$i]['stock_location_id']."' > ".$StockLocationInfo[$i]['stock_location_name']."</option>";
							}
						} 
						
					?>
					<?php echo $output ?>

          </select></td>
        </tr>
        <tr>
          <td height="30" align="right" valign="top">Address: &nbsp;</td>
          <td align="left" valign="top"><input name="locationAdd" type="text" id="locationAdd" size="40" class="inventori_txtfield" value="<?php echo $stock_location_address;?>" /></td>
        </tr>
        <tr>
          <td height="30" align="right" valign="top">City: &nbsp;</td>
          <td align="left" valign="top"><input name="LocationCity" type="text" id="LocationCity" size="40" class="inventori_txtfield" value="<?php echo $stock_location_city;?>"/></td>
        </tr>
        <tr>
          <td height="30" align="right" valign="top">Phone: &nbsp;</td>
          <td align="left" valign="top"><input name="LocationPhone" type="text" id="LocationPhone" size="40" class="inventori_txtfield" value="<?php echo $stock_location_phone_no;?>"/></td>
        </tr>
        <tr>
          <td height="30" align="right" valign="top">Fax: &nbsp;</td>
          <td align="left" valign="top"><input name="LocationFax" type="text" id="LocationFax" size="40" class="inventori_txtfield" value="<?php echo $stock_location_fax;?>"/></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center" valign="top">
        <div align="center">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td align="center" valign="middle">&nbsp;</td>
              <td align="center" valign="middle"><input type="hidden" name="stk_location_id" id="stk_location_id" value="<?php echo $stk_location_id;?>"/></td>
              <td align="center" valign="middle"><input type="submit" name="Submit3" value="Update" class="button2" /></td>
              <td align="center" valign="middle">&nbsp;</td>
              <td align="center">&nbsp;</td>
            </tr>
          </table>
        </div></td>
    </tr>
  </table>
</form>


<script src="js/rajib_script.js" type="text/javascript"></script>