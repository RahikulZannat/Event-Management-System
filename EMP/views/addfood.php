<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>

<html>
<head>
	<title>Add food name</title>
</head>
<body>


	<form>
	<fieldset>
		<legend>Add Food Name</legend>
	<table>
		<tr>
			<td>Name: </td>
			<td><input type="text" name="" value=""/></td>
		</tr>
		<tr>
			<td td colspan=1 align= left>
				<input type="button"  onclick="location.href='fcart.php';" value="Add">
				<td td colspan=1 align= left>
				<input type="button" onclick="location.href='fcadd.php';" value="Back">
				
			</td>
		</tr>
	</table>
	</fieldset>
	</form>
</body>
</html>