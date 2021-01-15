<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Yogurt</title>
</head>
<body>
	<center>
	


	<form>
	<fieldset>
		<legend><h2>yogurt</h2></legend>
	<table>

		<img src="../img/yo.jpg"height="300px"/>
		<img src="../img/yo2.jpg"height="300px"/>
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