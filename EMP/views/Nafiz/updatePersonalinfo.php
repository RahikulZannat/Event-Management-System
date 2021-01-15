<?php
	session_start();

	if(!isset($_SESSION['uname'])){  
		header("location: login.html");
	}

	require_once('../service/functions.php');
	$id = $_GET['id'];
	$user = updatePersonalinfo($id);

		 $usernameErr = $emailErr = $passwordErr = $addressErr =$DOBErr = $Errormsg = $positionErr ="";
		 $username = $email = $DOB = $password = $position ="";

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
				if (empty($_POST["address"])) {
					 $addressErr = "Address is required";
					 }
				if (empty($_POST["position"])) {
					 $positionErr = "position is required";
					 }
				if (empty($_POST["DOB"])) {
					 $DOBErr = "Date is required";
					 }	 
		 if (empty($_POST["username"]) || empty($_POST["email"]) ||  empty($_POST["password"]) || empty($_POST["DOB"])||empty($_POST["address"])||empty($_POST["position"]))        {
                    $Errormsg = "<h1>Missing Something</h1>";
                    }

	           else {
				    $username = $_POST['username'];
					$password = $_POST['password'];
					$email = $_POST['email'];
					$job = $_POST['position'];
					$dob = $_POST['DOB'];
					$address = $_POST['address'];

				
					$con = mysqli_connect('127.0.0.1', 'root', '', 'webtechprojectdb');
					$sql ="UPDATE employee SET username='{$username}', password='{$password}', position='{$job}' ,email='{$email}', address='{$address}' WHERE eid='{$GLOBALS['id']}'";


					if(mysqli_query($con, $sql)){
						 echo "<center><h2><em>Info updated!</em></h2></center>";
					}else{
						echo "Error";
						header("location: ../views/updatePersonalinfo.php");
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
	<center>
	<h2>Update User Data</h2>
	<form action="" method="post">
		<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" id="name" onkeyup="nameValid()" name="username" value="<?=$user['username']?>" >
					<span class = "error" id="NAME">* <?php echo $usernameErr;?></span>
				</td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" id="password"  onkeyup="passwordValid()" name="password" value="<?=$user['password']?>">
					<span class = "error" id="PASSWORD">* <?php echo $passwordErr;?>
				</td>
			</tr>
			<tr>
				<td>email:</td>
				<td><input type="text" id="email"  onkeyup="emailValid()" name="email" value="<?=$user['email']?>">
					<span class = "error" id="EMAIL">* <?php echo $emailErr;?>
				</td>
			</tr>
			<tr>
				<td>Occupation:</td>
				<td><input type="text" id="position" name="position" onkeyup="occupationValid()" value="<?=$user['position']?>">
					<span class = "error" id="POSITON">* <?php echo $positionErr;?></span>
				</td>
			</tr>
		    <tr>
				<td>DOB:</td>
				<td><input type="text" id="DOB" name="DOB" value="<?=$user['DOB']?>">
					<span class = "error" id="DATE">* <?php echo $DOBErr;?></span>
				</td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><input type="text" id="address"  onkeyup="addressValid()" name="address" value="<?=$user['address']?>">
					<span class = "error" id="ADDRESS">* <?php echo $addressErr;?></span>
				</td>
			</tr>
			<tr>
				<td><a href="PersonalInfo.php">Back</a></td>
				<td><input type="submit" name="update" value="update"></td>
			</tr>
		</table>
	</form>
	</center>


	<script>

  function nameValid()
    {
      "use strict"

    var name = document.getElementById('name').value;
        var canContain = " abcdefghijklmnopqrstuvwxyz.ABCDEFGHIJKLMNOPQRSTUVWXYZ-, ";      // range of characters for input
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
            //window.alert("Event Name can not be null/empty");
            document.getElementById('NAME').innerHTML = "Null submission";
          }else if(!valid){
           // window.alert("Type valid characters!");
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
					//window.alert("Password can not be null/empty");
					document.getElementById('PASSWORD').innerHTML = "Password can not be null/empty";				
				}
				else if(password.length<4)
				{
					//window.alert("Password length will be maore than 4 digits");
					document.getElementById('PASSWORD').innerHTML = "Password length will be maore than 4 digits";
				}
				else
				{
					//window.alert("Password ok");
					document.getElementById('PASSWORD').innerHTML = "Password ok";
				}

		}
	  function addressValid(){
            
            	"use strict"
				var address=document.getElementById('address').value;
				if(address=="" || address==null)
				{
					//window.alert("Address can not be null/empty");
					document.getElementById('ADDRESS').innerHTML = "Address can not be null/empty";

				}
				else
				{
					//window.alert("Address ok");
					document.getElementById('ADDRESS').innerHTML = "Address ok";
				}

		}

	function DOB(){
			"use strict";

			var valid = false;
			var day = document.getElementById("day").value;
			var month = document.getElementById("month").value;
			var year = document.getElementById("year").value;

			if((day>=1 && day<=31) && (month>=1 && month<=12) && (year>=1980 && year<=2010)){
				valid = true;
			}


			if(day = "" || month == "" || year == ""){
				//window.alert("Date Null/Blank Submission.");
				document.getElementById('DATE').innerHTML = "Null/Blank Submission.";
			}else if(!valid){
				//window.alert("Date not valid");
				document.getElementById('DATE').innerHTML = "Date not valid";
			}else{
				//window.alert("Date Ok");
				document.getElementById('DATE').innerHTML = "DATE Ok";
			}

	}

	function occupationValid()
	{   
            	"use strict"
				var position=document.getElementById('position').value;
				if(position =="" || position==null)
				{
					//window.alert("Password can not be null/empty");
					document.getElementById('POSITON').innerHTML = "Occupation can not be null/empty";
				}
				else
				{
					//window.alert("Password ok");
					document.getElementById('POSITON').innerHTML = "Occupation ok";
					return true;
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
					if(email.includes('.',atPosition+3)){      // after @ checks '.' and domain name length (min 2)
					valid = true;
				
				   }
				}
			
			
			}			

			if(email == "" || email == null){
				//window.alert("Email is null ");
				document.getElementById('EMAIL').innerHTML = "Email is null";
			}else if(!valid){
				//window.alert("Type a valid email address.");
				document.getElementById('EMAIL').innerHTML = "Type a valid email address.";
			}
			else{
				//window.alert("Email Valid");
				document.getElementById('EMAIL').innerHTML = "Email Valid";
			
				}
			
           }
		
	</script>
</body>
</html>



