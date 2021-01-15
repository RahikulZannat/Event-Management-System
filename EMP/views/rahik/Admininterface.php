<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Interface</title>
</head>
<body>
	<center>
		<h1>Welcome to Admin Home </h1>
	<form>
	<fieldset>
		<legend>Admin InterFace</legend>
	<table border="2">
		<tr>
			<td>Add employee/Remove employee ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='Raremployee.php';" value="Add/Remove Employee" />		
			</td>
		</tr>
		<tr>
			<td colspan="2"></td>
		</tr>
		
		
		<tr>
			<td>Edit employee Profile ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='Reditemployeeprofile.php';" value="Edit Profile" />		
			</td>
		</tr>
		<tr>
			<td colspan="2"></td>
		</tr>
		
		<tr>

			<td>Check Profiles Informations ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='Remployeelist.php';" value="Check" />		
			</td>
		</tr>
		<tr>
			<td colspan="2"></td>
		</tr>
		
		<tr>
			<td>Manage Projects ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='Rmanageproject.php';" value="Projects" />		
			</td>
		</tr>
		<tr>
			<td colspan="2"></td>
		</tr>
		
		<tr>
			<td>Add Photographer ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='Raddphoto.php';" value="Add Photographer" />		
			</td>
		</tr>
		<tr>
			<td colspan="2"></td>
		</tr>
		
		<tr>
			<td>Remove Photographer ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='Rremovephoto.php';" value="Remove Photographer" />		
			</td>
		</tr>
		<tr>
			<td colspan="2"></td>
		</tr>
		
		<tr>
			<td>Manupulate Information for all users ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='Rmanuinfo.php';" value="Manupulate info" />		
			</td>
		</tr>
		<tr>
			<td colspan="2"></td>
		</tr>
		
		<tr>
			<td>Manupulate Admin Profile ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='Rmanuadmin.php';" value="Manupulate Admin Profile" />		
			</td>
		</tr>
		<tr>
			<td colspan="2"></td>
		</tr>
		
		<tr>
			<td>Add Catering Employee ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='Raddcatering.php';" value="Catering Employee" />		
			</td>
		</tr>
		<tr>
			<td colspan="2"></td>
		</tr>
		
		
		
		
		<tr>
			<td>Salary Information ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='Rsalary.php';" value="Salary" />		
			</td>
		</tr>
		 
		
		
		<tr>
			<td colspan="2"></td>
		</tr>
		
		<tr>
			<td>Edit User ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='Reditemployeeprofile.php';" value="Edit User" />		
			</td>
		</tr>

		<tr>
			<td colspan="2"></td>
		</tr>
		

		<tr>
			<td>User Registration ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='Ruserregistration.php';" value="Registration" />		
			</td>
		</tr>
		
		<tr>
			<td colspan="2"></td>
		</tr>
		
		<tr>
			
			<td align="left" colspan="2">
				<input type="button" onclick="location.href='logout.php';" value="Logout" />
				
			</td>
		</tr>

	</table>
	</fieldset>
	</form>
	</center>

	
</body>
</html>