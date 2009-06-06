<?php  
	require_once('../../lib/defination.class.php');
	require_once('../../lib/department.class.php');
	require_once('../../lib/office.class.php');
	require_once('../../lib/user.class.php');


	
	
	
	$UserSection = new User;
	$deparment = new Department;
	$office =new Office;
	
	$userSec=options_for_select($UserSection->GetUserSection(),
								'sec_id',
								'sec_name',
								true);

	$output=options_for_select(	$deparment->GetDepartments(),
								'department_id',
								'department_name',
								true);



	$office_output=options_for_select(	$office->GetOffices(),
								'office_id',
								'office_name',
								true);

	

?>
<div id="test">
<form id="userForm" name="userForm" method="post"   action="includes/model/user_actions.php"  >

    <div class="vertical_form">
        <p>
            <label>User Name:</label> 
			<input class="txtfieldwidth" type="text" name="name" id="user_name">
        </p>
        
        <p>	
			 <label for="login">User Login Name</label> 
			 <input class="txtfieldwidth" type="text" name="login" id="user_login">
     	</p>
     	
		<p> 
			<label>Set Password </label>
			<input class="txtfieldwidth" type="password" name="password" value="" id="user_password">
		</p>      	

		<p> 
			<label>Confirm Password </label>  
			<input class="txtfieldwidth" type="password" name="confirm_password" value="" id="user_confirm_password">
		</p> 
		 
		<p> 
			<label>Email:</label>
			<input class="txtfieldwidth" type="text" name="email" value="" id="email"> 
		</p> 
		
		<p> 
			<label>Address:</label> 
			<textarea  class="txtfieldwidth"  id="address"></textarea> 
		</p> 		
		 
		<p> 
			<label>Contact No.:</label> 
			<input class="txtfieldwidth" type="text" name="contact" value="" id="user_contact">
		</p>	 
		 
		 <p> 
			<label>User Section</label>
			<select class="txtfieldwidth" name="section"><?php e($userSec); ?></select>
		</p>
		 
		<p> 
			<label>Department</label>
			<select class="txtfieldwidth" name="department"><?php e($output); ?></select>
		</p> 
		 
		<p> 
			<label>Office</label>  
			<select class="txtfieldwidth" name="office"><?php e($office_output); ?></select>
		</p> 
		 		
		<p> 
			<label>Designation</label>  
			<input  class="txtfieldwidth" type="text" name="designation" value="" id="user_designation">
		</p>	
			 
		
		<p> 
			<label>User Level</label> 
			<select class="txtfieldwidth" name="level">
				<?php 
					for($i=0;$i<count($user_levels);$i++)
					{
						echo "<option value='$i'>$user_levels[$i]</option>";
					}
			 	?>
			</select>	
		</p>	
		
		
		
	  <div  >
	    <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="middle"><br />
              <table width="40%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="52%" align="center"><a href="includes/contents/list_all/list_all_user.php?height=400&width=800" title="User List"  class="thickbox button2">List All </a></td>
                <td width="2%" align="center">&nbsp;</td>
                <td width="46%" align="center"><input class="button saveButtonwidth" name="submit" type="submit" value="Save"/>
                </td>
              </tr>
            </table></td>
          </tr>
        </table>
	  </div>
	</div>
</form>
</div>
<script type="text/javascript" charset="utf-8">
	
	var options={
			target:'#test',
			beforeSubmit:function(){
				$("#test").slideUp(200).html("");	
			},
			success:function(){
				$("#test").slideDown(200);
			},
	}
		
	$("form").submit(function(){
		$('#btn_save').attr('disabled');
		$(this).ajaxSubmit(options);
		return false;
	})

/*---------------------------------------------------*/
</script>
<script type="text/javascript" src="js/thickbox-compressed.js"> </script>