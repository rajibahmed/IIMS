<?php  
	include('../../../lib/department.class.php');
	include('../../../lib/office.class.php');
	include('../../../lib/user.class.php');
		
	
	
	$Userinfo = new User;
	/*$deparment = new Department;
	$office =new Office;*/
	
	$userid = $_GET['userid'];
	$userInfoByID=$Userinfo->GetUserListByID($userid);
	
	//$userInfoByID=$office->GetOffices();
	
	/*$allOfficeName=$office->GetOffices();
	$rowOffice=count($allOfficeName);
	
	$objDepartment=$department->GetDepartmentsByID($depid);
	$depOfficeID=$objDepartment["0"]["department_office_id"];*/	
?>

<form id="userForm" name="userForm" method="post"  onsubmit="return saveFormData(userForm)" action="includes/model/user_update_actions.php"  >

    <div class="vertical_form">
        <p>
            <label>User Name:</label> 
			<input class="input" type="text" name="name" id="user_name" value="<?php echo $userInfoByID["0"]["user_name"]; ?>">
        </p>
        
       <p>	
			 <label for="login">User Login Name</label> 
			 <input class="input" type="text" name="logName" id="logName" value="<?php echo $userInfoByID["0"]["user_login"]; ?>">
     	</p>
     	
		<p> 
			<label>Old Password </label>
			<input class="input" type="text" name="oldpassword" id="oldpassword" value="<?php echo $userInfoByID["0"]["user_pass_digest"]; ?>">
		</p>      	

		<p> 
			<label>New Password </label>  
			<input class="input" type="password" name="new_password" value="" id="user_confirm_password">
		</p> 
		 
		<p> 
			<label>Email:</label>
			<input class="input" type="text" name="email" id="email" value="<?php echo $userInfoByID["0"]["user_email"]; ?>">
		</p> 
		
		<p> 
			<label>Address:</label> 
			<textarea  name="address"  id="address"><?php echo $userInfoByID["0"]["user_address"]; ?></textarea> 
		</p> 		
		 
		<p> 
			<label>Contact No.:</label> 
			<input class="input" type="text" name="phoneNo" id="phoneNo" value="<?php echo $userInfoByID["0"]["user_contact"]; ?>">
		</p>	 
		 
		 <p> 
			<label>User Section</label>
			<select name="section"><?php /*e($userSec);*/ ?></select>
		</p>
		 
		<p> 
			<label>Department</label>
			<select name="department"><?php /*e($output);*/ ?></select>
		</p> 
		 
		<p> 
			<label>Office</label>  
			<select name="office"><?php /*e($office_output);*/ ?></select>
		</p> 
		 		
		<p> 
			<label>Designation</label>  
			<input class="input" type="text" name="designation" id="designation" value="<?php echo $userInfoByID["0"]["user_designation"]; ?>">
		</p>	
			 
		
		<p> 
			<label>User Level</label> 
			<select name="level">
				<?php 
					/*for($i=0;$i<count($user_levels);$i++)
					{
						echo "<option value='$i'>$user_levels[$i]</option>";
					}*/
			 	?>
			</select>	
		</p>	
		<div  >
	    <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="top"><table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td align="center" valign="middle"></td>
                  <td align="center" valign="middle"><input type="hidden" name="depid" id="depid" value="<?php echo $userid;?>" /></td>
                  <td align="center" valign="middle"><input class="button" name="submit" type="submit" value="Update"/></td>
                </tr>
              </table></td>
          </tr>
        </table>
	  </div>
	</div>
</form>