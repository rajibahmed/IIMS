<?php
 	
	//$indent=new Indent;
	$requisition= new Requisition;
	 $req_data= $requisition->ReqByPower($_SESSION[user_level]);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="requisitionForm" name="requisitionForm" method="post"  onsubmit="return saveFormData(requisitionForm)" action="includes/model/requisition_actions.php" ><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><strong>Item Name </strong></td>
    <td><strong>Description</strong></td>
    <td><strong>Qunatity</strong></td>
    <td><strong>Value</strong></td>
    <td>&nbsp;</td>
  </tr>
  
<?php  for($i=0;$i<count($req_data);$i++) { ?>
  <tr>
    <td><?php  echo $req_data[$i]["stock_item_name"] ;?></td>
    <td><?php  echo $req_data[$i]["stock_item_desc"] ;?></td>
    <td><?php  echo $req_data[$i]["required_stock_item_qty"] ;?></td>
    <td><?php  echo $req_data[$i]["approx_value"] ;?></td>
    <td>&nbsp;</td>
  </tr>
  
 <?php } ?> 
 <tr>
    <td colspan="4"><input name="btn_send_req" type="submit" id="btn_send_req" value="Send Requisition" /></td>
    <td>&nbsp;</td>
  </tr>
</table></form>
</body>
</html>
