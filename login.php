<?php
require_once('lib/defination.class.php');
require_once ("lib/user_login.class.php");
$message="";
 if (isset($_POST['action']) && ($_POST['action'] == 'checkLogin'))
  {
  	$selresellerType=$_POST[selresellerType];
	$username =$_POST[txtUsername];
	$password=$_POST[txtPassword];
	
	$obUuser_login = new user_login();
	
	$userLoginData = $obUuser_login->retriveUserInfoByUsernamePassword($username, $password,$selresellerType);
	
		$userid=$userLoginData[0]['user_id'];
		if($userid!=NULL)
		{
			$_SESSION[user_level]=$userLoginData[0]['user_level'];
			$_SESSION[user_dept]=$userLoginData[0]['user_dept'];
			//$_SESSION[callsLimit]=$userLoginData[0]['callsLimit'];
			//$_SESSION[clientsLimit]=$userLoginData[0]['clientsLimit'];
			
			
				//echo $selresellerType;		
			echo "<script>top.location=('index.php');</script>";
		}
		else
		{
			$message="Your Username or Password is not valid";
		}
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0014)about:internet -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>login.jpg</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">td img {display: block;}</style>
<!--Fireworks CS3 Dreamweaver CS3 target.  Created Fri Jan 23 02:16:33 GMT+0600 (Central Asia Standard Time) 2009-->
</head>
<body bgcolor="#ffffff">
<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
<!-- fwtable fwsrc="images/login.png" fwpage="Page 1" fwbase="login.jpg" fwstyle="Dreamweaver" fwdocid = "1509269395" fwnested="0" -->
  <tr>
   <td><img src="images/images/spacer.gif" width="5" height="1" border="0" alt="" /></td>
   <td><img src="images/images/spacer.gif" width="14" height="1" border="0" alt="" /></td>
   <td><img src="images/images/spacer.gif" width="183" height="1" border="0" alt="" /></td>
   <td><img src="images/images/spacer.gif" width="8" height="1" border="0" alt="" /></td>
   <td><img src="images/images/spacer.gif" width="59" height="1" border="0" alt="" /></td>
   <td><img src="images/images/spacer.gif" width="126" height="1" border="0" alt="" /></td>
   <td><img src="images/images/spacer.gif" width="5" height="1" border="0" alt="" /></td>
   <td><img src="images/images/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td><img name="login_r1_c1" src="images/login_r1_c1.jpg" width="5" height="82" border="0" id="login_r1_c1" alt="" /></td>
   <td colspan="2"><img name="login_r1_c2" src="images/logo.jpg" width="197" height="82" border="0" id="login_r1_c2" alt="" /></td>
   <td><img name="login_r1_c4" src="images/login_r1_c4.jpg" width="8" height="82" border="0" id="login_r1_c4" alt="" /></td>
   <td colspan="2"><img name="login_r1_c5" src="images/login_r1_c5.jpg" width="185" height="82" border="0" id="login_r1_c5" alt="" /></td>
   <td><img name="login_r1_c7" src="images/login_r1_c7.jpg" width="5" height="82" border="0" id="login_r1_c7" alt="" /></td>
   <td><img src="images/spacer.gif" width="1" height="82" border="0" alt="" /></td>
  </tr>
  <tr>
   <td background="images/login_r2_c1.jpg"><img name="login_r2_c1" src="images/login_r2_c1.jpg" width="5" height="169" border="0" id="login_r2_c1" alt="" /></td>
   <td colspan="5" align="center" valign="top" bgcolor="#D3DFCB"><form id="form1" name="form1" method="post" action="">
     <table width="100%" border="0" cellspacing="0" cellpadding="3">
       <tr>
         <td colspan="2" class="title"><div align="center">Use a valid username and password to gain access to the administration console</div></td>
       </tr>
       <tr>
         <td colspan="2" align="center" class="errorMessage"><?php echo $message;?></td>
         </tr>
       <tr>
         <td width="33%" align="right" class="title">&nbsp;</td>
         <td width="67%" align="left">&nbsp;</td>
       </tr>
       <tr>
         <td align="right" class="title">Username : </td>
         <td align="left"><input name="txtUsername" type="text" id="txtUsername" size="25" /></td>
       </tr>
       <tr>
         <td align="right" class="title">Password : </td>
         <td align="left"><input name="txtPassword" type="password" id="txtPassword" size="25" /></td>
       </tr>
       <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
       </tr>
       <tr>
         <td>&nbsp;</td>
         <td align="left"><input type="image" name="submit" id="submit" src="images/login_button.gif" alt="submit" border="0">
           	<input type="image" name="Reset" id="Reset" src="images/cancel_button.gif" alt="reset" border="0"></td>
       </tr>
     </table>
     <input type="hidden" name="action" id="action" value="checkLogin">
      </form>
   </td>
   <td background="images/login_r2_c7.jpg"><img name="login_r2_c7" src="images/login_r2_c7.jpg" width="5" height="169" border="0" id="login_r2_c7" alt="" /></td>
   <td><img src="images/spacer.gif" width="1" height="169" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img name="login_r3_c1" src="images/login_r3_c1.jpg" width="5" height="52" border="0" id="login_r3_c1" alt="" /></td>
   <td><img name="login_r3_c2" src="images/login_r3_c2.jpg" width="14" height="52" border="0" id="login_r3_c2" alt="" /></td>
   <td colspan="3"><img name="login_r3_c3" src="images/login_r3_c3.jpg" width="250" height="52" border="0" id="login_r3_c3" alt="" /></td>
   <td><img name="login_r3_c6" src="images/login_r3_c6.jpg" width="126" height="52" border="0" id="login_r3_c6" alt="" /></td>
   <td><img name="login_r3_c7" src="images/login_r3_c7.jpg" width="5" height="52" border="0" id="login_r3_c7" alt="" /></td>
   <td><img src="images/spacer.gif" width="1" height="52" border="0" alt="" /></td>
  </tr>
</table>
</body>
</html>
