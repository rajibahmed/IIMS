<?php  
	require_once('../../lib/defination.class.php');
	include('../../lib/company.class.php');
	$company = new Company();
	
	// if($company->CheckCreated())
	// {
	// 	e("<h1>Update company</h1>");
	// }

?>


 <div class="rightcontent1">
        <div class="bodybanner1"></div>
        <div class="bodybanner2"></div>
        <div class="bodybanner3"></div>
    </div>
<form id="companyUpdateForm" name="companyUpdateForm" method="post"  onsubmit="return saveFormData(companyUpdateForm)" action="includes/model/company_actions.php" >
	<?php
		require_once '_form_company.php';
		form_company($company->CheckCreated());
	 ?>		

	<div id="submit_set"> 
		<input class="button" name="update" type="submit" value="Submit"/> 
	</div>	
</form>
<div class="rightimg3">
        <div class="downimg1"></div>
        <div class="downimg2"></div>
        <div class="downimg3"></div>
</div>
