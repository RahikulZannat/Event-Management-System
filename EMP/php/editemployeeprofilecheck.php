<?php
	session_start();

	if(!isset($_SESSION['uname'])){  
		header("location: login.html");
	}

	//require('../service/db.php');
	require_once('../service/functions.php');
	$id = $_GET['id'];
	$user = getUserDataById($id);

		 $usernameErr = $emailErr = $passwordErr = $positionErr = $Errormsg = $positionErr ="";
		 $username = $email = $experience = $password = $position ="";

		 if ($_SERVER["REQUEST_METHOD"] == "POST") {

			    if (empty($_POST["username"])) {
					 $usernameErr = "Username is required";
				     }
			    if (empty($_POST["email"])) {
					 $emailErr = "Email is required";
				     }
			    if (empty($_POST["password"])) {
					 $passwordErr = "Password is required";
				     }
				if (empty($_POST["position"])) {
					 $positionErr = "position is required";
					 }
				if (empty($_POST["position"])) {
					 $positionErr = "position is required";
					 }
				if (empty($_POST["username"]) || empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["position"])) {
                    $Errormsg = "<h1>Missing Something</h1>";
                    }

	           else {
									
					$username = $_POST['username'];
					$password = $_POST['password'];
					$email = $_POST['email'];
					$job = $_POST['position'];
				
					$con = mysqli_connect('127.0.0.1', 'root', '', 'webtechprojectdb');
					$sql ="UPDATE employee SET username='{$username}', password='{$password}', position='{$job}' ,email='{$email}' WHERE eid='{$GLOBALS['id']}'";

						if(mysqli_query($con, $sql)){
							echo "done!";
						}else{
							echo "Error";
						}

                    }
       }

?>

<!DOCTYPE html>
<html>
<head>
	<center><title>Update User Data</title></center>
</head>
<body>
	<h2><center>Update User Data</center></h2>
	<center>
	<form action="" method="post">
		<table border="2">
			<tr>
				<td>Username:</td>
				<td><input type="text" id="name" onkeyup="nameValid()" name="username" value="<?=$user['username']?>">
					<span class = "error"  id="NAME">* <?php echo $usernameErr;?></span>
				</td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" id="password" onkeyup="passwordValid()" name="password" value="<?=$user['password']?>">
					<span class = "error">* <?php echo $passwordErr;?></span>
				</td>
			</tr>
			<tr>
				<td>email:</td>
				<td><input type="text" id="email" onkeyup="emailValid()" name="email" value="<?=$user['email']?>">
					<span class = "error">* <?php echo $emailErr;?></span>
				</td>
			</tr>
			<tr>
				<td>Occupation:</td>
				<td><input type="text" id="position" onkeyup="occupationValid()" name="position" value="<?=$user['position']?>">
					<span class = "error">* <?php echo $positionErr;?></span>
				</td>
			</tr>
			<tr>
				<td><a href="EmployeeList.php">Back</a></td>
				<td><input type="submit" name="update" value="update"></td>
			</tr>
		</table>
		<?php echo $Errormsg;?>
	</form>
	</center>
     
     <script>


		function submitValid(){
			"use strict"

			 nameValid();
		     passwordValid();
			 emailValid();
			 positionValid();
		}

function nameValid()
		{
			"use strict"

			var name = document.getElementById('name').value;
  			var words = name.split(' ');
  			var wordCount = words.length;
  			var canContain = " abcdefghijklmnopqrstuvwxyz.ABCDEFGHIJKLMNOPQRSTUVWXYZ-";      // range of characters for input
  			var nameL = name.length;
  			var temp = "";
  			var valid = false;

  			for(var i=0 ; i<nameL ; i++ ){                                                  // one by one input characters checking
  				temp = name.charAt(i);
  				var matchCheck = 0;

  				for(var j=0 ; j<canContain.length ; j++){
  					
  					if(temp == canContain.charAt(j)){
  						matchCheck = 1;
  					}
  				}
  				if(matchCheck == 1){
  					valid = true;
  				}else if(matchCheck == 0){
  					valid = false;
  					break;
  				}else{
  					window.alert("ERROR");
  				}
  			}
			if(name == "" || name == null){
				window.alert("Name can not be null/empty");
				document.getElementById('NAME').innerHTML = "Null submission";
			}else if(wordCount<2){
				//window.alert("Name should be at least of 2 words.");
				//document.getElementById('NAME').innerHTML = "Name should be at least of 2 words.";
			}else if(!valid){
				//window.alert("Type valid characters!");
				document.getElementById('NAME').innerHTML = "Type valid characters!";
				document.getElementById('name').value ="";
			}else{
			   // window.alert("Name Ok");
				document.getElementById('NAME').innerHTML = "Seems Ok";
			}
        }

	  function passwordValid(){
            
            	"use strict"
				var password=document.getElementById('password').value;
				var passwordLength=password.length;
				if(password=="" || password==null)
				{
					window.alert("Password can not be null/empty");
					//document.getElementById('PASSWORD').innerHTML = "Password can not be null/empty";				
				}
				else if(password.length<4)
				{
					window.alert("Password length will be maore than 4 digits");
					//document.getElementById('PASSWORD').innerHTML = "Password length will be maore than 4 digits";
				}
				else
				{
					window.alert("Password ok");
					//document.getElementById('PASSWORD').innerHTML = "Password ok";
				}

		}
	  function positionValid(){
            
            	"use strict"
				var position=document.getElementById('position').value;
				if(position=="" || position==null)
				{
					window.alert("position can not be null/empty");
					//document.getElementById('position').innerHTML = "position can not be null/empty";
				}
				else
				{
					window.alert("position ok");
					//document.getElementById('position').innerHTML = "position ok";
				}
			}

	function emailValid(){
			"use strict";

			var email = document.getElementById('email').value;
			var atPosition = email.indexOf('@'); 
			var temp="01234567890-+/"
			var valid = false;
			var count= 0;

			for(var i=0 ; i<=email.length ;i++)
			{
				if(email.charAt(i)=="@")
				{
					count=count+1;
				}
				else if(count>1)
				{
					valid=false;
					break;
				}
			for(var j=0 ; j<temp.length ; j++){
  					
  					if(email.charAt(0) == temp.charAt(j)){
  						valid=false;
			   	        break;
  					}
 
  				}
			

			  if(atPosition>0){                             // if @ exists continues
					if(email.includes('.',atPosition+3)){      // after @ checks 
					valid = true;
				
				   }
				}
			
			
			}			

			if(email == "" || email == null){
				window.alert("Email null submission");
				//document.getElementById('EMAIL').innerHTML = "null submission";
			}else if(!valid){
				window.alert("Type a valid email address.");
				//document.getElementById('EMAIL').innerHTML = "Type a valid email address.";
			}
			else{
				window.alert("Email Valid");
				//document.getElementById('EMAIL').innerHTML = "Seems Ok";
			
				}
			
           }
		
	</script>
</body>
</html>



