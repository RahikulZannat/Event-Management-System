<?php	
	session_start();
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>AdminReg</title>
</head>
<body>
	<center>
	<h1>Admin Registration</h1>


	<form>
	<fieldset>
		<legend>Admin Registration</legend>
	<table>
		<tr>
			<td>Enter Admin ID</td>
		</tr>
		<tr>	
			<td><input type="number" name="" value=""/></td>
		</tr>
		<tr>
			<td>Enter Admin Name: </td>
		</tr>
		<tr>	
			<td><input type="name" name="" value=""/></td>
		</tr>
		
		<tr>
			<td>Enter Password:</td>
		</tr>
		<tr>
			<td> <input type="password" name="" value=""/></td>
		</tr>

		<tr>
			<td>Retype Password:</td>
		</tr>
		<tr>
			<td> <input type="password" name="" value=""/><hr /td>
		</tr>
		
		
			<tr>
			
			<td align="left">
				<input type="button" name="" value="Confirm">
				<a href="login.php">Login</a>
				
			</td>
		
	</table>
	</fieldset>
	</form>
	</center>
</body>
</html>