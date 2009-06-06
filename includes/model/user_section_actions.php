<?php 

	include('../../lib/section.class.php');
	$creatUserSection = new Section;
		
	
				
			$name_section= $_POST['section_name'];
			$department= $_POST['department'];
			$office= $_POST['office'];
			
			$getData="'','$name_section','$department','$office'";
			
			//print_r($_POST);

			$creatUserSection->CreateUserSection($getData);		
			echo "<b>Data successfully saved.</b>";

?>