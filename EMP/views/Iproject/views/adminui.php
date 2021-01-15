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
	<h1> Food Admin</h1>


	<form>
	
	<table  border="1" width="70%" height="100%">
		<tr>

			<td colspan=2 align= "center">Food Name</td>
		</tr>
		
		<tr>
			<td colspan=2 align= "center">
				<input type="button" onclick="location.href='fcart.php';" value="Food Cart">
				
			</td>
		</tr>
		<tr>

			<td colspan=2 align= "center">Price Management</td>
		</tr>
		
		<tr>
			<td colspan=2 align= "center">
				<input type="button" onclick="location.href='fcart.php';" value="Price List">
			</td>
		</tr>
		<tr>

			<td colspan=2 align= "center">Chefs Profile</td>
		</tr>
				<tr>
			<td colspan=2 align= "center">
				<input type="button" onclick="location.href='cprofile.php';" value="Chefs List">
			</td>
		</tr>
		
		<tr>

			<td colspan=2 align= "center">Hotline</td>
		</tr>
				<tr>
			<td colspan=2 align= "center">
				<input type="button" onclick="location.href='hline.php';" value="Check">
				
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="button" onclick="location.href='admininfo.php';" value="Personal Info">
				<input type="button" onclick="location.href='reg.php';" value="Registration">

				<input type="button" onclick="location.href='login.php';" value="Logout">
				
			</td>
		</tr>
	</table>
	</fieldset>
	</form>
	</center>
</body>
</html>
