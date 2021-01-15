<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Interface</title>
	<link rel="stylesheet" href="css/ui.css" />
	<style>
		
	#button1
	{
		padding:10px;
		background-color: violet;
		font-size: 20px;
		border-radius: 10px;
		font-weight: bolder;
		transition:background-color 2s ease 0s;

	}
	#button2
	{
		padding:10px;
		background-color: violet;
		font-size: 20px;
		border-radius: 10px;
		font-weight: bolder;
		transition:background-color 2s ease 0s;
	}
	#button3
	{
		padding:10px;
		background-color:violet;
		font-size: 20px;
		border-radius: 10px;
		font-weight: bolder;
		transition:background-color 2s ease 0s;
	}



	#button1:hover{
		background-color: blue;
	}
	#button2:hover{
		background-color: blue;
	}
	#button3:hover{
		background-color: blue;
	}
	#button4
	{
		padding:8px;
		background-color:blue;
		font-size: 15px;
		border-radius: 10px;
		font-weight: bolder;
		transition:background-color 2s ease 0s;
	}
	#button4:hover{
		background-color: red;
	}


	</style>
</head>
<body>
<center>
	<h1> Food Admin</h1>


	<form>
	
	<div align="center" style="background-color: wblur">
		
				<input type="button" onclick="location.href='fcart.php';" value="Food Cart" id="button1"/>
				
		<br></br>
		
				<input type="button" onclick="location.href='cprofile.php';" value="Chefs List" id="button2"/>
			
		<br></br>
		
				<input type="button" onclick="location.href='hline.php';" value="Hot Line" id="button3"/>
				
			
		<br></br>

		</form>
		<form>
		
			<td>
				<input type="button" onclick="location.href='admininfo.php';" value="Personal Info" id="button4"/>
				<input type="button" onclick="location.href='reg.php';" value="Registration" id="button4"/>

				<input type="button" onclick="location.href='login.php';" value="Logout" id="button4"/>
				
			</td>
		</tr>
	</form>
</div>
</body>
</html>
