<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Manage</title>
</head>
<body>
<center>
	
	
	
	
	<table border="1" width="300px">
	<form>
	
	<tr>
	<td colspan=3 align= "center"><h2>Food Cart Manage</h2></td>
	</tr>
		
	
	<form>
		
		<tr>

			<td colspan="1" align= "left">Food</td>
			<td colspan=1 align= right>
				<a href="fman.php">Manage
			</a>
		</td>
			
		</tr>
		<tr>

			<td colspan="1" align= "left">Price</td>
			<td colspan=1 align= right>
				<a href="pman.php">Manage
			</a>
		</td>
		</tr>
		<tr>
			<td td colspan=2 align= right>
				<input type="button" onclick="location.href='fcart.php';" value="Back">
	</tr>
	</table>
	</fieldset>
	</form>
	</center>
</body>
</html>