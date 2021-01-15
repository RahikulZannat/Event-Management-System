<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ManuInfo</title>
</head>
<body>
	<center>
	<h1>Manupulate Information for Admin </h1>


	<form>
	<fieldset>
		<legend>ManuInfo</legend>
	<table>
			<tr>
			<td>Admin:> Rahikul Zannat</td>
		</tr>
		
			
			<td align="left">
				<input type="button" onclick="location.href='admininfo.php';" value="Show Details" />
				
				
			</td>	
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