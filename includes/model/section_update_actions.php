<?php
require_once ("../../lib/section.class.php");

$objSectionUpdate = new Section();
	$secid=$_POST['secid'];
	$section_name=$_POST['section_name'];
	$department=$_POST['department'];
	$officeName=$_POST['officeName'];
	
	
			$objSectionUpdate->updateSection($secid,$section_name,$department,$officeName);
			echo "<b>Data Save Successsfull<b>";
		
?>