<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Photographer Admin Interface</title>
</head>
<body>
	<center>
		<h1>Welcome to Photographer Admin Home </h1>
	<form>
	<fieldset>
		<legend>Photographer Admin InterFace</legend>
	<table border="2">
		<tr>
			<td>Add photographer/Remove photographer ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='Parphotographer.php';" value="Add/Remove Photographer" />		
			</td>
		</tr>
		<tr>
			<td colspan="2"></td>
		</tr>
		
		
		<tr>
			<td>Edit photographer Profile ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='Peditphotographerprofile.php';" value="Edit Profile" />		
			</td>
		</tr>
		<tr>
			<td colspan="2"></td>
		</tr>
		
		<tr>

			<td>Check Profiles Informations ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='photographerlist.php';" value="Check" />		
			</td>
		</tr>
		<tr>
			<td colspan="2"></td>
		</tr>
		
		<tr>
			<td>Manage Albums ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='Pmanagealbum.php';" value="Albums" />		
			</td>
		</tr>
		<tr>
			<td colspan="2"></td>
		</tr>
		
		<tr>
			<td>Add Photographer ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='Paddphoto.php';" value="Add Photographer" />		
			</td>
		</tr>
		<tr>
			<td colspan="2"></td>
		</tr>
		
		<tr>
			<td>Remove Photographer ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='Premovephoto.php';" value="Remove Photographer" />		
			</td>
		</tr>
		<tr>
			<td colspan="2"></td>
		</tr>
		
		<tr>
			<td>Manupulate Information for all users ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='Pmanuinfo.php';" value="Manupulate info" />		
			</td>
		</tr>
		<tr>
			<td colspan="2"></td>
		</tr>
		
		<tr>
			<td>Manupulate PhotographerAdmin Profile ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='Pmanuadmin.php';" value="Manupulate Admin Profile" />		
			</td>
		</tr>
		<tr>
			<td colspan="2"></td>
		</tr>
		
		
		
		<tr>
			<td>Salary Information ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='Psalary.php';" value="Salary" />		
			</td>
		</tr>
		 
		
		
		<tr>
			<td colspan="2"></td>
		</tr>
		
		<tr>
			<td>Edit User ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='Peditphotographerprofile.php';" value="Edit User" />		
			</td>
		</tr>

		<tr>
			<td colspan="2"></td>
		</tr>
		

		<tr>
			<td>User Registration ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='Puserregistration.php';" value="Registration" />		
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