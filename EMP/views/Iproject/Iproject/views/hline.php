<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>hotline</title>
	<link rel="stylesheet" href="css/hline.css" />
</head>
<body>
	<center>


	<form>
	<fieldset>
		<legend>Hot Line</legend>
	<table border="0" width="50%" height="80%">
		
		<tr>
			<td><b>Phone:</b> </td>
			<td>01712889868 </td>
			
		</tr>
		<tr>
			<td><b>Email:</b></td>
			<td>estiaq8898@outlook.com </td>
		</tr>
		
		<tr>

			<td colspan=2 align= center>
		     	<hr>
				<input type="button" onclick="location.href='addhline.php';" value="Add">
				<input type="button" onclick="location.href='removehline.php';" value="Remove">
				<input type="button" onclick="location.href='adminui.php';" value="Back">
			</td>
		</tr>
	</table>
	</fieldset>
	</form>
</center>
</body>
</html>