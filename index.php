<?php
require_once('lib/defination.class.php');
require_once ("lib/user_login.class.php");
$message="";
 if (isset($_POST['submit']) )
  {
  	$selresellerType=$_POST[selresellerType];
	$username =$_POST[txtUsername];
	$password=$_POST[txtPassword];
	
	$obUuser_login = new user_login();
	
	$userLoginData = $obUuser_login->retriveUserInfoByUsernamePassword($username, $password,$selresellerType);
	
		$userid=$userLoginData[0]['user_id'];
		if($userid!=NULL)
		{
			$userDept = $obUuser_login->userBelongsToDept($userLoginData[0]['user_dept']);

			$_SESSION[userid]=$userLoginData[0]['user_id'];
			$_SESSION[user_name]=$userLoginData[0]['user_name'];
			$_SESSION[user_level]=$userLoginData[0]['user_level'];
			$_SESSION[user_dept]=$userLoginData[0]['user_dept'];
			$_SESSION[user_office]=$userLoginData[0][user_office];
			$_SESSION[user_dept_name]=$userDept[0][department_name];	
			echo "<script>top.location=('home.php');</script>";
		}
		else
		{
			$message="Your Username or Password is not valid";
		}
  }
?>

</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link href="css/login.css" rel="stylesheet" type="text/css" />

</head>

<body>	
<div id="sitewrapper">
	  <div class="logo2"></div>
        <div class="login">
         	<div class="boximg1"></div>
        	<div class="boxbg1">
        		<div class="for_form">
                	<form id="form1" name="form1" method="post" action="">
    				<p><label>Name: </label> 
                    <input type="text" name="txtUsername" class="input" size="20" />
    				</p>
    				<p><label>Password: </label> 
                    <input type="password" name="txtPassword" class="input" size="20" />
    				</p>
    				<p><label>&nbsp; </label> 
                    <input type="submit" name="submit" value="Submit" class="button" /> 
                    <input type="submit" value="Cancel" class="button" /></p>
</form> 
                </div>
        </div>
    <div class="boxup1"></div>
         </div>
</div>
     <div id="footerlog">
        	<div class="footerimg1"></div>
            <div class="footerimg2"></div>
        </div>
</body>
</html>
