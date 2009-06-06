<?php  
	//require_once('../../lib/defination.class.php');
	//require_once('../../lib/company.class.php');
	#$company=new Company();
	// 
	// if($company->CheckCreated())
	// {
	// 	e("<h1>Update company</h1>");
	// }
	// else
	// {
?>


<div class="rightcontent1"> </div>
<form id="companyForm" name="companyForm" method="post"  onsubmit="return saveFormData(companyForm)" action="includes/model/company_actions.php" >
	<?php
		require_once('_form_company.php');
		form_company();
	 ?>		
		
	<div id="submit_set"> 
		<input class='button' id="btn_save"type="submit" name="submit" value="Save" />
	</div>
</form>
<?php# } ?>