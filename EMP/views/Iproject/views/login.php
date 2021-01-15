<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>
<center>
	Login Page
</center>
		 
	</h1>

	<hr>
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
	<input type="submit" name="submit" value="Submit" onclick="ajax()">
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


</body>
</html>
