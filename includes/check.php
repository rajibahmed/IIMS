<?php
$resellerid=$_SESSION[resellerid];
if($resellerid==NULL)
{
	echo "<script>top.location=('login.php');</script>";
}


?>