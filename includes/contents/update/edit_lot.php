<?php
require_once ("../../../lib/lot.class.php");
$lot_id = $_GET['lot_id'];

$objLotInfo = new Lot();
$LotById=$objLotInfo->retriveLotById($lot_id);

		$lot_name =$LotById[0]['lot_name'];
?>

<div id="note"> </div>				
<form id="lotForm" name="lotForm" method="post"   action="includes/model/lot_actions_update.php" >
     <?php 
	require_once "../partials/_form_lot.php";
	?>
        <div id="submit_set">
             <table width="100%" border="0" cellpadding="0" cellspacing="0">
               <tr>
                 <td align="right">&nbsp;</td>
                 <td>&nbsp;</td>
                 <td align="left">&nbsp;</td>
               </tr>
               <tr>
                 <td width="40%" align="right"><input type="hidden" name="lot_id" id="lot_id" value="<?php echo $lot_id;?>"/></td>
                 <td width="11%"><input class="button" name="Submit" type="submit" value="Update" id="Submit"/></td>
                 <td width="49%" align="left">&nbsp;</td>
               </tr>
            </table>
	      </div>
        </div>  
	</table>		
</form>

<script type="text/javascript" src="js/thickbox-compressed.js"> </script>
<script src="js/rajib_script.js" type="text/javascript"></script>	
				