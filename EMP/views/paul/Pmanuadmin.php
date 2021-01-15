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
	<h1>Information for Photographer Admin </h1>


	<form>
	<fieldset>
		<legend>ManuInfo</legend>
	<table>
			<tr>
			<td>Admin:> Pobitra Paul</td>
		</tr>
		
			
			<td align="left">
				<input type="button" onclick="location.href='photographeradmininfo.php';" value="Show Details" />
				
				
			</td>	
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