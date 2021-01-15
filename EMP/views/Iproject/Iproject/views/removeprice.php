<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<html>
<head>
	<title>Remove Price</title>
</head>
<body>


	<form>
	<fieldset>
		<legend>Remove Food Price</legend>
	<table>
		<tr>
			<td>Price: </td>
			<td><input type="number" name="" value=""/></td>
		</tr>
		
		<tr>
			<td td colspan=1 align= left>
				<input type="button" onclick="location.href='fcart.php';" value="Remove">

				<td td colspan=1 align= left>
				<input type="button" onclick="location.href='fcremove.php';" value="Back">

				
			</td>
		</tr>
	</table>
	</fieldset>
	</form>
</body>
</html>