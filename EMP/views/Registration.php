<?php
	session_start();
	if(!isset($_SESSION['uname'])){
		header("location: login.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<style>
		 .error {color: #FF0000;}
	</style>
</head>
<body>
	<?php
		$nameErr = $emailErr = $genderErr = $passwordErr = $addressErr = $contactErr =$Errormsg = "";
		 $name = $email = $gender = $experience = $contact = $password = "";

		 	 if ($_SERVER["REQUEST_METHOD"] == "POST") {


                if (empty($_POST["name"])) {
					 $nameErr = "Name is required";
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
			   	if (empty($_POST["contact"])) {
					 $contactErr = "Contact No is required";
			
					 }
				if (empty($_POST["gender"])) {
					 $genderErr = "Gender is required";
				    }
				if (empty($_POST["name"]) || empty($_POST["gender"]) || empty($_POST["address"])) {
                    $Errormsg = "<h1>Missing Something</h1>";
                    }

	       else {
									
						$username = $_POST['name'];
						$password = $_POST['password'];
						$gender = $_POST['gender'];
						$email = $_POST['email'];
						$DOB = $_POST['date'];
						$BG = $_POST['bloodGroup'];
						$JoiningDate = //$_POST['email'];
						$position = $_POST['position'];
						$address = $_POST['address'];


						$con = mysqli_connect('127.0.0.1', 'root', '', 'webtechprojectdb');
						$sql = "insert into employee values('' , '{$username}'  ,  '{$password}'  ,'{$gender}',  '{$email}'  , '{$DOB}' , '{$BG}' , '{$JoiningDate}'  , '{$position}' , '', '{$address}')";
						
						if(mysqli_query($con, $sql)){
							echo "Registration done!";
						}
						else
						{
							echo "Something Error";

						}
		        }
	}

	 ?>
	
	<form method = "post" action = "">

		<center>
<h2>Registration</h2>

	<table border="2">
		<tr>
			 <td>Name:</td>
			 <td>
			      <input id="name" type="text" name="name" onkeyup="nameValid()">
			      <span class = "error" id="NAME">* <?php echo $nameErr;?></span>
			 </td>
					
		</tr>
		<tr>
			 <td>Password:</td>
			 <td> <input id="password" type = "text" name = "password" onkeyup="passwordValid()">
				  <span class = "error" id="PASSWORD">*<?php echo $passwordErr;?></span>
			 </td>
		</tr>
		<tr>
			<td>DOB:</td>
			<td>	<div>  day  &nbsp;  month  &nbsp;&nbsp;&nbsp;  year</div>
				<input id="day" type="number" size="1" name="date" value="" style="width: 3em" onkeyup="DOB()">/ 
				<input id="month" type="number" size="1" name="date" value="" style="width: 3em" onkeyup="DOB()">/
				<input id="year" type="number" size="3" name="date" value="" style="width: 4em" onkeyup="DOB()"> 
				 <span class = "error" id="DATE">*<?php echo $passwordErr;?></span>
           </td>
		</tr>
    <tr>
      <td>Contact no:</td>
      <td><input id="contact" type="text" name="contact" value="" onkeyup="contactValid()">
      	  <span class = "error" id="CONTACT">* <?php echo $contactErr;?></span>
      </td>
    </tr>
		<tr>
			 <td>E-mail: </td>
			 <td><input id="email" type = "text" name = "email" onkeyup="emailValid()">
				 <span class = "error" id="EMAIL">* <?php echo $emailErr;?></span>
			 </td>
		</tr>
		<tr>
			 <td>Gender:</td>
			 <td>
				<input id="male" type="radio" name="gender" value="male" onkeyup="genderValid()">Male 
				<input id="female" type="radio" name="gender" value="female" onkeyup="genderValid()" >Female 
				<input id="other" type="radio" name="gender" value="other" onkeyup="genderValid()">Other 
				<span class = "error" id="GENDER">* <?php echo $genderErr;?></span>
			 </td>
		</tr>
		<tr>
			<td>Occupaton:</td>
			<td>
				<input id="photographer" type="checkbox" name="position" value="Photographer">Photographer
				<input id="designer" type="checkbox" name="position"value="Designer">Designer
      			<input id="cook" type="checkbox" name="position" value="Cook">Cook
       		    <input id="staff" type="checkbox" name="position" value="Staff">Staff
			</td>
		</tr>
		<tr>
			<td>BG:</td>
			<td>
				<select name="bloodGroup">
					  <option  value="N/A">N/A</option>
					  <option  value="A+" >A+</option>
					  <option  value="A-">A-</option>
					  <option  value="B+">B+</option>
					  <option  value="B-">B-</option>
					  <option  value="O+">O+</option>
					  <option  value="O-">O-</option>
				</select>
			</td>
		</tr>
		<tr>
			 <td>Joining Date</td>
			 <td>
			 	    <div>  day  &nbsp;  month  &nbsp;&nbsp;&nbsp;  year</div>
					<input id="dd" type="number" size="1" name="dd" value="" style="width: 3em" onkeyup="joiningDate()">/ 
					<input id="mm" type="number" size="1" name="mm" value="" style="width: 3em" onkeyup="joiningDate()">/
					<input id="yyyy" type="number" size="3" name="yyyy" value="" style="width: 4em" onkeyup="joiningDate()"> 
					 <span class = "error" id="joinDATE">*<?php echo $passwordErr;?></span>
			</td>
		</tr>
		<tr>
			 <td>Address</td>
			 <td><input type="text" id="address" name="address" onkeyup="addressValid()">
			 	 <span class = "error" id="ADDRESS">*<?php echo $addressErr;?></span>
			 </td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				 <input type = "Submit" name = "submit" value = "Submit">
				<input type="reset" name="" value="Reset">
				<input type="button" onclick="location.href='home.php';" value="Back">
			</td>
		</tr>
	</table>
	         <?php echo $Errormsg;?>
		</center>

	</form>






	<script>


		function regValid(){
			"use strict"

			 nameValid();
		     passwordValid();
			 DOB();
			 contactValid();
			 genderValid();
			 emailValid();
			//occupationValid()
			 //bloodGroup();
			 joiningDate();
			 addressValid();
		}

	
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
					//window.alert("Password can not be null/empty");
					document.getElementById('ADDRESS').innerHTML = "Address can not be null/empty";
				}
				else
				{
					//window.alert("Password ok");
					document.getElementById('ADDRESS').innerHTML = "Address ok";
				}

		}

	function DOB(){
			"use strict";

			var valid = false;
			var day = document.getElementById("day").value;
			var month = document.getElementById("month").value;
			var year = document.getElementById("year").value;
			var date = day+ "/" + month + "/" + year;

			if((day>=1 && day<=31) && (month>=1 && month<=12) && (year>=1980 && year<=2010)){
				valid = true;
			}


			if(day = "" || month == "" || year == ""){
				//window.alert("Date Null/Blank Submission.");
				document.getElementById('DATE').innerHTML = "Null/Blank.";
			}else if(!valid){
				//window.alert("Date not valid");
				document.getElementById('DATE').innerHTML = "Date not valid";
			}else{
				document.getElementById('DATE').innerHTML = "DATE Ok";
				window.alert(date);
				document.getElementsByName("date").value = date;
			}

	}

		function joiningDate(){
			"use strict";

			var valid = false;
			var day = document.getElementById("dd").value;
			var month = document.getElementById("mm").value;
			var year = document.getElementById("yyyy").value;

			if((day>=1 && day<=31) && (month>=1 && month<=12) && (year>=2020)){
				valid = true;
			}


			if(day = "" || month == "" || year == ""){
				//window.alert("Date Null/Blank Submission.");
				document.getElementById('joinDATE').innerHTML = "Null/Blank Submission.";
			}else if(!valid){
				//window.alert("Date not valid");
				document.getElementById('joinDATE').innerHTML = "Date not valid";
			}else{
				//window.alert("Date Ok");
				document.getElementById('joinDATE').innerHTML = "Seems Ok";

			}

	}



	function contactValid(){
			"use strict"

			var contact = document.getElementById('contact').value;
   			//var contact = prompt("enter the num");
   			var canContain = "+0123456789";
   			var chk=contact.slice(1,contact.length);
   			var temp = ""; 
  			var valid = false;

  				for(var i=0 ; i<contact.length ; i++ ){                                                  // one by one input characters checking
  				temp = contact.charAt(i);
  				var matchCheck = 0;

  				for(var j=0 ; j<canContain.length ; j++){
  					
  					if(temp == canContain.charAt(j)){
  						matchCheck = 1;
  					}
  				}
  				for(var k=0 ; k<chk.length ;k++){
  					if(chk.charAt(k)=='+')
  					{
  						matchCheck = 0;
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
  				if(contact == "" || contact == null){
				//window.alert("Contact null submission");
				document.getElementById('CONTACT').innerHTML = "Null/Blank Submission.";
				}
				else if(!valid){
				//window.alert("Type valid number!");
				document.getElementById('CONTACT').innerHTML = "Type valid number!";
				document.getElementById('contact').value ="";
				}
				else{
					//window.alert("number ok");
					document.getElementById('CONTACT').innerHTML = "Contact number ok";
				}
			
	}
	function genderValid(){
	  "use strict";

			var gender = "null"

			if(document.getElementById('male').checked){

				gender = document.getElementById('male').value;
				//window.alert("gender Ok");
				//document.getElementById('GENDER').innerHTML = "OK.";

			}else if(document.getElementById('female').checked){

				gender = document.getElementById('female').value;
				//window.alert("gender Ok");
				//document.getElementById('GENDER').innerHTML = "OK.";

			}else if(document.getElementById('other').checked){

				gender = document.getElementById('other').value;
				//window.alert("gender Ok");
				//document.getElementById('GENDER').innerHTML = "OK.";

			}else{

				//window.alert("Please select one from gender option.");
				document.getElementById('GENDER').innerHTML = "Please select one from gender option.";
			}	
		}
	function occupationValid()
	{
		  "use strict";

			var job = "null"


			if(document.getElementById('photographer').checked){

				job = document.getElementById('male').value;
				window.alert(" photographer selected");
				//document.getElementById('msg').innerHTML = gender;

			}else if(document.getElementById('designer').checked){

				gender = document.getElementById('designer').value;
				window.alert("designer selected");
				//document.getElementById('msg').innerHTML = gender;

			}else if(document.getElementById('cook').checked){

				gender = document.getElementById('cook').value;
				window.alert("cook selected");
				//document.getElementById('msg').innerHTML = gender;

			}
			else if(document.getElementById('staff').checked){

				gender = document.getElementById('staff').value;
				window.alert("staff selected");
				//document.getElementById('msg').innerHTML = gender;

			}else{

				window.alert("Please select one from Occupaton option.");
				//document.getElementById('msg').innerHTML = gender;
			}
	}
	function bloodGroup(){
			"use strict";

			var bloodGroup = "";
			bloodGroup = document.getElementById("bloodGroup").value;

			if(bloodGroup == "" || bloodGroup == null){
				window.alert("null submission");
				//document.getElementById('msg').innerHTML = "Null submission";

			}else{
				window.alert("Blood Group Ok");
				//document.getElementById('msg').innerHTML = bloodGroup;
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
				//window.alert("null submission");
				document.getElementById('EMAIL').innerHTML = "Email null submission";
			}else if(!valid){
				//window.alert("Type a valid email address.");
				document.getElementById('EMAIL').innerHTML = "Type a valid email address.";
			}
			else{
				//window.alert("Email Valid");
				document.getElementById('EMAIL').innerHTML = "Seems Ok";
			
				}

				
			
           }
		
	</script>


	</body>
</html>