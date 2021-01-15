<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="css/style.css" />
	<style>
		
	#button1
	{
		padding:8px;
		background-color: white;
		font-size: 16px;
		border-radius: 10px;
		font-weight: bolder;
		transition:background-color 2s ease 0s;

	}
	#button1:hover{
		background-color: gray;
	}


	</style>
</head>
<body>
	
	<h1><center>Login Page</center></h1>

	<hr width="60%" height="100%">
	<form action="../php/logCheck.php" method="post">
		<center>
			
    <strong>Username:</strong> 
    					<input type="text" id="uname" name="uname" value="">
    					 <span class = "error" id="NAME">*</span>
    					 <h2></h2>
    					 
    <strong>Password:</strong> 
                        <input type="password" id="password" name="password" value="">
                        <span class = "error" id="PASSWORD">*</span>
                        <br>
	<input type="submit" name="submit" value="Login" id="button1" onclick="ajax()">
		</center>
	</form>

	<hr>
	<script>
			function ajax(){
			var name = document.getElementById("uname").value;
			var password = document.getElementById("password").value;

			var xhttp = new XMLHttpRequest();	
			xhttp.onreadystatechange = function() {

			    if (this.readyState == 4 && this.status == 200){
			    	document.getElementById("NAME").innerHTML = this.responseText;
			    	document.getElementById("PASSWORD").innerHTML = this.responseText;
			    }
			};
			
			xhttp.open("POST", "logCheck.php?uname="+name, true);
			//xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.send(name,password); 
		}
	</script>
	<p><h4>Welcome to event mangement catering.</h4></p>


</body>
</html>
