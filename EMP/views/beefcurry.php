<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Beef Curry</title>
</head>
<body>
	<center>
	


	<form>
	<fieldset>
		<legend><h2>Beef Curry</h2></legend>
	<table>

		<img src="../img/bcurry.jpg"height="300px"/>
		<img src="../img/bcurry2.jpg"height="300px"/>
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