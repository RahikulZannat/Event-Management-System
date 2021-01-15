<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>AR Employee</title>
</head>
<body>
	<center>
	<h1>Add Employee/Remove Employee</h1>


	<form>
	<fieldset>
		<legend>Add/Remove</legend>
	<table border="2">
		<tr>
			<td>Add User ID: </td>
		</tr>
		
				<tr>
			
			<td align="center">
				<input type="button" onclick="location.href='Ruserregistration.php';" value="ADD" />
				
				
			</td>

		<tr>
			<td>Remove User ID: </td>
		</tr>
		
		
			<tr>
			
			<td align="center">
				<input type="button" onclick="location.href='Remployeelist.php';" value="Remove" />
				
				
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