<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Verify Profiles</title>
</head>
<body>
	<center>
	<h1>Verify</h1>


	<form>
	<fieldset>
		<legend>Verify Profiles</legend>
	<table border="2">
		<tr>
			<td colspan="2" align="center">User ID:1111(Manager) </td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="">Correct
				<input type="checkbox" name="">Wrong
			</td>
			
		</tr>
		<tr>
			<td colspan="2" align="center">User ID:222(Photography) </td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="">Correct
				<input type="checkbox" name="">Wrong
			</td>
			
		</tr>
		<tr>
			<td>User ID:333(Catering) </td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="">Correct
				<input type="checkbox" name="">Wrong
				
			</td>
		</tr>
		<tr>
			<td>User ID:444(User) </td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="">Correct
				<input type="checkbox" name="">Wrong
				
			</td>
		</tr>
		
		
		
			<tr>
			
			<td align="left">
				<input type="button" onclick="location.href='Admininterface.php';" value="Verify" />
				<a href="Admininterface.php">Go Back...</a>
				
			</td>
		</tr>
		
	</table>
	</fieldset>
	</form>
	</center>
</body>
</html>