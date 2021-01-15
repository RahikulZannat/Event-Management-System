<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin INFO</title>
</head>
<body>
	
	<center>
	<h1>Admin Information</h1>


	<form>
	<fieldset>
		<legend>Admin</legend>
		<img src="../img/rahik.jpg"height="250px"/>
	<table border="2">
		
		
			<tr>
			<td>Name:Rahikul Zannat</td>
			
			
		</tr>
		<tr><td>ID:0000-0000</td></tr>
		<tr><td>Degignation:Admin</td></tr>
		<tr><td>Adress:Kuril FlyOver,Dhaka</td></tr>	
		<tr><td>Degignation:Admin</td></tr>
		<tr><td>DOB:16/06/1998</td></tr>
		<tr><td>Blood Group:B(+ve)</td></tr>	
		<tr><td>Company:<b>PRIN Event Planner</b></td></tr>		
				
		<tr>
			
			<td align="left">
				
				<a href="Rmanuadmin.php">Go Back..</a>
				
			</td>
		</tr>
		
	</table>
	</fieldset>
	</form>
	</center>
</body>
</html>