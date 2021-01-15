<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer Information</title>
</head>
<body>
	<center>
	<h1>Customer Information</h1>


	<form>
	<fieldset>
		<legend>UserInfo</legend>
	<table>
		
			<tr>
			<td>Name:Pobitra Mondol</td>
			
			
		</tr>
		<tr><td>ID:8888-0000</td></tr>
		<tr><td>Degignation:User</td></tr>
		<tr><td>Adress:Dhanmondi,Dhaka</td></tr>	
			
				
				
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