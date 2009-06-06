<? 
session_start();  
		
if(isset($_SESSION['userid']))
    unset($_SESSION['userid']); 
if(isset($_SESSION['user_level']))
    unset($_SESSION['user_level']); 
if(isset($_SESSION['user_dept']))
    unset($_SESSION['user_dept']); 
if(isset($_SESSION['user_name']))
    unset($_SESSION['user_name']); 
if(isset($_SESSION['resellertype']))
    unset($_SESSION['resellertype']); 

echo "<script>window.parent.location='index.php';</script>";

?>

 