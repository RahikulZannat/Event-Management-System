<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Photographer Information</title>
</head>
<body>
	<center>
	<h1>Photographer Information</h1>


	<form>
	<fieldset>
		<legend>UserInfo</legend>
	<table>
		
			<tr>
			<td>Name:Zannat</td>
			
			
		</tr>
		<tr><td>ID:8888-0000</td></tr>
		<tr><td>Degignation:User</td></tr>
		<tr><td>Adress:Dhanmondi,Dhaka</td></tr>	
			
				
				
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