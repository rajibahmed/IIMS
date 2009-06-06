<?php
require_once ("../../lib/office.class.php");

$objOfficeUpdate = new Office();
	$officeID=$_POST['officeID'];
	$officeName=$_POST['officeName'];
	$address=$_POST['address'];	
	$phone = $_POST['phone'];
	$mail = $_POST['mail'];

		if($officeID!=NULL)
		{
			$objOfficeUpdate->updateOfficeGroup($officeID,$officeName,$address,$phone,$mail);
			echo "<b>Data Save Successsfull<b>";
		}	
		
?>