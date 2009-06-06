<?php

require_once ("../../lib/stock.class.php");
$objStockCatInfo = new Stock();
$StockCatInfo=$objStockCatInfo->retriveStockCatUnderInfo();
$rowStockCatUnderInfo=count($StockCatInfo);


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="../../css/stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form  id="CreateStockCat" name="CreateStockCat" method="post"  onsubmit="return saveFormData2(CreateStockCat)" action="includes/model/stock_catagory_actions.php">
  <table width="60%" border="0" cellspacing="2" cellpadding="2">
    <tr>
      <td>Name</td>
      <td><input name="txtStkCatName" type="text" id="txtStkCatName" /></td>
    </tr>
    
    <tr>
      <td>Under</td>
      <td>
	  		<select name="StockCatUnderName" >
	 			 <?php
					for($i=0; $i<$rowStockCatUnderInfo; $i++)
					 {
				
				 ?>
                <option value="<?php echo $StockCatInfo[$i]['stock_cat_id']; ?>" > <?php echo $StockCatInfo[$i]['stock_cat_name']; ?></option>
                <?php } ?>
		 </select>      </td>
    </tr>
    <tr>
      <td colspan="2">
        <div align="center">
          <input name="btn_StkCat" type="submit" class="button" id="btn_StkCat" value="Create Stock Catagory" />
        </div></td>
    </tr>
  </table>
</form>
</body>
</html>
