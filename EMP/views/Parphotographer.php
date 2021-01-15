<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>AR Photographer</title>
</head>
<body>
	<center>
	<h1>Add Photographer/Remove Photographer</h1>


	<form>
	<fieldset>
		<legend>Add/Remove</legend>
	<table border="2">
		<tr>
			<td>Add User ID: </td>
		</tr>
		
				<tr>
			
			<td align="center">
				<input type="button" onclick="location.href='Puserregistration.php';" value="ADD" />
				
				
			</td>

		<tr>
			<td>Remove User ID: </td>
		</tr>
		
		
			<tr>
			
			<td align="center">
				<input type="button" onclick="location.href='Photographerlist.php';" value="Remove" />
				
				
			</td>
		</tr>
		<tr>
			
			<td align="left">
				
				<a href="PhotographerAdmininterface.php">Go Back..</a>
				
			</td>
		</tr>
		
	</table>
	</fieldset>
	</form>
	</center>
</body>
</html>