<?php
require_once ("../../../lib/staple_length.class.php");
$sta_len_id = $_GET['sta_len_id'];

$objSta_LenInfo = new Sta_Len();
$Sta_LenById=$objSta_LenInfo->retriveSta_LenById($sta_len_id);

		$Sta_Len_name =$Sta_LenById[0]['sta_len_name'];
?>

<div id="note"> </div>				
<form id="Sta_LenForm" name="Sta_LenForm" method="post"   action="includes/model/staple_length_actions_update.php" >
     <?php 
	require_once "../partials/_form_staple_length.php";
	?>
        <div id="submit_set">
             <table width="100%" border="0" cellpadding="0" cellspacing="0">
               <tr>
                 <td align="right">&nbsp;</td>
                 <td>&nbsp;</td>
                 <td align="left">&nbsp;</td>
               </tr>
               <tr>
                 <td width="40%" align="right"><input type="hidden" name="sta_len_id" id="sta_len_id" value="<?php echo $sta_len_id;?>"/></td>
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