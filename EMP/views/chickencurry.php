<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chicken Curry</title>
</head>
<body>
	<center>
	


	<form>
	<fieldset>
		<legend><h2>Chicken Curry</h2></legend>
	<table>

		<img src="../img/ccurry.jpg"height="300px"/>
		<img src="../img/ccurry2.jpg"height="300px"/>
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