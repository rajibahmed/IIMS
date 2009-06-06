<?php

require_once ("../../lib/stock.class.php");
$objManamTest = new Stock();
$AllinfoInHere=$objManamTest->retriveManamTest(); // call function through obj name  Exp   objname->functionName
 $rowCounter=count($AllinfoInHere);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form  id="Createtest" name="Createtest" method="post"  onsubmit="return saveFormData(Createtest)" action="includes/model/manam_action.php">
<table width="50%" border="0" align="center" cellpadding="2" cellspacing="5">
  <tr>
    <td colspan="2" align="center">Just for test</td>
  </tr>
  <tr>
    <td width="50%" align="center">Name:</td>
    <td width="50%"><input type="text" name="txt_nam" id="txt_nam" /></td>
  </tr>
  <tr>
    <td align="center">Age:</td>
    <td><input type="text" name="txt_age" id="textfield4" /></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td><input type="submit" name="button" id="button2" value="Submit" /></td>
  </tr>
</table>
<br />
  <table width="50%" border="0" align="center" cellpadding="2" cellspacing="5">
    <tr>
        <td colspan="2" align="center">Just for test</td>
      </tr>

      <tr>
       <?php
    		while($info=mysql_fetch_array($rowCounter));
    	{
		?>
        <td width="50%" align="center">Name:</td>
        <td width="50%"><?php echo $info['man_name']; ?></td>
      </tr>
      <tr>
        <td align="center">Age:</td>
        <td><?php echo $info['man_age']; ?></td>
      </tr>
      <tr>
      <?php } ?>
        <td align="center">&nbsp;</td>
        <td><input type="submit" name="btn_StkDept" id="button" value="Submit" /></td>
      </tr>
    </table>
    
    <br>
    
</form>
</body>
</html>
