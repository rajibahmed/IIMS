
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript">
function addFormField() {

}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CREATE MACHINE NAME </title>
</head>

<body>
<!--<p><a href="#" onClick="addFormField(); return false;">Add</a></p>
<form action="" method="get">

<input type=hidden id='id' value='1'>
<div id="divTxt"></div>
<input type='submit' value='Submit' name='submit'>
</form>-->

<form  id="Createtest" name="Createtest" method="post"  onsubmit="return saveFormData(Createtest)" action="includes/model/test_actions.php">
  <table width="60%" border="0" cellspacing="2" cellpadding="2">
    <tr>
      <td>&nbsp;</td>
      <td>CREATE MACHINE NAME </td>
    </tr>
    <tr>
      <td>Name</td>
      <td><input name="txtname" type="text" id="txtname" size="40" /></td>
    </tr>
    <tr>
      <td>age</td>
      <td><input name="txtage" type="text" id="txtage" size="40" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">
        <div align="center">
          <input name="btn_StkDept" type="submit" id="btn_StkDept" value="CREATE MACHINE NAME " />
        </div></td>
    </tr>
  </table>
</form>


</body>
</html>
