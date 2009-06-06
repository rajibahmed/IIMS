<?php 
function form_company($company = array()){
?>
<div class="vertical_form">		
	<p>
		<label>Company Name:</label>
		<input name="name" type="text" id="company_name" style="width:200px"
		value="<?php 
		echo($company[0]['company_name'] ? $company[0]['company_name'] : ''); ?>" 						 />
	</p>
 
	<p>
		<label>Mailing Address:</label>
		<textarea name="mailing_address" cols="30" rows="" style="font-size:10px"b ><?php 
			echo($company[0]['company_mailing_name'] ? $company[0]['company_mailing_name'] : ''); ?></textarea>
		
	</p>		 


<p>
<label>	Address:</label>
<textarea  name="address" cols="30"  id="address" style="font-size:10px">
<?php 
echo
(
$company[0]['company_address'] ? $company[0]['company_address'] : ''
); 
?>
</textarea>
</p>

	<p>
		<label>Phone:</label>
		<input name="phone" type="text" id="phone" style="width:200px" 	
			value="<?php echo($company[0]['company_phone'] ? $company[0]['company_phone'] : '');  ?>" size="60" 
		/>
	</p>	

	
	<p>
		<label>Email:</label>
		<input name="email" type="text" id="email" style="width:200px" 
		value="<?php echo($company[0]['company_email'] ? $company[0]['company_email'] : '');  ?>" size="60" 
		/> 
	</p>	
	
	<p>
		<label>Financial Year Start:</label>
		<input name="f_date_start"
		type="text"
		class="date" 	id="financial_date_start" 
		value="<?php echo($company[0]['company_financial_year_start'] ? $company[0]['company_financial_year_start'] : '');  ?>" style="width:200px"
		 />
	</p>		
	<p>
		<label>Financial Year End:</label>
		<input 
		name="f_date_end" 
		type="text" 
		class="date"
		id="financial_date_end"		
		value="<?php echo($company[0]['company_financial_year_end'] ? $company[0]['company_financial_year_end'] : '');  ?>" style="width:200px"/>
	</p>
			
			
	<input type="hidden" name="id" value='<?php echo $company[0]['company_id'] ?$company[0]['company_id'] :''; ?>'/>
</div>
<script type="text/javascript" charset="utf-8">
	$('.date').dynDateTime();
</script>

<?php } ?>
