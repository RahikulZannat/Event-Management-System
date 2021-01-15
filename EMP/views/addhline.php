<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>

<html>
<head>
	<title>Add hotline</title>
</head>
<body>


	<form>
	<fieldset>
		<legend>Add Hotline</legend>
	<table>
		<tr>
			<td>Phone: </td>
			<td><input type="number" name="" value=""/></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td> <input type="Email" name="" value=""/><hr/td >
		</tr>
		
		
		<tr>
			<td td colspan=2 align= left>
				<input type="button" onclick="location.href='hline.php';" value="Add">
				<input type="button" onclick="location.href='hline.php';" value="Back">
				
			</td>
		</tr>
	</table>
	</fieldset>
	</form>
</body>
</html>
