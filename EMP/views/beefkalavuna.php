<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Beef Kala Vuna</title>
</head>
<body>
	<center>
	


	<form>
	<fieldset>
		<legend><h2>Beef Kala Vuna</h2></legend>
	<table>

		<img src="../img/bkvuna.jpg"height="300px"/>
		<img src="../img/bkvuna2.jpg"height="300px"/>
		<tr>
			<td align="center">
			<input type="button" onclick="location.href='fcart.php';" value="Back">
				
			</td>
		</tr>
		
	</table>
	</fieldset>
	</form>
	</center>
</body>
</html>