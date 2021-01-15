<?php
	session_start();

	if(!isset($_SESSION['uname'])){  
		header("location: login.html");

		$id = $_GET['id'];
	}


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
					$sql ="UPDATE employee SET username='{$username}', password='{$password}', position='{$job}' ,email='{$email}' WHERE eid='{$GLOBALS['id']}'";



					if(mysqli_query($con, $sql)){
						 echo "<center><h2><em>Info updated!</em></h2></center>";
					}else{
						echo "Error";
						header("location: ../views/updatePersonalinfo.php");
		                  }
						
                    }
       }

?>