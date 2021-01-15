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
	<h1>Manupulate Information for all user </h1>


	<form>
	<fieldset>
		<legend>ManuInfo</legend>
	<table>
		<tr>
			<td>Manager Information</td>
		</tr>
		
			
			<td align="left">
				<input type="button" onclick="location.href='https://www.google.com/';" value="Show Details" />
				
				
			</td>
			<tr>
			<td>Catering Admin Information</td>
		</tr>
		
			
			<td align="left">
				<input type="button" onclick="location.href='https://www.google.com/';" value="Show Details" />
				
				
			</td>
			<tr>
			<td>Photographer Admin Information</td>
		</tr>
		
			
			<td align="left">
				<input type="button" onclick="location.href='https://www.google.com/';" value="Show Details" />
				
				
			</td>
			<tr>
			<td>Customer Information</td>
		</tr>
		
			
			<td align="left">
				<input type="button" onclick="location.href='Ruserreg.php';" value="Show Details" />
				
				
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