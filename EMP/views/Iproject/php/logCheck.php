<?php
	session_start();

		$uname = $_POST['uname'];
		$password =  $_POST['password'];


include('../service/functions.php');


		if(empty(trim($uname)) || empty(trim($password))){
			echo "Null submission found!";
		}

		else{

	    	$user = validate($uname, $password);

				if(count($user) > 0 ){
				$_SESSION['uname'] = $uname;
				$_SESSION['pass'] = $password;

				header("location: ../views/adminui.php");
			}else{
				echo "invalid uname/password";
			}
		}

	//}
?>
