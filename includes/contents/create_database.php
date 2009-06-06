
<form id="databaseForm" name="databaseForm" method="post"  onsubmit="return saveFormData(databaseForm)" action="includes/model/create_database_actions.php" >
	<table border="0">
	<tr>
		<th>Database:</th>
		<td><input type="text" name="database" value="" id="database"></td>
	</tr>
	<tr>
		<th>User:</th>
		<td><input type="text" name="user" value="root" id="user"></td>
	</tr>
	<tr>
		<th>Password</th>
		<td><input type="password" name="pass" value="" id="pass"></td>
	</tr>
	<tr>
		<th>Host name:</th>
		<td><input type="text" name="host" value="" id="host"></td>
	</tr>		
	<tr> <td colspan="2"><input type="submit" name="submit" value="Create Database"> </td></tr>			
	</table>		
</form>