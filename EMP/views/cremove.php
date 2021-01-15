<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<html>
<head>
	<title>Chef remove</title>
</head>
<body>


	<form>
	<fieldset>
		<legend>Remove Chef's Information</legend>
	<table>
		<tr>
			<td>Name: </td>
			<td><input type="name" name="" value=""/></td>
		</tr>
		<tr>
			<td>Age: </td>
			<td><input type="number" name="" value=""/></td>
		</tr>
		<tr>
			<td>Experience: </td>
			<td><input type="number" name="" value=""/></td>
		</tr>
		
		
		
		<tr>
			<td td colspan=1 align= left>
				<input type="button" onclick="location.href='cprofile.php';" value="Remove">
				<td td colspan=1 align= left>
				<input type="button" onclick="location.href='cprofile.php';" value="Back">
				
			</td>
		</tr>
	</table>
	</fieldset>
	</form>
</body>
</html>