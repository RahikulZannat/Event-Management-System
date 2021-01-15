<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Photographer Admin INFO</title>
</head>
<body>
	
	<center>
	<h1>Photographer Admin Information</h1>


	<form>
	<fieldset>
		<legend>PhotographerAdmin</legend>
		<img src="../img/pobitra.jpg"height="250px"/>
	<table border="2">
		
		
			<tr>
			<td>Name:Pobitra paul</td>
			
			
		</tr>
		<tr><td>ID:0000-0000</td></tr>
		<tr><td>Degignation:Photographer Admin</td></tr>
		<tr><td>Adress:Basundhara R/A</td></tr>	
		<tr><td>DOB:27/12/1998</td></tr>
		<tr><td>Blood Group:A(+ve)</td></tr>	
		<tr><td>Company:<b>PRIN Event Planner</b></td></tr>		
				
		<tr>
			
			<td align="left">
				
				<a href="Pmanuadmin.php">Go Back..</a>
				
			</td>
		</tr>
		
	</table>
	</fieldset>
	</form>
	</center>
</body>
</html>