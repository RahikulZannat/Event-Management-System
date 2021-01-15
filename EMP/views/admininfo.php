<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin INFO</title>
</head>
<body>
	<center>
	<h1>Admin Information</h1>


	<form>
	<fieldset>
		<legend"><h2>Admin</h2></legend>
	<table>

		<img src="../img/ifty.jpg"height="250px"/>
		
		<tr><td><b>Name:</b> S. M. Estiaq Ahamed</td></tr>
		<tr><td><b>ID:</b> 17-33972-1</td></tr>
		<tr><td><b>Designation:</b> Catering Admin</td></tr>
			
			
				
				
		<tr>
			<td align="center">
			<input type="button" onclick="location.href='adminui.php';" value="Back">
				
			</td>
		</tr>
		
	</table>
	</fieldset>
	</form>
	</center>
</body>
</html>