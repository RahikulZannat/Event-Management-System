<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Catering Employee</title>
</head>
<body>
	<center>
	<h1>Catering Employee</h1>


	<form>
	<fieldset>
		<legend>ADD</legend>
	<table border="2">
		<tr>
			<td>Add Employee ID: </td>
		</tr>
		
			<tr>
			
			<td align="center">
				<input type="button" onclick="location.href='Ruserregistration.php';" value="ADD" />
				
				
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