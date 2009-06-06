<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

select st.*,scd.* ,spd.* from stock_item st,stock_code_details scd,stock_part_details spd where st.stock_item_id=2 AND st.stock_item_id=scd.stock_code_m_id AND st.stock_item_id=spd.	stock_part_m_id  AND scd.stock_code_m_id =spd.stock_part_m_id AND spd.stock_part_m_id=2 AND scd.stock_code_m_id=2

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="0" cellspacing="2" cellpadding="3">
    <tr>
      <td width="1%">&nbsp;</td>
      <td colspan="3" align="center">SAMPLE SENDING TEMPLATE</td>
      <td width="27%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Ref No:</td>
      <td colspan="2" align="right">Date:</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="31%">Sender:</td>
      <td colspan="2"><input type="text" name="textfield" id="textfield" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Name of the Product:</td>
      <td colspan="2"><input type="text" name="textfield2" id="textfield2" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Indent # or Ref #</td>
      <td colspan="2"><select name="select" id="select">
      </select>      </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Department:</td>
      <td colspan="2"><select name="select2" id="select2">
      </select></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="left" valign="top">Attention:</td>
      <td colspan="2"><input type="text" name="textfield4" id="textfield4" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="left" valign="top">Remarks:</td>
      <td colspan="2"><textarea name="textarea" id="textarea" cols="45" rows="5"></textarea></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="left" valign="top">Receiving Dept Comments:</td>
      <td colspan="2"><textarea name="textarea3" id="textarea3" cols="45" rows="5"></textarea></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Quality:</td>
      <td width="16%"><input type="radio" name="radio" id="radio" value="radio" />
        Yes</td>
      <td width="25%"><input type="radio" name="radio" id="radio2" value="radio" /> 
        No</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="left" valign="top">Remarks:</td>
      <td colspan="2"><textarea name="textarea2" id="textarea2" cols="45" rows="5"></textarea></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
