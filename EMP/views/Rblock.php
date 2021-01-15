<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Block </title>
</head>
<body>
	<center>
	<h1>Block Users</h1>


	<form>
	<fieldset>
		<legend>Block</legend>
	<table>
		<tr>
			<td>User ID:1111(Manager) </td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="">Block
				<input type="checkbox" name="">Unblock
				
			</td>
		</tr>
		<tr>
			<td>User ID:222(Photography) </td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="">Block
				<input type="checkbox" name="">Unblock
				
			</td>
		</tr>
		<tr>
			<td>User ID:333(Catering) </td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="">Block
				<input type="checkbox" name="">Unblock
				
			</td>
		</tr>
		<tr>
			<td>User ID:444(User) </td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="">Block
				<input type="checkbox" name="">Unblock
				
			</td>
		</tr>
		
		
		
			<tr>
			
			<td align="left">
				<input type="button" onclick="location.href='Admininterface.php';" value="Verify" />
				
				
			</td>
		</tr>
		<tr><td><a href="Admininterface.php">Go Back...</a></td></tr>
		
	</table>
	</fieldset>
	</form>
	</center>
</body>
</html>