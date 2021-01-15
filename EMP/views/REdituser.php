<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Customer user Profile</title>
</head>
<body>
	<center>
	<h1>Edit User Profile</h1>


	<form>
	<fieldset>
		<legend>Add/Remove</legend>
	<table>
		<tr>
			<td>Add Customer User ID: </td>
		</tr>
		<tr>	
			<td><input type="number" name="" value=""/></td>
		</tr>
				<tr>
			
			<td align="left">
				<input type="button" onclick="location.href='Admininterface.php';" value="ADD" />
				
				
			</td>

		<tr>
			<td>Remove Customer User ID: </td>
		</tr>
		<tr>	
			<td><input type="number" name="" value=""/></td>
		</tr>
		
		
			<tr>
			
			<td align="left">
				<input type="button" onclick="location.href='Admininterface.php';" value="Remove" />
				
				
			</td>
		</tr>
		<tr>
			
			<td align="left">
				
				<a href="Admininterface.php">Go Back..</a>
				
			</td>
		</tr>
		
	</table>
	</fieldset>
	</form>
	</center>
</body>
</html>