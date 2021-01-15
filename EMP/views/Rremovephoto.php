<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Remove Photographer</title>
</head>
<body>
	<center>
	<h1>Remove Photographer</h1>


	<form>
	<fieldset>
		<legend>Remove</legend>
	<table border="2">
		<tr>
			<td>Remove Photographer ID: </td>
		</tr>
		 
				<tr>
			
			<td align="center">
				<input type="button" onclick="location.href='Remployeelist.php';" value="Remove" />
				
				
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