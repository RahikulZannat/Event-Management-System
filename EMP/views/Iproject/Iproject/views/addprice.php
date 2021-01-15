<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>

<html>
<head>
	<title>add price</title>
</head>
<body>


	<form>
	<fieldset>
		<legend>Add Food Price</legend>
	<table>
		<tr>
			<td>Price: </td>
			<td><input type="number" name="" value=""/></td>
		</tr>
		
		
		
		<tr>
			<td td colspan=1 align= left>
				<input type="button" onclick="location.href='fcart.php';" value="Add">
				<td td colspan=1 align= left>
				<input type="button" onclick="location.href='fcadd.php';" value="Back">
				
			</td>
		</tr>
	</table>
	</fieldset>
	</form>
</body>
</html>