<?php
	session_start();
	if(!isset($_SESSION['uname'])){
		header("location: login.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Salary Form</title>
	<style>
		 .error {color: blue;}
	</style>
</head>
<body>
	<?php
		$enameErr = $eidErr = $salaryErr  =$Errormsg = "";
		 $ename = $eid = $salary = "";

		 	 if ($_SERVER["REQUEST_METHOD"] == "POST") {


                if (empty($_POST["ename"])) {
					 $nameErr = "Name is required";
					}

			    
			    if (empty($_POST["eid"])) {
					 $eidErr = "ID is required";
				     }
				if (empty($_POST["salary"])) {
					 $salaryErr = "salary is required";
			
					 }
			   
				if (empty($_POST["ename"]) || empty($_POST["eid"]) || empty($_POST["salary"])) {
                    $Errormsg = "<h1>Missing Something</h1>";
                    }

	       else {
									
						$ename = $_POST['ename'];
						$eid = $_POST['eid'];
						$salary = $_POST['salary'];
						

						$con = mysqli_connect('127.0.0.1', 'root', '', 'webtechprojectdb');
						$sql = "insert into salary values('' , '{$eid}'  ,  '{$ename}'  ,'{$salary}')";
						
						if(mysqli_query($con, $sql)){
							echo "Salary Update done!";
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
<h2>Salary</h2>

	<table border="2">
		<tr>
			 <td>Name:</td>
			 <td>
			      <input id="ename" type="text" name="ename" onkeyup="enameValid()">
			      <span class = "error" id="ENAME">* <?php echo $enameErr;?></span>
			 </td>
					
		</tr>
		<tr>
			 <td>Employee ID:</td>
			 <td> <input id="eid" type = "text" name = "eid" onkeyup="eidValid()">
				  <span class = "error" id="EID">*<?php echo $eidErr;?></span>
			 </td>
		</tr>
		
		<tr>
			 <td>Salary: </td>
			 <td><input id="salary" type = "text" name = "salary" onkeyup="salaryValid()">
				 <span class = "error" id="SALARY">* <?php echo $salaryErr;?></span>
			 </td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
				 <input type = "Submit" name = "submit" value = "Submit">
				<input type="reset" name="" value="Reset">
				<input type="button" onclick="location.href='PhotographerAdmininterface.php';" value="Back">
			</td>
		</tr>
	</table>
	         <?php echo $Errormsg;?>
		</center>

	</form>






	<script>


		function regValid(){
			"use strict"

			 enameValid();
		     eidValid();
			salaryValid();
			 
		}

	
function enameValid()
		{
			"use strict"

			var ename = document.getElementById('ename').value;
  			var words = ename.split(' ');
  			var wordCount = words.length;
  			var canContain = " abcdefghijklmnopqrstuvwxyz.ABCDEFGHIJKLMNOPQRSTUVWXYZ-";      // range of characters for input
  			var enameL = ename.length;
  			var temp = "";
  			var valid = false;

  			for(var i=0 ; i<enameL ; i++ ){                                                  // one by one input characters checking
  				temp = ename.charAt(i);
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
			if(ename == "" || ename == null){
				//window.alert("Name can not be null/empty");
				document.getElementById('ENAME').innerHTML = "Null submission";
			}else if(wordCount<2){
				//window.alert("Name should be at least of 2 words.");
				document.getElementById('ENAME').innerHTML = "ename should be at least of 2 words.";
			}else if(!valid){
				//window.alert("Type valid characters!");
				document.getElementById('ENAME').innerHTML = "Type valid characters!";
				document.getElementById('ename').value = "";
			}else{
				//window.alert("Name Ok");
				document.getElementById('ENAME').innerHTML = "Seems Ok";
			}
        }

	  function eidValid(){
            
            	"use strict"
				var eid=document.getElementById('eid').value;
				var eidLength=eid.length;
				if(eid=="" || eid==null)
				{
					//window.alert("Password can not be null/empty");
					document.getElementById('EID').innerHTML = "eid can not be null/empty";

				}
				else if(eid.length<4)
				{
					//window.alert("Password length will be maore than 4 digits");
					document.getElementById('EID').innerHTML = "Password length will be maore than 4 digits";
					document.getElementById('eid').value ="";
				}
				else
				{
					//window.alert("Password ok");
					document.getElementById('EID').innerHTML = "Password ok";
				}

		}
	  function salaryValid(){
            
            	"use strict"
				var salary=document.getElementById('salary').value;
				if(salary=="" || salary==null)
				{
					//window.alert("Password can not be null/empty");
					document.getElementById('SALARY').innerHTML = "Address can not be null/empty";
				}
				else
				{
					//window.alert("Password ok");
					document.getElementById('SALARY').innerHTML = "Address ok";
				}

		}
			
		
	</script>


	</body>
</html>